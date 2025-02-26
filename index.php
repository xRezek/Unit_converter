<?php
require_once 'convert.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Unit converter</title>
  </head>
  <body>
    <div class="grid">
      <?php if(htmlspecialchars($_GET['converter']) === "length"): ?>
      <div class="cell form-container">
        <h1 class="title">Unit converter</h1>
        <div class="tabs">
          <ul>
            <li class="is-active"><a href="?converter=length">Length</a></li>
            <li><a href="?converter=weight">Weight</a></li>
            <li><a href="?converter=temperature">Temperature</a></li>
          </ul>
        </div>
        <form action="convert.php" method="post">
          <div class="field">
            <label class="label">Value</label>
            <div class="control">
              <input class="input" type="number" name="value" placeholder="Enter value">
            </div>
          </div>
          <div class="field">
            <label class="label">From</label>
            <div class="control">
              <div class="select">
                <select name="from">
                  <option value="m">Meter</option>
                  <option value="cm">Centimeter</option>
                  <option value="km">Kilometer</option>
                  <option value="mm">Millimeter</option>
                  <option value="ft">Feet</option>
                  <option value="in">Inch</option>
                  <option value="yd">Yard</option>
                  <option value="mi">Mile</option>
                </select>
              </div>
            </div>
          </div>
          <div class="field">
            <label class="label">To</label>
            <div class="control">
              <div class="select">
                <select name="to">
                  <option value="m">Meter</option>
                  <option value="cm">Centimeter</option>
                  <option value="km">Kilometer</option>
                  <option value="mm">Millimeter</option>
                  <option value="ft">Feet</option>
                  <option value="in">Inch</option>
                  <option value="yd">Yard</option>
                  <option value="mi">Mile</option>
                </select>
              </div>
            </div>
          </div>
          <div class="field ">
            <div class="control">
              <button class="button is-link mt-3">Convert</button>
            </div>
          </div>
        </form>
      </div>
      <?php elseif(htmlspecialchars($_GET['converter']) === "weight"): ?>
      <div class="cell form-container">
        <h1 class="title">Unit converter</h1>
        <div class="tabs">
          <ul>
            <li><a href="?converter=length">Length</a></li>
            <li class="is-active"><a href="?converter=weight">Weight</a></li>
            <li><a href="?converter=temperature">Temperature</a></li>
          </ul>
        </div>
        <form action="convert.php" method="post">
          <div class="field">
            <label class="label">Value</label>
            <div class="control">
              <input class="input" type="number" name="value" placeholder="Enter value">
            </div>
          </div>
          <div class="field">
            <label class="label">From</label>
            <div class="control">
              <div class="select">
                <select name="from">
                  <option value="kg">Kilogram</option>
                  <option value="g">Gram</option>
                  <option value="mg">Milligram</option>
                  <option value="lb">Pound</option>
                  <option value="oz">Ounce</option>
                  <option value="t">Ton</option>
                </select>
              </div>
            </div>
          </div>
          <div class="field">
            <label class="label">To</label>
            <div class="control">
              <div class="select">
                <select name="to">
                  <option value="kg">Kilogram</option>
                  <option value="g">Gram</option>
                  <option value="mg">Milligram</option>
                  <option value="lb">Pound</option>
                  <option value="oz">Ounce</option>
                  <option value="t">Ton</option>
                </select>
              </div>
            </div>
          </div>
          <div class="field ">
            <div class="control">
              <button class="button is-link mt-3">Convert</button>
            </div>
          </div>
        </form>
        <?php elseif(htmlspecialchars($_GET['converter']) === "temperature"): ?>
          <div class="cell form-container">
        <h1 class="title">Unit converter</h1>
        <div class="tabs">
          <ul>
            <li><a href="?converter=length">Length</a></li>
            <li><a href="?converter=weight">Weight</a></li>
            <li  class="is-active"><a href="?converter=temperature">Temperature</a></li>
          </ul>
        </div>
        <form action="convert.php" method="post">
          <div class="field">
            <label class="label">Value</label>
            <div class="control">
              <input class="input" type="number" name="value" placeholder="Enter value">
            </div>
          </div>
          <div class="field">
            <label class="label">From</label>
            <div class="control">
              <div class="select">
                <select name="from">
                  <option value="c">Celsius</option>
                  <option value="f">Fahrenheit</option>
                  <option value="k">Kelvin</option>
                </select>
              </div>
            </div>
          </div>
          <div class="field">
            <label class="label">To</label>
            <div class="control">
              <div class="select">
                <select name="to">
                  <option value="c">Celsius</option>
                  <option value="f">Fahrenheit</option>
                  <option value="k">Kelvin</option>
                </select>
              </div>
            </div>
          </div>
          <div class="field">
            <div class="control">
              <button class="button is-link mt-3">Convert</button>
            </div>
          </div>
        </form>
      <?php elseif(htmlspecialchars($_GET['converter']) === "result"):?>
      <div class="cell form-container">
        <h1 class="title">Unit converter</h1>
        <h4 class="subtitle mt-5">Result of the calculation</h4>
        <p class="is-size-5"><?= htmlspecialchars($_GET['result']) ?></p>
        
          <div class="field">
            <div class="control">
              <a href="index.php"><button class="button is-link mt-3">Reset</button></a>
            </div>
          </div>
      <?php else:
        header("Location: index.php?converter=length");
        exit;
      endif;?>    
    </div>
  </body>
</html>
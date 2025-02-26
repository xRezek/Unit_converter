<?php
  if(isset($_POST['value']) && isset($_POST['from']) && isset($_POST['to'])){
    
  
    $convertFrom = $_POST['from'];
    $convertTo = $_POST['to'];
    $value = $_POST['value'] ?? 1;
    $result = 0;

    switch(true){
      case $convertFrom === "m" && $convertTo === "cm":
        $result = $value * 100;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "m" && $convertTo === "km":
        $result = $value / 1000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "m" && $convertTo === "mm":
        $result = $value * 1000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "m" && $convertTo === "ft":
        $result = $value * 3.28084;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "m" && $convertTo === "in":
        $result = $value * 39.3701;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "m" && $convertTo === "yd":
        $result = $value * 1.09361;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "m" && $convertTo === "mi":
        $result = $value / 1609.34;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "cm" && $convertTo === "m":
        $result = $value / 100;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "cm" && $convertTo === "km":
        $result = $value / 100000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "cm" && $convertTo === "mm":
        $result = $value * 10;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "cm" && $convertTo === "ft":
        $result = $value * 0.0328084;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "cm" && $convertTo === "in":
        $result = $value * 0.393701;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "cm" && $convertTo === "yd":
        $result = $value * 0.0109361;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "cm" && $convertTo === "mi":
        $result = $value / 160934;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "km" && $convertTo === "m":
        $result = $value * 1000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "km" && $convertTo === "cm":
        $result = $value * 100000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "km" && $convertTo === "mm":
        $result = $value * 1000000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "km" && $convertTo === "ft":
        $result = $value * 3280.84;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "km" && $convertTo === "in":
        $result = $value * 39370.1;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "km" && $convertTo === "yd":
        $result = $value * 1093.61;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "km" && $convertTo === "mi":
        $result = $value / 1.60934;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mm" && $convertTo === "m":
        $result = $value / 1000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mm" && $convertTo === "cm":
        $result = $value / 10;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mm" && $convertTo === "km":
        $result = $value / 1000000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mm" && $convertTo === "ft":
        $result = $value * 0.00328084;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mm" && $convertTo === "in":
        $result = $value * 0.0393701;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mm" && $convertTo === "yd":
        $result = $value * 0.00109361;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mm" && $convertTo === "mi":
        $result = $value / 1609340;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "ft" && $convertTo === "m":
        $result = $value / 3.28084;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "ft" && $convertTo === "cm":
        $result = $value / 0.0328084;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "ft" && $convertTo === "km":
        $result = $value / 3280.84;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "ft" && $convertTo === "mm":
        $result = $value / 0.00328084;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "ft" && $convertTo === "in":
        $result = $value * 12;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "ft" && $convertTo === "yd":
        $result = $value / 3;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "ft" && $convertTo === "mi":
        $result = $value / 5280;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "in" && $convertTo === "m":
        $result = $value / 39.3701;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "in" && $convertTo === "cm":
        $result = $value / 0.393701;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "in" && $convertTo === "km":
        $result = $value / 39370.1;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "in" && $convertTo === "mm":
        $result = $value / 0.0393701;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "in" && $convertTo === "ft":
        $result = $value / 12;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "in" && $convertTo === "yd":
        $result = $value / 36;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "in" && $convertTo === "mi":
        $result = $value / 63360;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "yd" && $convertTo === "m":
        $result = $value / 1.09361;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "yd" && $convertTo === "cm":
        $result = $value / 0.0109361;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "yd" && $convertTo === "km":
        $result = $value / 1093.61;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "yd" && $convertTo === "mm":
        $result = $value / 0.00109361;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "yd" && $convertTo === "ft":
        $result = $value * 3;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "yd" && $convertTo === "in":
        $result = $value * 36;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "yd" && $convertTo === "mi":
        $result = $value / 1760;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mi" && $convertTo === "m":
        $result = $value * 1609.34;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mi" && $convertTo === "cm":
        $result = $value * 160934;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mi" && $convertTo === "km":
        $result = $value * 1.60934;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mi" && $convertTo === "mm":
        $result = $value * 1609340;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mi" && $convertTo === "ft":
        $result = $value * 5280;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mi" && $convertTo === "in":
        $result = $value * 63360;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mi" && $convertTo === "yd":
        $result = $value * 1760;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "kg" && $convertTo === "g":
        $result = $value * 1000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "kg" && $convertTo === "mg":
        $result = $value * 1000000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "kg" && $convertTo === "lb":
        $result = $value * 2.20462;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "kg" && $convertTo === "oz":
        $result = $value * 35.274;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "kg" && $convertTo === "t":
        $result = $value / 1000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "g" && $convertTo === "kg":
        $result = $value / 1000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "g" && $convertTo === "mg":
        $result = $value * 1000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "g" && $convertTo === "lb":
        $result = $value * 0.00220462;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "g" && $convertTo === "oz":
        $result = $value * 0.035274;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "g" && $convertTo === "t":
        $result = $value / 1000000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mg" && $convertTo === "kg":
        $result = $value / 1000000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mg" && $convertTo === "g":
        $result = $value / 1000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mg" && $convertTo === "lb":
        $result = $value * 2.20462e-6;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mg" && $convertTo === "oz":
        $result = $value * 3.5274e-5;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "mg" && $convertTo === "t":
        $result = $value / 1e9;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "lb" && $convertTo === "kg":
        $result = $value / 2.20462;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "lb" && $convertTo === "g":
        $result = $value / 0.00220462;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "lb" && $convertTo === "mg":
        $result = $value / 2.20462e-6;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "lb" && $convertTo === "oz":
        $result = $value * 16;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "lb" && $convertTo === "t":
        $result = $value / 2204.62;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "oz" && $convertTo === "kg":
        $result = $value / 35.274;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "oz" && $convertTo === "g":
        $result = $value / 0.035274;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "oz" && $convertTo === "mg":
        $result = $value / 3.5274e-5;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "oz" && $convertTo === "lb":
        $result = $value / 16;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "oz" && $convertTo === "t":
        $result = $value / 35274;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "t" && $convertTo === "kg":
        $result = $value * 1000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "t" && $convertTo === "g":
        $result = $value * 1000000;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "t" && $convertTo === "mg":
        $result = $value * 1e9;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "t" && $convertTo === "lb":
        $result = $value * 2204.62;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "t" && $convertTo === "oz":
        $result = $value * 35274;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "c" && $convertTo === "f":
        $result = $value * 9 / 5 + 32;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "c" && $convertTo === "k":
        $result = $value + 273.15;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "f" && $convertTo === "c":
        $result = ($value - 32) * 5 / 9;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "f" && $convertTo === "k":
        $result = ($value - 32) * 5 / 9 + 273.15;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "k" && $convertTo === "c":
        $result = $value - 273.15;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === "k" && $convertTo === "f":
        $result = ($value - 273.15) * 9 / 5 + 32;
        $_GET['converter'] = "result";
        break;
      case $convertFrom === $convertTo:
        $result = $value;
        $_GET['converter'] = "result";
        break;  
      default:
        $result = "Invalid conversion";
      
    }
  }
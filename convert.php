<?php
  /**
   * Unit Converter Script
   * 
   * This script converts values between different units of measurement.
   * It supports conversions for length (m, cm, km, mm, ft, in, yd, mi),
   * weight (kg, g, mg, lb, oz, t), and temperature (c, f, k).
   * 
   * Usage:
   * - Send a POST request with 'value', 'from', and 'to' parameters.
   * - 'value' is the numeric value to convert.
   * - 'from' is the unit to convert from.
   * - 'to' is the unit to convert to.
   * 
   * Example:
   * POST /convert.php
   * {
   *   "value": 100,
   *   "from": "m",
   *   "to": "cm"
   * }
   * 
   * The script will return the converted value.
   */
  define('VALID_UNITS', ['m', 'cm', 'km', 'mm', 'ft', 'in', 'yd', 'mi', 'kg', 'g', 'mg', 'lb', 'oz', 't', 'c', 'f', 'k']);
  if(isset($_POST['value']) && isset($_POST['from']) && isset($_POST['to'])){
    $value = $_POST['value'];
    $convertFrom = $_POST['from'];
    $convertTo = $_POST['to'];
    $result = 0;

    if (!is_numeric($value) || !in_array($convertFrom, VALID_UNITS) || !in_array($convertTo, VALID_UNITS)) {
      $result = "Invalid input values";
      header('Location: index.php?converter=result&result=' . $result);
      exit;
    }
    
    

    // Conversion logic
    switch(true){
      // Length conversions
      case $convertFrom === "m" && $convertTo === "cm":
        $result = $value * 100;
        break;
      case $convertFrom === "m" && $convertTo === "km":
        $result = $value / 1000;
        break;
      case $convertFrom === "m" && $convertTo === "mm":
        $result = $value * 1000;
        break;
      case $convertFrom === "m" && $convertTo === "ft":
        $result = $value * 3.28084;
        break;
      case $convertFrom === "m" && $convertTo === "in":
        $result = $value * 39.3701;
        break;
      case $convertFrom === "m" && $convertTo === "yd":
        $result = $value * 1.09361;
        break;
      case $convertFrom === "m" && $convertTo === "mi":
        $result = $value / 1609.34;
        break;
      case $convertFrom === "cm" && $convertTo === "m":
        $result = $value / 100;
        break;
      case $convertFrom === "cm" && $convertTo === "km":
        $result = $value / 100000;
        break;
      case $convertFrom === "cm" && $convertTo === "mm":
        $result = $value * 10;
        break;
      case $convertFrom === "cm" && $convertTo === "ft":
        $result = $value * 0.0328084;
        break;
      case $convertFrom === "cm" && $convertTo === "in":
        $result = $value * 0.393701;
        break;
      case $convertFrom === "cm" && $convertTo === "yd":
        $result = $value * 0.0109361;
        break;
      case $convertFrom === "cm" && $convertTo === "mi":
        $result = $value / 160934;
        break;
      case $convertFrom === "km" && $convertTo === "m":
        $result = $value * 1000;
        break;
      case $convertFrom === "km" && $convertTo === "cm":
        $result = $value * 100000;
        break;
      case $convertFrom === "km" && $convertTo === "mm":
        $result = $value * 1000000;
        break;
      case $convertFrom === "km" && $convertTo === "ft":
        $result = $value * 3280.84;
        break;
      case $convertFrom === "km" && $convertTo === "in":
        $result = $value * 39370.1;
        break;
      case $convertFrom === "km" && $convertTo === "yd":
        $result = $value * 1093.61;
        break;
      case $convertFrom === "km" && $convertTo === "mi":
        $result = $value / 1.60934;
        break;
      case $convertFrom === "mm" && $convertTo === "m":
        $result = $value / 1000;
        break;
      case $convertFrom === "mm" && $convertTo === "cm":
        $result = $value / 10;
        break;
      case $convertFrom === "mm" && $convertTo === "km":
        $result = $value / 1000000;
        break;
      case $convertFrom === "mm" && $convertTo === "ft":
        $result = $value * 0.00328084;
        break;
      case $convertFrom === "mm" && $convertTo === "in":
        $result = $value * 0.0393701;
        break;
      case $convertFrom === "mm" && $convertTo === "yd":
        $result = $value * 0.00109361;
        break;
      case $convertFrom === "mm" && $convertTo === "mi":
        $result = $value / 1609340;
        break;
      case $convertFrom === "ft" && $convertTo === "m":
        $result = $value / 3.28084;
        break;
      case $convertFrom === "ft" && $convertTo === "cm":
        $result = $value / 0.0328084;
        break;
      case $convertFrom === "ft" && $convertTo === "km":
        $result = $value / 3280.84;
        break;
      case $convertFrom === "ft" && $convertTo === "mm":
        $result = $value / 0.00328084;
        break;
      case $convertFrom === "ft" && $convertTo === "in":
        $result = $value * 12;
        break;
      case $convertFrom === "ft" && $convertTo === "yd":
        $result = $value / 3;
        break;
      case $convertFrom === "ft" && $convertTo === "mi":
        $result = $value / 5280;
        break;
      case $convertFrom === "in" && $convertTo === "m":
        $result = $value / 39.3701;
        break;
      case $convertFrom === "in" && $convertTo === "cm":
        $result = $value / 0.393701;
        break;
      case $convertFrom === "in" && $convertTo === "km":
        $result = $value / 39370.1;
        break;
      case $convertFrom === "in" && $convertTo === "mm":
        $result = $value / 0.0393701;
        break;
      case $convertFrom === "in" && $convertTo === "ft":
        $result = $value / 12;
        break;
      case $convertFrom === "in" && $convertTo === "yd":
        $result = $value / 36;
        break;
      case $convertFrom === "in" && $convertTo === "mi":
        $result = $value / 63360;
        break;
      case $convertFrom === "yd" && $convertTo === "m":
        $result = $value / 1.09361;
        break;
      case $convertFrom === "yd" && $convertTo === "cm":
        $result = $value / 0.0109361;
        break;
      case $convertFrom === "yd" && $convertTo === "km":
        $result = $value / 1093.61;
        break;
      case $convertFrom === "yd" && $convertTo === "mm":
        $result = $value / 0.00109361;
        break;
      case $convertFrom === "yd" && $convertTo === "ft":
        $result = $value * 3;
        break;
      case $convertFrom === "yd" && $convertTo === "in":
        $result = $value * 36;
        break;
      case $convertFrom === "yd" && $convertTo === "mi":
        $result = $value / 1760;
        break;
      case $convertFrom === "mi" && $convertTo === "m":
        $result = $value * 1609.34;
        break;
      case $convertFrom === "mi" && $convertTo === "cm":
        $result = $value * 160934;
        break;
      case $convertFrom === "mi" && $convertTo === "km":
        $result = $value * 1.60934;
        break;
      case $convertFrom === "mi" && $convertTo === "mm":
        $result = $value * 1609340;
        break;
      case $convertFrom === "mi" && $convertTo === "ft":
        $result = $value * 5280;
        break;
      case $convertFrom === "mi" && $convertTo === "in":
        $result = $value * 63360;
        break;
      case $convertFrom === "mi" && $convertTo === "yd":
        $result = $value * 1760;
        break;
      // Weight conversions
      case $convertFrom === "kg" && $convertTo === "g":
        $result = $value * 1000;
        break;
      case $convertFrom === "kg" && $convertTo === "mg":
        $result = $value * 1000000;
        break;
      case $convertFrom === "kg" && $convertTo === "lb":
        $result = $value * 2.20462;
        break;
      case $convertFrom === "kg" && $convertTo === "oz":
        $result = $value * 35.274;
        break;
      case $convertFrom === "kg" && $convertTo === "t":
        $result = $value / 1000;
        break;
      case $convertFrom === "g" && $convertTo === "kg":
        $result = $value / 1000;
        break;
      case $convertFrom === "g" && $convertTo === "mg":
        $result = $value * 1000;
        break;
      case $convertFrom === "g" && $convertTo === "lb":
        $result = $value * 0.00220462;
        break;
      case $convertFrom === "g" && $convertTo === "oz":
        $result = $value * 0.035274;
        break;
      case $convertFrom === "g" && $convertTo === "t":
        $result = $value / 1000000;
        break;
      case $convertFrom === "mg" && $convertTo === "kg":
        $result = $value / 1000000;
        break;
      case $convertFrom === "mg" && $convertTo === "g":
        $result = $value / 1000;
        break;
      case $convertFrom === "mg" && $convertTo === "lb":
        $result = $value * 2.20462e-6;
        break;
      case $convertFrom === "mg" && $convertTo === "oz":
        $result = $value * 3.5274e-5;
        break;
      case $convertFrom === "mg" && $convertTo === "t":
        $result = $value / 1e9;
        break;
      case $convertFrom === "lb" && $convertTo === "kg":
        $result = $value / 2.20462;
        break;
      case $convertFrom === "lb" && $convertTo === "g":
        $result = $value / 0.00220462;
        break;
      case $convertFrom === "lb" && $convertTo === "mg":
        $result = $value / 2.20462e-6;
        break;
      case $convertFrom === "lb" && $convertTo === "oz":
        $result = $value * 16;
        break;
      case $convertFrom === "lb" && $convertTo === "t":
        $result = $value / 2204.62;
        break;
      case $convertFrom === "oz" && $convertTo === "kg":
        $result = $value / 35.274;
        break;
      case $convertFrom === "oz" && $convertTo === "g":
        $result = $value / 0.035274;
        break;
      case $convertFrom === "oz" && $convertTo === "mg":
        $result = $value / 3.5274e-5;
        break;
      case $convertFrom === "oz" && $convertTo === "lb":
        $result = $value / 16;
        break;
      case $convertFrom === "oz" && $convertTo === "t":
        $result = $value / 35274;
        break;
      case $convertFrom === "t" && $convertTo === "kg":
        $result = $value * 1000;
        break;
      case $convertFrom === "t" && $convertTo === "g":
        $result = $value * 1000000;
        break;
      case $convertFrom === "t" && $convertTo === "mg":
        $result = $value * 1e9;
        break;
      case $convertFrom === "t" && $convertTo === "lb":
        $result = $value * 2204.62;
        break;
      case $convertFrom === "t" && $convertTo === "oz":
        $result = $value * 35274;
        break;
      // Temperature conversions
      case $convertFrom === "c" && $convertTo === "f":
        $result = $value * 9 / 5 + 32;
        break;
      case $convertFrom === "c" && $convertTo === "k":
        $result = $value + 273.15;
        break;
      case $convertFrom === "f" && $convertTo === "c":
        $result = ($value - 32) * 5 / 9;
        break;
      case $convertFrom === "f" && $convertTo === "k":
        $result = ($value - 32) * 5 / 9 + 273.15;
        break;
      case $convertFrom === "k" && $convertTo === "c":
        $result = $value - 273.15;
        break;
      case $convertFrom === "k" && $convertTo === "f":
        $result = ($value - 273.15) * 9 / 5 + 32;
        break;
      default:
        $result = "Invalid conversion";
        header('Location: index.php?converter=result&result=' . $result);
        exit;
        break;
    }
    header('Location: index.php?converter=result' . '&result=' . urlencode($value . $convertFrom . ' = ' . $result . $convertTo));
  }
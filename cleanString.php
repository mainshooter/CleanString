<?php
  echo cleanString("HOI iK bEn PETER               doe");

  /**
   * Cleans a string
   * @param  [string] $string [A string that we want to clean]
   * @return [string]         [The cleaned string]
   */
  function cleanString($string) {
    $string = trim($string);
    // Remove white space
    $string = strtolower($string);
    // All lower case
    $string = ucwords($string);
    // Upper case first letter
    return($string);
  }


?>

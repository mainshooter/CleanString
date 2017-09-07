<?php
  echo cleanString("HOI iK bEn PETER               doei");
  echo "<br>";
  echo "<h2>String cleaner class</h2>";
  echo "<br>";
  $StringCleaner = new StringCleaner();
  $StringCleaner->setString("HOI iK bEn PETER               doei");
  echo $StringCleaner->getCleanedString();

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

  class StringCleaner {
    public $string;

    /**
     * Sets the string we want to clean
     * @param [string] $string [The string we want to clean]
     */
    public function setString($string) {
      $this->string = $string;
    }

    /**
     * Cleans the string and returns it
     * @return [string] [Cleaned string on succes on faild it returns a error]
     */
    public function getCleanedString() {
      if (!empty($this->string)) {
        $this->trimString();
        $this->lowerCaseString();
        $this->upperCaseFirstLetterOfWord();
        return($this->string);
      }

      else {
        return('No string has been set!');
      }

    }

    /**
     * Trims a string, removes unnessesairy white space
     */
    private function trimString() {
      $this->string = trim($this->string);
    }

    /**
     * Convert all letters to lower case
     */
    private function lowerCaseString() {
      $this->string = strtolower($this->string);
    }

    /**
     * Convert all first letters of a word to a uppercase
     */
    private function upperCaseFirstLetterOfWord() {
      $this->string = ucwords($this->string);
    }

  }


?>

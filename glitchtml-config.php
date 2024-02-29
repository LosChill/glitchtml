<?php
// config.php

class GlitchConfig {
  private $glitchText;
  private $glitchSize;
  private $glitchChars;
  private $glitchTime;

  public function __construct() {
    $this->glitchText = "Trevor Pendras - Data Analyst, Web Developer, Marketing Information, Musician";
    $this->glitchSize = "25px";
    $this->glitchTime = .5;
    $this->glitchChars = 
      "0123456789" .
      "abcdefghijklmnopqrstuvwxyz" .
      "ABCDEFGHIJKLMNOPQRSTUVWXYZ".
      "!#$%()*+,-./:;=?@[\]^_`{|}~";
  }

  public function getGlitchText() {
    return $this->glitchText;
  }

  public function getGlitchSize() {
    return $this->glitchSize;
  }

  public function getGlitchChars() {
    return $this->glitchChars;
  }

  public function getGlitchTime() {
    return $this->glitchTime;
  }
}
?>

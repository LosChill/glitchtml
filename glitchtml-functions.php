<?php
// functions.php

// Primary glitch function:
function glitchtml() {
  require_once 'glitchtml-config.php';

  // Create config object of config class
  $config = new GlitchConfig();

  // Set constants from config
  $text = $config->getGlitchText();
  $size = $config->getGlitchSize();
  $chars = $config->getGlitchChars();

  // Set length constant
  $length = strlen($text);

  // Initialize boolean array for tracking correct positions
  $correctPositions = array_fill(0, $length, false);

  // Initialize output string with opening div containers
  $outputHtml = "<div class=\"glitchtml-outer-container\">\n";
  $outputHtml .= "    <div class=\"glitchtml-inner-container\">\n";

  // Nested function to generate random string with some positions fixed
  $generateGlitch = function($length, $chars, $correctPositions, $text) {
    $str = '';
    for ($i = 0; $i < $length; $i++) {
      $str .= $correctPositions[$i] ? $text[$i] : $chars[rand(0, strlen($chars) - 1)];
    }
    return $str;
  };

  // Generate initial glitch string
  $outputHtml .= "      <p>" . $generateGlitch($length, $chars, $correctPositions, $text) . "</p>\n";

  // Loop through, fixing one position and generating new glitch string
  for ($j = 0; $j < $length; $j++) {
    do {
      $randomPosition = rand(0, $length - 1);
    } while ($correctPositions[$randomPosition]); // Ensure position hasn't beenf fixed

    $correctPositions[$randomPosition] = true; // Mark position as fixed
    $outputHtml .= "      <p>" . $generateGlitch($length, $chars, $correctPositions, $text) . "</p>\n";
  }
  
  // Close output division containers
  $outputHtml .= "    </div>\n";
  $outputHtml .= "  </div>\n";

  return $outputHtml;
}

?>

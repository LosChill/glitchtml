<?php
// Create style.css for glitchtml

require_once 'glitchtml-config.php';
$config = new GlitchConfig();
$size = $config->getGlitchSize();
$text = $config->getGlitchText();
$timefactor = $config->getGlitchTime();
$length = strlen($text);
$time = $timefactor * $length * .1;
$start = $length * -100;

header("Content-Type: text/css");
?>

:root {
  --scalar: <?php echo $size; ?>;
}

.glitchtml-outer-container {
  position: relative;
  width: 100%;
  height: var(--scalar);
  overflow: hidden;
}

.glitchtml-inner-container {
  position: absolute;
  width: 100%;
  animation: scroll-up <?php echo $time; ?>s forwards steps(<?php echo $length; ?>);
}

@keyframes scroll-up {
  from {
  bottom: <?php echo $start; ?>%;
  }
  to {
    bottom: 0%;
  }
}

p {
  margin: 0;
  padding: 0;
  line-height: var(--scalar);
  font-family: 'Courier New', monospace;
  font-size: var(--scalar);
}

<?php
// Creates stylesheet for glitchtml elements

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

.glitchtml-outer-container {
  position: relative;
  width: 100%;
  height: clamp(8px, 5vw, 30px);
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

.glitchtml-inner-container p {
  margin: 0;
  padding: 0;
  line-height: clamp(8px, 5vw, 30px);
  font-family: 'Courier New', monospace;
  font-size: clamp(8px, 5vw, 30px);
  color: var(--tdcream);
  white-space: nowrap;
}

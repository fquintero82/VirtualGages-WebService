<?php

  require_once("libs/RealtimeFloodAlert.php");
  
  RealtimeFloodAlert::check_all_models_past_fore();

  echo("# ### DONE ######################################## #".PHP_EOL);
  exit(0);
?>

<?php

class XIPreventer
{
  
  public function preventXSS($vTP)
  {
      return strip_tags($vTP);
  }
 
  public function safeSQL($C, $S)
  {
    return $C->real_escape_string($S);
  }
}

?>

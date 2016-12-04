<?php

class XIPreventer
{
  
    private $sM = 1;
  
   public function sqlMethod($m){
    if(strtolower($m) == "sqli"){
      $sM == 1;
    }
    else
        $sM == 2;
   }
 
  public function preventXSS($vTP)
  {
      return strip_tags($vTP);
  }
 
  public function safeSQL($C, $S)
  {
      if($sM == 1){
        return mysqli_real_escape_string($C, $S);
      }else{
        return $C->quote($S);
      }
  }
}

?>

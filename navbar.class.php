<?php
Class Stranka{

  public $den;
  public $mesic;

  public function aktivniStranka($odkaz){
      $stranka = $_SERVER['REQUEST_URI'];
      if ($stranka == $odkaz) {
        echo 'class="active" ';
      }else{
        echo ' ';
      }
  }

  public function hledatDatum($den, $mesic)
  {
    $this->den = $den;
    $this->mesic = $mesic;
    return $this->den .".". $this->mesic;
  }

 public function najitJmeno(){
    return Svatek::svatekMa($this->den, $this->mesic);

  }
}



?>

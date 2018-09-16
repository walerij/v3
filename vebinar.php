<?php
  class Человек{
     public  $имя;
     public  $возраст;
      
      public function __construct($мое_имя="Макс",$мой_возраст="24")
      {
          $this->имя=$мое_имя;
          $this->возраст=$мой_возраст;
      }
      public function Обо_мне()
      {
          return "Меня зовут ".$this->имя." мне ".$this->возраст;
      }
      
  }

 $max=new Человек("Евгений","40");

 echo $max->Обо_мне();
 

?>
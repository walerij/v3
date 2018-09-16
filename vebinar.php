<?php
  class Человек{
      $имя;
      $возраст;
      
      public function Обо_мне()
      {
          return "Меня зовут ".$this->имя." мне ".$возраст;
      }
      
  }

 $max=new Человек();
 

?>
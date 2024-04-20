<?php
     class Person{
       public $name ='Diya Preet <br>'; //name and age are properties
       public $age;

       public function Message(){
        echo 'Hello Students!<br>';
       }

       public function age($value){
         echo $this->age = '<br>Person Age Is :'.$value;
       }
     }

    $p =  new Person; //p is a opject
   echo  $p->name;//this,arrow operator
   echo  $p->Message();
   echo  $p->age = 18;
$p->age('23');

define('NAME','Diya');
echo NAME;
?>
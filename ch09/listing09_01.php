<?php
   // An abstract class:
   abstract class Figure{
      // Protected fields:
      protected $name;
      protected $R;
      // The constructor:
      function __construct($R,$name){
         $this->R=$R;
         $this->name=$name;
      }
      // An explicitly described method:
      function getName(){
         return $this->name;
      }
      // An abstract method:
      abstract function getArea();
   }
   // The class to realize a square:
   class Square extends Figure{
      // The description of the method:
      function getArea(){
         $r=$this->R;
         return $r*$r;
      }
   }
   // The class to realize a circle:
   class Circle extends Figure{
      // The description of the method:
      function getArea(){
         $r=$this->R;
         $k=3.141592;
         return $k*$r*$r;
      }
   }
   // The class to realize a triangle:
   class Triangle extends Figure{
      // The description of the method:
      function getArea(){
         $r=$this->R;
         $k=sqrt(3)/4;
         return $k*$r*$r;
      }
   }
   // The function displays information about an object:
   function show($F){
      echo $F->getName(),": ",$F->getArea(),"\n";
   }
   // Creates objects:
   $S=new Square(2.5,"Square");
   $C=new Circle(3,"Circle");
   $T=new Triangle(4,"Triangle");
   // Checks the result:
   show($S);
   show($C);
   show($T);
?>
<?php
   // The class for an iterator:
   class Fibonacci implements Iterator{
      // The last and one before the last numbers:
      private $last;
      private $previous;
      // The element numbetr:
      private $key;
      // The maximal value of the index:
      private $max;
      // The constructor:
      function __construct($max){
         $this->max=$max;
         $this->rewind();
      }
      // The methods from Iterator:
      public function rewind(){
         $this->key=1;
         $this->previous=1;
         $this->last=1;
      }
      public function current(){
         return $this->previous;
      }
      public function key(){
         return $this->key;
      }
      public function next(){
         ++$this->key;
         $this->last+=$this->previous;
         $this->previous=$this->last-$this->previous;
      }
      public function valid(){
         if($this->key<=$this->max) return true;
         else return false;
      }
      // The additional methods:
      public function resize($max){
         $this->max=$max;
      }
   }
   // Creates an iterator object:
   $fibs=new Fibonacci(10);
   // Using the iterator:
   foreach($fibs as $f){
      echo $f," ";
   }
   echo "\n";
   // Changes the number of values:
   $fibs->resize(15);
   // Using the iterator:
   foreach($fibs as $f){
      echo $f," ";
   }
?>
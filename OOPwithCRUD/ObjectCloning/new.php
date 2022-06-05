<?php 
    class Language{
        private $category;
        private $framework;

        public function setCat($value){
            $this->category = $value;
        }
        public function getCat(){
           return  $this->category;
        }

        public function setFramework($values){
            $this->framework = $values;
        }
        public function getFramework(){
           return  $this->framework;
        }
    }
?>
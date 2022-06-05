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

        public function __clone()
        {
            $lang = new Language();
            $lang->setFramework($this->framework);
            $lang->setCat($this->framework);
            return $lang;
        }
    }
?>
<?php 
    class Details{
        public $name;
        public $education;
        public $age;
        public $skill;
        public $phone;
        private $email;
        protected $salary;

        public function __construct()
        {
            $this->name = "Md. Rajib Hossain";
            $this->education = "Under Graduate";
            $this->age = 26;
            $this->skill = "PHP, Laravel, Ajax, Oop, Sql";
            $this->phone = '01521471117';
            $this->email = "rajibraju771@gmail.com, rajibhossain.cse@gmail.com";
            $this->salary = "Uncountable";
        }
    }
?>
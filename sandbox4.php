<?php
    //classes
    class User {
        private $email;
        private $name;

        public function __construct($name, $email) {
            // $this->email = 'mario@thenetninja.co.uk';
            // $this->name = 'mario';
            $this->email = $email;
            $this->name = $name;
        }

        public function login() {
            echo $this->name . ' logged in';
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            if (is_string($name) && strlen($name) > 1) {
                $this->name = $name;
                return "name has been updated to $name";
            } else {
                return "not a valid name";
            }
        }
    }

    // $user1 = new User();
    // $user1->login();
    // echo $user1->email;

    $user2 = new User('yoshi', 'yoshi@thenetninja.co.uk');
    echo $user2->getName();
    echo $user2->setName('toad');
    echo $user2->getName();
?>
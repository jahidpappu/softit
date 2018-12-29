<?php
/*
class person {

 public $name = "jahid";

 public $username = "jahidpappu";

 public $pass = "1223445";

 public function login(){
   return "login hocche";
 }

}

$perinfo = new person();

echo $perinfo->name;
echo $perinfo->login();

 class person {
   private $name = "jahid";

   public function naaam(){
    return $this->name;
   }
 }

 $maneush = new person();

  echo $maneush->naaam();
*/
  class person{

     

    static function set_password(){
      return "password";
    }

  }

  echo person::$set_password();
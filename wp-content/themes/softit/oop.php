<?php
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


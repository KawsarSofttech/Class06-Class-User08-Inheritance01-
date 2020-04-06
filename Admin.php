<?php
// Inheritance from User.php
// php does'nt support multiple inheritance.
include "User.php";

class Admin extends User{

}

$ad = new Admin();
$ad->greet();

?>
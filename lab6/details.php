<?php
require_once("./Employee.php");
require_once("./Company.php");

$gces = new Company;
$gces->name = "Gandaki College of Engineering & Science";
$gces->address = "Lamachour";

array_push($gces->employees, new Employee("Bibek", "Nadipur"));
array_push($gces->employees, new Employee("Nishanta", "Puraunchour"));
array_push($gces->employees, new Employee("Dipesh", "Durgam Basti"));
array_push($gces->employees, new Employee("Ajit", "Durgam Basti 2"));

var_dump("$gces")

?>
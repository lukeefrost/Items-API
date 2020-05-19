<?php
// public - can access properties from outside the scope of the class as well as alter the values of the properties
// private - can prevent values from being changed outside of the scope of the class
// protected - no access outside the scope of the class i.e. a protected variable in the Person class can only be accessed from the Person class itself!
// Magic Methods: - Allow for property overloading - Allows properties to be accessed outside the scope of the class
// __set
// __get
// Used if classes have lots of private properties
// Static methods and properties can be accessed from outside the class scope, but they can be accessed without instantiating the class
// Use static keywords for classes that have a series of utility methods e.g. generatePaySlip()
class Employee extends Person {

  static $employeeNumber = 100;
  public static $payeNumber = 100;
  const COMPANY_NAME = 'Frost Ltd'; // Can access outside the scope of the class

  public $jobTitle;

  public static function generatePaySlip() {
    return self::$payeNumber;
  }
  public static function getEmployeeNumber() {
    return self::$employeeNumber;
  }

  public function __construct($jobTitle, $firstName, $lastName, $gender = 'f') {
    $this->jobTitle = $jobTitle;
    // echo self::getEmployeeNumber(); // Only use if static function is declared private
    // echo parent::EYE_COLOUR; // For constants tutorial
    // echo self::COMPANY_NAME; // For constants tutorial
    parent::__construct($firstName, $lastName, $gender);
  }

  public function __get($name) {
    return $this->$name;
  }
  //public function getJobTitle() {
    //return $this->jobTitle;
  //}

  public function __set($name, $value) { // If commented out it won't work
    $this->$name = $value;
  }

  //public function setJobTitle($jobTitle) { -- removed for __set method in Property overloading tutorial
    //$this->jobTitle = $jobTitle;
  //}

  public function sayHello() { // Moved from Person class for Visibility Scopes tutorial
    $message = "Hello my name is ". $this->firstName ." ". $this->lastName. " \n";
    $message.="My job title is ". $this->jobTitle;
    return $message;
  }

}


class Person {

  const EYE_COLOUR = 'blue';

  public $firstName;
  public $lastName;
  public $gender;

  public function __construct($firstName, $lastName, $gender = 'f') {
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->gender = $gender;
      echo self::EYE_COLOUR; // For constants tutorial - self as it's in it's own class
  }

  public function getGender() {
    return $this->gender;
  }
}

$luke = new Employee('Backend Developer', 'Luke', 'Frost');
//echo $luke->sayHello();
$luke->jobTitle = 'Tester';
echo Employee::COMPANY_NAME;
echo Employee::EYE_COLOUR;
echo $luke->jobTitle; // Used for __get method in property overloading tutorial
// echo $luke->getJobTitle(); -- removed for property overloading tutorials
// echo $luke->setJobTitle('Frontend Developer'); // can access directly with the public variable as well as alter it
// echo $luke->getJobTitle(); - both lines using private variables to do this - prevent valeus from being changed
echo "\n";
echo Employee::getEmployeeNumber(); // When static method is private and declared in the constructor, comment this out
// echo Employee::$employeeNumber; -- another way of referencing a static variable
echo "\n";
echo Employee::generatePaySlip();
echo "\n";
echo $luke->getGender();
echo "\n";
// 1st tutorial for classes an objects:
//$luke = new Person('Luke', 'Frost', 'm');
//$michael = new Person('Michael', 'Frost');
//echo $luke->sayHello();
//echo "\n";
//echo $michael->sayHello() . " Gender: " . $michael->getGender();
//echo "\n";

?>

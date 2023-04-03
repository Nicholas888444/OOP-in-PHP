<?php 
require 'CarOwner.php';
abstract class Car {

  // Member variables (Class Properties)
  protected $make;
  protected $model;
  protected $year;
  protected $VIN_num;
  protected $carOwner;
  //Default constructor:
  function Car() {
  $this -> make = "";
  $this -> model = "";
  $this -> year = "";
  $this -> VIN_num = "";
  $this -> carOwner = new carOwner();
  }
  /**
   * Constructor.
   * @param array $propertiesArray array of property names and values.
   */
  function __construct($propertiesArray = array()) {
    if (count($propertiesArray) > 0) {
      foreach ($propertiesArray as $name => $value) {
        $this -> $name = $value;
      }
    }
  }
  //__get and __set, which are “magic methods” in PHP:
  function setMake($make) {
    $this -> make = $make;
  }
  function setModel($model) {
    $this -> model = $model;
  }
  
  function setYear($year) {
    $this -> year = $year;
  }
  function setVinNum($VIN_num) {
    $this -> VIN_num = $VIN_num;
  }
  function setCarOwner($carOwner) {
    $this -> carOwner = $carOwner;
  }

  function getMake() {
    return $this -> make;
  }
  function getModel() {
    return $this -> model;
  }  

  function getYear() {
    return $this -> year;
  }
  function getVinNum() {
    return $this -> VIN_num;
  }  

  function getCarOwner() {
    return $this -> carOwner;
  }
  
  public function __set($property, $value) {
    if (property_exists($this, $property)) {
      $this -> $property = $value;
    }
  }
  public function __get($property) {
    if (property_exists($this, $property)) {
      return $this -> $property;
    }
  }

  function __toString() {
    $output = '';
    $output .= $this -> year;
    $output .= " " . $this -> make;
    $output .= " " . $this -> model . '<br/>';
    $output .= "VIN number: " . $this -> VIN_num . '<br/>';
    $output .= $this -> carOwner -> __toString();
    return $output;
   }

}//end class Employee

//*********** Sub classes ********************************
//********************************************************

final class SportsCar extends Car {
  private $topSpeed;
  private $acceleration;
  
  //Constructor:
  function __construct($propertiesArray = array(), $topSpeed, $acceleration) {
    parent::__construct($propertiesArray); // calling the super constructor
    $this -> topSpeed = $topSpeed;
    $this -> acceleration = $acceleration;
  }

  function SportsCar() {
    $this -> Car();
    $this -> topSpeed = 0;
    $this -> acceleration = 0;
  }
    //__get and __set:
  public function __get($property) {
    if (property_exists($this, $property)) {
      return $this -> $property;
    }
  }
  public function __set($property, $value) {
    if (property_exists($this, $property)) {
      $this -> $property = $value;
    }
  }

  function setAccceleration($acceleration) {
    $this -> acceleration = $acceleration;
  }
  function setTopSpeed($topSpeed) {
    $this -> topSpeed = $topSpeed;
  }

  function getAccceleration() {
    return $this -> acceleration;
  }
  function getTopSpeed() {
    return $this -> topSpeed;
  }  
  /**
  * Magic __toString
  * @return string
  */
  function __toString() {
      //Calling the display method in the parent class:
    $output = parent::__toString();
    $output .= 'Top Speed: ' . $this->topSpeed . " mph <br/>";
    $output .= 'Acceleration: ' . $this->acceleration . "mph^2<br/>";
    return $output;
  }
}//end SportsCar
//********************************************************
final class SedanCar extends Car {

  private $numDoors;
  private $trunkSize;
  
  //Constructor:
  function __construct($propertiesArray = array(), $numDoors, $trunkSize) {
    parent::__construct($propertiesArray); // calling the super constructor
    $this->numDoors = $numDoors;
    $this->trunkSize = $trunkSize;
  }
  //Default constructor:
  function SedanCar() {
    $this -> Car();
    $this -> numDoors = 0;
    $this -> trunkSize = 0;
  }


  function setNumDoors($numDoors) {
    $this -> numDoors = $numDoors;
  }
  function setTrunkSize($trunkSize) {
    $this -> trunkSize = $trunkSize;
  }

  function getNumDoors() {
    return $this -> numDoors;
  }
  function getTrunkSize() {
    return $this -> trunkSize;
  }  

  //__get and __set:
  public function __get($property) {
    if (property_exists($this, $property)) {
      return $this -> $property;
    }
  }
  public function __set($property, $value) {
    if (property_exists($this, $property)) {
      $this -> $property = $value;
    }
  }

  /**
  * Magic __toString
  * @return string
  */
  function __toString() {
      //Calling the display method in the parent class:
    $output = parent::__toString();
    $output .= "Number of Doors: " . $this->numDoors . ' doors<br/>';
    $output .= "Trunk Size: " . $this->trunkSize. ' sq. ft.<br/>';
    return $output;
  }
  
  }

?>
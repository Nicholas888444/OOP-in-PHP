<?php 
//require 'Car.php';
class CarOwner {

  // Member variables (Class Properties)
  private $name;
  private $address;
  //Default constructor:
  function CarOwner() {
  $this -> name = "";
  $this -> address = "";
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

  public function setName($name) {
    $this -> name = $name;
  }
  public function setAddress($address) {
    $this -> address = $address;
  }

  public function getName() {
    return $this -> name;
  }
  public function getAddress() {
    return $this -> address;
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
    $output = 'Car Owner: <br/>';
    $output .= "Name: " . $this -> name . '<br/>';
    $output .= "Address: " . $this -> address. '<br/>';
    return $output;
   }

}//end class CarOwner
?>
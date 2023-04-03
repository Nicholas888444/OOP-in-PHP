<?php
require 'Car.php';
//Create CarOwners
$carOwner1 = new CarOwner(array(
  'name' => 'Nicholas Thomson',
  'address' => '3209 Oxford Street, Kokomo, IN, 46902, USA'
));

echo $carOwner1;
echo "<br/>";

$carOwner2 = new CarOwner(array(
  'name' => 'Nelson Deck',
  'address' => '1234 Carmelita Blvd., Russiaville, IN, 46901, USA'
));

echo $carOwner2;
echo "<br/>";

//Create cars
$car1 = new SportsCar(array(
  'make' => 'Alfa Romeo',
  'model' => 'Tonale',
  'year' => '2024',
  'VIN_num' => '4Y1SL65848Z411439',
  'carOwner' => $carOwner1

), '180',
  '20');

$car2 = new SedanCar(array(
  'make' => 'Dodge',
  'model' => 'Durango',
  'year' => '2023',
  'VIN_num' => '5B21Q65788A410986',
  'carOwner' => $carOwner1

), '4',
  '25');

$car3 = new SportsCar(array(
  'make' => 'Rolls-Royce',
  'model' => 'Dawn',
  'year' => '2021',
  'VIN_num' => '6Z2TM76959A522530',
  'carOwner' => $carOwner2

), '120',
  '5');

$car4 = new SedanCar(array(
  'make' => 'Nissan',
  'model' => 'LEAF',
  'year' => '2021',
  'VIN_num' => '8A410986Z2TM7695',
  'carOwner' => $carOwner1

), '4',
  '25');

//Print cars without carowner
echo $car1;
echo "<br/>";
echo $car2;
echo "<br/>";
echo $car3;
echo "<br/>";
echo $car4;
echo "<br/>";
//Change car owner of car 3
$car3 -> setCarOwner($carOwner1);
echo $car3;

?>
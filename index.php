<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>kobani</title>
  </head>
  <body>
    <h1> kobani </h1>
    <h2> where we born </h2>
  </body>
</html>
<?php
require_once "vehicles.php";
require_once "highways.php";

$juneBike = new Bike('june');
$GreenSkateboard = new Skatboard('green');
$MyCar = new Car('white');
$MyTruck = new Truck('mix');

$MyMotorway = new MotorWay();
$MyResidential = new ResidentialWay();
$MyPedestrian = new PedestrianWay();

echo '<br><h2>Motorway</h2>';
echo '<h3>bike</h3> ' . $MyMotorway->addVehicle($juneBike);
echo '<br><h3>truck</h3>' . $MyMotorway->addVehicle($MyTruck);
echo '<h3>skateboard</h3> ' . $MyMotorway->addVehicle($GreenSkateboard);
echo '<br><h3>car</h3>' . $MyMotorway->addVehicle($MyCar);
echo '<br><h3>List of vehicules on the way</h3>';
echo '<br>';

echo '<br><h2>Residential</h2>';
echo '<h3>bike</h3> ' . $MyResidential->addVehicle($juneBike);
echo '<br><h3>truck</h3>' . $MyResidential->addVehicle($MyTruck);
echo '<h3>skateboard</h3> ' . $MyResidential->addVehicle($GreenSkateboard);
echo '<br><h3>car</h3>' . $MyResidential->addVehicle($MyCar);
echo '<br>';

echo '<br><h2>Pedestrian</h2>';
echo '<h3>bike</h3> ' . $MyPedestrian->addVehicle($juneBike);
echo '<br><h3>truck</h3>' . $MyPedestrian->addVehicle($MyTruck);
echo '<h3>skateboard</h3> ' . $MyPedestrian->addVehicle($GreenSkateboard);
echo '<br><h3>car</h3>' . $MyPedestrian->addVehicle($MyCar);
echo '<br>';

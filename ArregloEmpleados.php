<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$empleados=array("Alejandro"=> 500, "Said" => 2500, "Alex" => 5000, "luis" => 4000, "Ebani" => 10000,);
echo"<p>";


foreach ($empleados as $empleado=>$sueldo){

echo "El empleado  $empleado tiene un sueldo mensual de $sueldo <br>";
}
$empleados += ["Jose" => 7238, "Luis"=> 2343];
echo "<p>";

arsort($empleados);
foreach ($empleados as $empleado=>$sueldo){
	echo "El empleado $empleado tiene un sueldo mensual de $sueldo <br>";
}



?>
</body>
</html>
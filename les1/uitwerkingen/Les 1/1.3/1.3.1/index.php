<?php




$gewicht = 85;
$lengte = 1.74;
$BMI = $gewicht / ($lengte * $lengte);



if ($BMI < 18.5)
	echo "U heeft ondergewicht</br>";
elseif (($BMI > 18.5) && ($BMI < 25))
	echo "U bent gezond";
elseif (($BMI > 25) && ($BMI < 30))
	echo "U heeft overgewicht</br>";
elseif ($BMI > 30)
	echo "U heeft Obesitas</br>";

	




echo "Uw BMI = $BMI</br>";


?>
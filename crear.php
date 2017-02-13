<?php 
	error_reporting(E_ALL);
	ini_set('display_errors',1);

	require 'tauler.php'; //para poder trabajar con tauler.php

	$tauler =  new Tauler(8,8,$_POST['tipo']); 

	//cuando creamos el objeto tauler le metemos la variable tipo que es la que nos dirá como queremos la tabla
	
	$tauler->show(); //llamamos a la accion show de tauler.php

	echo "<br>";
	echo '<a href="index.html">Volver al formulario</a>'; 
	//es un enlace para volver atrás si queremos realizar otra tabla
 ?>
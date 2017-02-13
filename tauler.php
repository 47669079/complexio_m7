<?php

require 'quadre.php';

class Tauler
{

	private $peces = array();
	private $tipus; //Damas o aleatorio
	private $nRows=null;
	private $nCols=null;
	
	function __construct($nRows=null,$nCols=null,$tipus)
	{
		
		$this->tipus=$tipus;
		$this->nRows=$nRows;
		$this->nCols=$nCols;

		switch ($this->tipus) {

			case 'dames':
				
				$this->dames($nRows,$nCols);

				break;

			case 'aleat':
				
				$this->aleat($nRows, $nCols);

				break;
			
		
		}

	}

	function dames($nRows=null, $nCols=null){
		


		for($i=0;$i<$nRows;$i++) //for para recorrer las filas
		{
			for($x=0;$x<$nCols;$x++) //for para recorrer las columnas
			{

				if($i%2==0) //si la fila es par
				{
					if($x%2==0){ //si la columna es par
						$color="black";
					}
					else{
						$color="white";
					}

					$this->peces[$i][$x] = $color; 
					//guardamos la variable $color en el array de piezas
				}
				else{
					if($x%2==0){
						$color="white";
					}
					else{
						$color="black";
					}

					$this->peces[$i][$x] = $color;
				}

			}
		}

	}

	function aleat($nRows=null, $nCols=null){
		

		for($i=0;$i<$nRows;$i++)
		{
			for($x=0;$x<$nCols;$x++)
			{
				$row= rand(1, 2); 
				//creamos un numero aleatorio distinto para columnas y filas
				$col= rand(1, 2);

				if($i%$row==0)
				{
					if($x%$col==0){
						$color="black";
					}
					else{
						$color="white";
					}

					$this->peces[$i][$x] = $color;
				}
				else{
					if($x%$col==0){
						$color="white";
					}
					else{
						$color="black";
					}

					$this->peces[$i][$x] = $color;
				}

			}
		}

	}

	function show(){


		echo "<table border='1'>";
					
		for($i = 0; $i< $this->nRows; $i++)
		{
			echo "<tr>";


			for($x = 0; $x < $this->nCols; $x++)
			{

			 $quadre = new Quadre($this->peces[$i][$x]);

			 //creamos el objeto quadre para que nos cree el <td> "personalizado"

			}


			echo "</tr>";
		}

		echo "</table>";

	}

}
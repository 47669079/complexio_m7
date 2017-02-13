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
		

		for($i=0;$i<$nRows;$i++)
		{
			for($x=0;$x<$nCols;$x++)
			{

				if($i%2==0)
				{
					if($x%2==0){
						$color="black";
					}
					else{
						$color="white";
					}

					$this->peces[$i][$x] = $color;
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


			}


			echo "</tr>";
		}

		echo "</table>";

	}

}
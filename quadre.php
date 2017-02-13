<?php

	class Quadre{
		
		protected $color;

		function __construct ($color){
			$this->color=$color;

			$this->show(); //llamamos a show de Quadre
		}

		function show(){

			echo '<td style="padding-left:2px;background-color:'.$this->color.';width:30px;height:30px;"></td>';
		}
	}
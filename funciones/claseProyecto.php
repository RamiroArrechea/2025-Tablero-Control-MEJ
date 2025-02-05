<?php

	/* La idea de este archivo es crear 1 clases FUNCIONES y que los diferentes 
		clases-proyectos  y demas clases hereden de ella todos los metodos genericos que necesiten.
	*/

	class Funciones {
		var $id; 			// Este atributos es el id del objeto html.
		var $href;
		var $clase;
		var $style;
		var $name;
		var $value;
		var $addNewLine;
		var $enabled;
		var $comentario;
		var $inicioBlanco;
	

		function getName(){
			 $str = $this->name;
			 return $str;
		}

		function setName($str){
			$this->name = $str;
		}
		
		function setHref($str){
			$this->href = $str;
		}

		function setClase($str){
			$this->clase = $str;
		}

		function setComentario($str){
			$this->comentario = $str;
		}

		function setStyle($str){
			$this->style = $str;
		}

		function enabledNewLine(){
			$this->addNewLine = true;
		}

		function setInicioBlanco($str){
			$this->inicioBlanco = $str;
		}

		function disabledNewLine(){
			$this->addNewLine = false;
		}

		function setEnable(){
			$this->enabled = true;
		}

		function setDisabled(){
			$this->enabled = false;
		}

		function setId($str){
			$this->id = $str;
		}

		function getId(){
			return $this->id;
		}

		function setValue($str){
			$this->value = $str;
		}

		function show(){		/** Meotdo para imprimir el objeto */
			echo	"<a ";
				echo	"id='".$this->id."' ";
				echo	"class='".$this->clase."' ";
				echo	"style='".$this->style."' ";

				if( $this->enabled == true){
					echo	"href='".$this->href."' ";
				}else{
					echo	"href=''";			
				}

				echo	">";
				echo	$this->name;	
				echo	"</a>\n";
		
				if($this->addNewLine == true){
					echo "<br>\n";
				}

				if( $this->enabled == false){
					echo "
						<script type='text/javascript'>
							$('#".$this->id."').bind('click', function() {
								alert('ERRRRRRRORRRRRRR');
							});
						</script> 
					";
				}
		}
		
		function showDetalle(){		/** Metodo para imprimir el objeto */
				echo	"<div ";
				echo	"id='".$this->id."' ";
				echo	"class='".$this->clase."' ";
				echo	"style='".$this->style."' ";
				echo	">";

				if($this->comentario ==""){
					echo	$this->name;
				}
				else { echo	$this->comentario; }

				echo	"</div>\n";
		
				if($this->addNewLine == true){
					echo "<br>\n";
				}

				if( $this->enabled == false){
					echo "
						<script type='text/javascript'>
							$('#".$this->id."').bind('click', function() {
								alert('ERRRRRRRORRRRRRR');
							});
						</script> 
					";
				}
		}

		function showSemaforo(){

			echo	"<div ";
			echo	"id='".$this->id."' ";
			echo	"class='".$this->clase."' ";
			echo	"style='".$this->style."' ";
			echo	">";

			echo	'<img src="' ;
			echo	$this->href ; 
			echo	"b_";
			echo	$this->name ;
			echo	'.png"';
			echo	"/>";

			if($this->addNewLine == true){
				echo "<br>\n";
			}
	
			echo	"</div>\n";
		}		

	}/*fin de la clse funciones*/


/*===========================================================*/
		/*ACA TENEMOS TODOS LOS OBJETOS*/
/*===========================================================*/

	class Objeto extends Funciones {
		var $id;  // Este atributos es el id del objeto html
		var $href;
		var $clase;
		var $style;
		var $name;
		var $value;
		var $inicioBlanco;
		var $addNewLine;
		var $enabled;
		var $comentario;
				
		function __construct(){		/** Constructor del objeto.*/

			$this->id    = "";
			$this->href  = "";
			$this->clase = "";
			$this->style = "";
			$this->comentario    = "";
			$this->name  = "";
			$this->value  = "";
			$this->inicioBlanco  = "";
			$this->addNewLine = false;
			$this->enabled = true;
		}
	}
	/*-------------------------------------------------------*/
	class Semaforo extends Funciones {

		function __construct(){		/** Constructor del objeto.*/

			$this->id    = "";
			$this->href  = "";
			$this->clase = "";
			$this->style = "";
			$this->comentario    = "";
			$this->name  = "";
			$this->addNewLine = false;
			$this->enabled = true;
		}

	}	
	/*-------------------------------------------------------*/
	class Lista extends Funciones {
		

		function __construct(){		/** Constructor de la clase ProyectoCastillo.*/

			$this->id		= "";			
			$this->href		= "";
			$this->clase	= "";
			$this->style	= "";
			$this->name		= "";
			$this->value	= "";
			$this->inicioBlanco  = "";
			$this->addNewLine = false;
			$this->enabled	= true;
		}
	}
	/*-------------------------------------------------------*/
	class Porcentaje extends Funciones {
		
		var $porcentajes;
		
		function __construct(){		/** Constructor de la clase Semaforo.*/

			$this->id   = "1";
			$this->clase = "";
			$this->porcentajes = array("10","20","30","40","50","60","70","80","90");
			$this->name  = "";
			$this->value  = "";
			$this->addNewLine = false;
			$this->enabled = true;
		}


		function showPorcentaje(){		

			echo	"<select ";
			echo	"id='".$this->id."' ";
			echo	"name='".$this->name."' ";
			echo	"class='".$this->clase."' ";
			echo	"value=' ".$this->value."' ";
			echo	">\n";


			echo	"<option selected></option>";
			for ($i= 0; $i<= 8; $i++){

				echo   "<option value='" ;
					echo   $this->porcentajes[$i];
				echo	"'>";
				echo   $this->porcentajes[$i];
				echo   "</option>\n";
			}

			echo	"</select>\n";

		}
	}
	/*-------------------------------------------------------*/
	class Mes extends Funciones {
		
		var $meses;

		function __construct(){		/** Constructor de la clase Semaforo.*/

			$this->id   = "";
			$this->clase = "";
			$this->meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
			$this->name  = "";
			$this->value  = "";
			$this->addNewLine = false;
			$this->enabled = true;
			$this->inicioBlanco = false;
		}


		function showMes(){
			echo	"<select ";
			echo	"id		=' ".$this->id."' ";
			echo	"name	=' ".$this->name."' ";
			echo	"class	=' ".$this->clase."' ";
			echo	"value	=' ".$this->value."' ";
			echo	">\n";


			if($this->inicioBlanco == true){
				echo	"<option selected></option>";
				for ($i= 0; $i<= 11; $i++){
					echo	"<option value='" ;
						echo   $this->meses[$i];
					echo	"'>";
					echo   $this->meses[$i];
					echo   "</option>";
				}
			}
			else{
				for ($i= 0; $i<= 11; $i++){
					echo	"<option value='" ;
						echo   $this->meses[$i];
					echo	"'>";
					echo   $this->meses[$i];
					echo   "</option>";
				}
			}

			echo	"</select>\n";
		}//Fin de la Show Mes.

	}//Fin de la clase Mes

	/*-------------------------------------------------------*/
	class Anio extends Funciones {

		function __construct(){		/** Constructor de la clase Semaforo.*/

			$this->id		= "";
			$this->clase	= "";
			$this->name		= "";
			$this->value	= "";
			$this->addNewLine= false;
			$this->enabled	= true;
			$this->inicioBlanco = false;
		}//

		function showAnio(){		

			echo	"<select ";
			echo	"id='".$this->id."' ";
			echo	"name='".$this->name."' ";
			echo	"class='".$this->clase."' ";
			echo	"value=' ".$this->value."' ";
			echo	">\n";

			if($this->inicioBlanco == true){
				echo	"<option selected></option>";
				for ($anio= 2000; $anio<= 2050; $anio++){
					echo   "<option value='" ;
						echo   $anio;
					echo	"'>";
						echo   $anio;
				echo	"</option>\n";
				}
			}
			else{
				for ($anio= 2000; $anio<= 2050; $anio++){
					echo   "<option value='" ;
						echo   $anio;
					echo	"'>";
						echo   $anio;
				echo	"</option>\n";
				}
			}

			echo	"</select>\n";
		}

	}//Fin de la clase Anio


?>







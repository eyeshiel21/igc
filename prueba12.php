<html>
<head>
<title>grasa</title>
<style type="text/css" >
		#span{
			background: red;
			text-align: center;
			width: 30%;
			margin-left: 40%;
			margin-top:10%; 
		}
		#color{
			margin-top: 5%;
			background-color: 	#99FFCC;
			border-color: 5px;
			text-align: center;
			color:#FF00CC;
			font-style: 35px;
			font-family: VERDANA;
		}
		</style>
</head>
<body>



<?php
echo "<div id='color' ";
$nombre= $_REQUEST['nombre'];
$edad= $_REQUEST['edad'];
$peso= $_REQUEST['peso'];
$altura= $_REQUEST['altura'];
$cuello= $_REQUEST['cuello'];
$cintura= $_REQUEST['cintura'];
$cadera= $_REQUEST['cadera'];
$porcentaje="";
$porcentaje1="";
  echo $nombre;
  echo "<br>";
  echo "<br>";
  echo "su peso es de:";
  echo $peso;
  echo "<br>";
  echo "<br>";
  if ($_REQUEST['sexo']=="masculino"){
	   $resultado= 1.0324-0.19077 * (log10($_REQUEST['cintura'] - $_REQUEST['cuello'])) + 0.15456 * (log10($_REQUEST['altura']));
	  $final= (495/$resultado)-450;
	  $final=round($final,PHP_ROUND_HALF_DOWN);
	  echo"su porcentaje de grasa corporal es:" ;
	   echo $final;
	   echo"%";
	
		if (($edad >=19)&& ($edad <=24)){
			if (($final>0)&& ($final<=2)){
			$porcentaje="esencial";}else
			if (($final>2)&& ($final<=6)){
			$porcentaje="atleta";}else
				if (($final>6)&& ($final<=9)){
			$porcentaje="exelente";}else
				if (($final>9)&& ($final<=15)){
			$porcentaje="bueno";}else
				if (($final>15)&& ($final<=19)){
			$porcentaje="estandar";}else
				if (($final>19)&& ($final<=23)){
			$porcentaje="sobrepeso";}else
				if (($final>23)&& ($final<= 150)){
			$porcentaje="obesidad";};
		}
			
		if (($edad >=25)&& ($edad <=29)){
			if (($final>0)&& ($final<=2)){
			$porcentaje="esencial";}else
				if (($final>2)&& ($final<=6)){
			$porcentaje="atleta";}else
				if (($final>6)&& ($final<=10)){
			$porcentaje="exelente";}else
				if (($final>10)&& ($final<=16)){
			$porcentaje="bueno";}else
				if (($final>16)&& ($final<=19)){
			$porcentaje="estandar";}else
				if (($final>19)&& ($final<=24)){
			$porcentaje="sobrepeso";}else
				if (($final>24)&& ($final<= 150)){
			$porcentaje="obesidad";};
		}
			
		if (($edad >=30)&& ($edad <=34)){
			if (($final>0)&& ($final<=2)){
			$porcentaje="esencial";}else
				if (($final>2)&& ($final<=6)){
			$porcentaje="atleta";}else
				if (($final>6)&& ($final<=11)){
			$porcentaje="exelente";}else
				if (($final>11)&& ($final<=17)){
			$porcentaje="bueno";}else
				if (($final>17)&& ($final<=19)){
			$porcentaje="estandar";}else
				if (($final>19)&& ($final<=25)){
			$porcentaje="sobrepeso";}else
				if (($final>25)&& ($final<= 150)){
			$porcentaje="obesidad";};
		}
			
		if (($edad >=35)&& ($edad <=39)){
			if (($final>0)&& ($final<=2)){
			$porcentaje="esencial";}else
				if (($final>2)&& ($final<=6)){
			$porcentaje="atleta";}else
				if (($final>6)&& ($final<=12)){
			$porcentaje="exelente";}else
				if (($final>12)&& ($final<=18)){
			$porcentaje="bueno";}else
				if (($final>18)&& ($final<=19)){
			$porcentaje="estandar";}else
				if (($final>19)&& ($final<=26)){
			$porcentaje="sobrepeso";}else
				if (($final>26)&& ($final<= 150)){
			$porcentaje="obesidad";};
		}
		
		if (($edad >=40)&& ($edad <=44)){
			if (($final>0)&& ($final<=2)){
			$porcentaje="esencial";}else
				if (($final>2)&& ($final<=6)){
			$porcentaje="atleta";}else
				if (($final>6)&& ($final<=13)){
			$porcentaje="exelente";}else
				if (($final>13)&& ($final<=19)){
			$porcentaje="bueno";}else
				if (($final>19)&& ($final<=20)){
			$porcentaje="estandar";}else
				if (($final>20)&& ($final<=27)){
			$porcentaje="sobrepeso";}else
				if (($final>27)&& ($final<= 150)){
			$porcentaje="obesidad";};
		}
		
		if (($edad >=45)&& ($edad <=49)){
			if (($final>0)&& ($final<=2)){
			$porcentaje="esencial";}else
				if (($final>2)&& ($final<=6)){
			$porcentaje="atleta";}else
				if (($final>6)&& ($final<=15)){
			$porcentaje="exelente";}else
				if (($final>15)&& ($final<=21)){
			$porcentaje="bueno";}else
				if (($final>21)&& ($final<=25)){
			$porcentaje="estandar";}else
				if (($final>25)&& ($final<=28)){
			$porcentaje="sobrepeso";}else
				if (($final>28)&& ($final<= 150)){
			$porcentaje="obesidad";};
		}
		
		if (($edad >=50)&& ($edad <=54)){
			if (($final>0)&& ($final<=2)){
			$porcentaje="esencial";}else
				if (($final>2)&& ($final<=6)){
			$porcentaje="atleta";}else
				if (($final>6)&& ($final<=17)){
			$porcentaje="exelente";}else
				if (($final>17)&& ($final<=23)){
			$porcentaje="bueno";}else
				if (($final>23)&& ($final<=26)){
			$porcentaje="estandar";}else
				if (($final>26)&& ($final<=29)){
			$porcentaje="sobrepeso";}else
				if (($final>29)&& ($final<= 150)){
			$porcentaje="obesidad";};
		}
		
		if (($edad >=55)&& ($edad <=59)){
			if (($final>0)&& ($final<=2)){
			$porcentaje="esencial";}else
				if (($final>2)&& ($final<=6)){
			$porcentaje="atleta";}else
				if (($final>6)&& ($final<=19)){
			$porcentaje="exelente";}else
				if (($final>19)&& ($final<=24)){
			$porcentaje="bueno";}else
				if (($final>24)&& ($final<=28)){
			$porcentaje="estandar";}else
				if (($final>28)&& ($final<=30)){
			$porcentaje="sobrepeso";}else
				if (($final>30)&& ($final<= 150)){
			$porcentaje="obesidad";};
		}
		
		if (($edad >=60)){
			if (($final>0)&& ($final<=2)){
			$porcentaje="esencial";}else
				if (($final>2)&& ($final<=6)){
			$porcentaje="atleta";}else
				if (($final>6)&& ($final<=20)){
			$porcentaje="exelente";}else
				if (($final>20)&& ($final<=25)){
			$porcentaje="bueno";}else
				if (($final>25)&& ($final<=29)){
			$porcentaje="estandar";}else
				if (($final>29)&& ($final<=31)){
			$porcentaje="sobrepeso";}else
				if (($final>31)&& ($final<= 150)){
			$porcentaje="obesidad";};
		}
		echo "<br>";
		echo "<br>";
		echo "su porsentaje indica que esta en el promedio de:";
		echo $porcentaje;
  }
		




  
  
if ($_REQUEST['sexo']=="femenino"){
  
       $resultado= 1.29579-0.35004 * (log10($_REQUEST['cintura'] + $_REQUEST['cadera'] - $_REQUEST['cuello'])) + 0.221 * (log10($_REQUEST['altura']));
	  $final1= (495/$resultado)-450;
	  $final1=round($final1,PHP_ROUND_HALF_DOWN);
	   echo"su porcentaje de grasa corporal es:" ;
	   echo $final1;
	   echo"%";
	   
	   if (($edad >=19)&& ($edad <=24)){
			if (($final1>0)&& ($final1<=7)){
			$porcentaje1="esencial";}else
			if (($final1>7)&& ($final1<=12)){
			$porcentaje1="atleta";}else
				if (($final1>12)&& ($final1<=15)){
			$porcentaje="exelente";}else
				if (($final1>15)&& ($final1<=20)){
			$porcentaje1="bueno";}else
				if (($final1>20)&& ($final1<=25)){
			$porcentaje1="estandar";}else
				if (($final1>25)&& ($final1<=30)){
			$porcentaje1="sobrepeso";}else
				if (($final1>30)&& ($final1<= 150)){
			$porcentaje1="obesidad";};
		}
			
		if (($edad >=25)&& ($edad <=29)){
			if (($final1>0)&& ($final1<=7)){
			$porcentaje1="esencial";}else
				if (($final1>7)&& ($final1<=12)){
			$porcentaje1="atleta";}else
				if (($final1>12)&& ($final1<=16)){
			$porcentaje1="exelente";}else
				if (($final1>16)&& ($final1<=21)){
			$porcentaje1="bueno";}else
				if (($final1>21)&& ($final1<=26)){
			$porcentaje1="estandar";}else
				if (($final1>26)&& ($final1<=31)){
			$porcentaje1="sobrepeso";}else
				if (($final1>31)&& ($final1<= 150)){
			$porcentaje1="obesidad";};
		}
			
		if (($edad >=30)&& ($edad <=34)){
			if (($final1>0)&& ($final1<=7)){
			$porcentaje1="esencial";}else
				if (($final1>7)&& ($final1<=12)){
			$porcentaje1="atleta";}else
				if (($final1>12)&& ($final1<=17)){
			$porcentaje1="exelente";}else
				if (($final1>17)&& ($final1<=22)){
			$porcentaje1="bueno";}else
				if (($final1>22)&& ($final1<=27)){
			$porcentaje1="estandar";}else
				if (($final1>27)&& ($final1<=32)){
			$porcentaje1="sobrepeso";}else
				if (($final1>32)&& ($final1<= 150)){
			$porcentaje1="obesidad";};
		}
			
		if (($edad >=35)&& ($edad <=39)){
			if (($final1>0)&& ($final1<=7)){
			$porcentaje1="esencial";}else
				if (($final1>7)&& ($final1<=12)){
			$porcentaje1="atleta";}else
				if (($final1>12)&& ($final1<=19)){
			$porcentaje1="exelente";}else
				if (($final1>19)&& ($final1<=23)){
			$porcentaje1="bueno";}else
				if (($final1>23)&& ($final1<=28)){
			$porcentaje1="estandar";}else
				if (($final1>28)&& ($final1<=33)){
			$porcentaje1="sobrepeso";}else
				if (($final1>33)&& ($final1<= 150)){
			$porcentaje1="obesidad";};
		}
		
		if (($edad >=40)&& ($edad <=44)){
			if (($final1>0)&& ($final1<=7)){
			$porcentaje1="esencial";}else
				if (($final1>7)&& ($final1<=12)){
			$porcentaje1="atleta";}else
				if (($final1>12)&& ($final1<=21)){
			$porcentaje1="exelente";}else
				if (($final1>21)&& ($final1<=24)){
			$porcentaje1="bueno";}else
				if (($final1>24)&& ($final1<=29)){
			$porcentaje1="estandar";}else
				if (($final1>29)&& ($final1<=34)){
			$porcentaje1="sobrepeso";}else
				if (($final1>34)&& ($final1<= 150)){
			$porcentaje1="obesidad";};
		}
		
		if (($edad >=45)&& ($edad <=49)){
			if (($final1>0)&& ($final1<=7)){
			$porcentaje1="esencial";}else
				if (($final1>7)&& ($final1<=12)){
			$porcentaje1="atleta";}else
				if (($final1>12)&& ($final1<=23)){
			$porcentaje1="exelente";}else
				if (($final1>23)&& ($final1<=26)){
			$porcentaje1="bueno";}else
				if (($final1>26)&& ($final1<=31)){
			$porcentaje1="estandar";}else
				if (($final1>31)&& ($final1<=36)){
			$porcentaje1="sobrepeso";}else
				if (($final1>36)&& ($final1<= 150)){
			$porcentaje1="obesidad";};
		}
		
		if (($edad >=50)&& ($edad <=54)){
			if (($final1>0)&& ($final1<=7)){
			$porcentaje1="esencial";}else
				if (($final1>7)&& ($final1<=12)){
			$porcentaje1="atleta";}else
				if (($final1>12)&& ($final1<=25)){
			$porcentaje1="exelente";}else
				if (($final1>25)&& ($final1<=28)){
			$porcentaje1="bueno";}else
				if (($final1>28)&& ($final1<=33)){
			$porcentaje1="estandar";}else
				if (($final1>33)&& ($final1<=37)){
			$porcentaje1="sobrepeso";}else
				if (($final1>37)&& ($final1<= 150)){
			$porcentaje1="obesidad";};
		}
		
		if (($edad >=55)&& ($edad <=59)){
			if (($final1>0)&& ($final1<=7)){
			$porcentaje1="esencial";}else
				if (($final1>7)&& ($final1<=12)){
			$porcentaje1="atleta";}else
				if (($final1>12)&& ($final1<=26)){
			$porcentaje1="exelente";}else
				if (($final1>26)&& ($final1<=29)){
			$porcentaje1="bueno";}else
				if (($final1>29)&& ($final1<=34)){
			$porcentaje1="estandar";}else
				if (($final1>34)&& ($final1<=38)){
			$porcentaje1="sobrepeso";}else
				if (($final1>38)&& ($final1<= 150)){
			$porcentaje1="obesidad";};
		}
		
		if (($edad >=60)){
			if (($final>0)&& ($final<=7)){
			$porcentaje1="esencial";}else
				if (($final1>7)&& ($final1<=12)){
			$porcentaje1="atleta";}else
				if (($final1>12)&& ($final1<=27)){
			$porcentaje1="exelente";}else
				if (($final1>27)&& ($final1<=30)){
			$porcentaje1="bueno";}else
				if (($final1>30)&& ($final1<=35)){
			$porcentaje1="estandar";}else
				if (($final1>35)&& ($final1<=39)){
			$porcentaje1="sobrepeso";}else
				if (($final1>39)&& ($final1<= 150)){
			$porcentaje1="obesidad";};
		}
	
		echo "<br>";
		echo "su porsentaje indica que esta en el promedio de:";
		echo $porcentaje1;
  }
echo "</div>";
?>

<form action="index.html" method="post">
<div id="color">
	<input type="submit" value="Salir">
</div>
</form>
</body>
</html>
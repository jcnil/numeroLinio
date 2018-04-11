<html>
  <head>
    <title>Los Numeros Linio</title>
  </head>
  <body>
    <p>
	   <?php

	   		function numeroLinio($arreglo)
			{
				$aux = $arreglo;

        		if ($arreglo%3 == 0) { 
        			$aux = 'Linio';
        		}

        		while ($arreglo%5 == 0) { 
        			$aux = 'IT'; break; 
        		}

        		while ($arreglo%3 == 0 && $arreglo%5 == 0) { 
        			$aux = 'Linianos'; break; 
        		}

        		return $aux;
			}

			$array= array();

			echo "Areglo con los numeros Linio: <br/> ";

			for ($i = 1; $i <= 100; $i++) {
				$array[$i] = $i;
			}

			for ($i = 1; $i <= 100; $i++) {
				
				$array[$i] = numeroLinio($array[$i]);
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $array[$i]." <br/> ";
			}
		?>
    </p>
  </body>
</html>
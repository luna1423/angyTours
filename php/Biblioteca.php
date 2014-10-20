<?php
function recorrerTabla($tabla)
    {
    	$salida = "<table border=\"1\">";
    	$encabezados = false; // no se han puesto los encabezados 
    	
    	foreach ($tabla as $renglon)
    	{
    		if (!$encabezados)
    		{
    			$salida .= "<tr>";
    			foreach ($renglon as $campo => $valor)
    			{
    				$salida .= "<th> $campo </th>";
    			}
    			$salida.= "</tr>";
    			$encabezados = true; //ya se ponene encabezados
    		}
    	  		$salida .="<tr>";
    			foreach ($renglon as $campo => $valor)
    				{
    					$salida .= "<td> $valor </td>";
    				}
    				$salida.= "</tr>";
    				}
    				
    			$salida.= "</table>";
    			return $salida;
    }
   
   function prom($arreglo)
   {
   	$suma = 0;
   	$promedio = 0;
   	
   	for ($i=0; $i<count($arreglo);$i++)
   	{
   		foreach($arreglo[$i] as $llave=>$valor)
   		{
			if($llave=="cal")
			{
				$suma+=$valor;
				$Promedio =$suma/count($arreglo);
			}
   		}
   }
   return $promedio;
   }
  ?>

<?php 


require_once ("config.php");

$enlace =  mysql_connect("localhost","root","");
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
else
	{ 
	// Hacer que foo sea la base de datos actual
      $bd_seleccionada = mysql_select_db('db_fe', $enlace);
      if (!$bd_seleccionada) {
         die ('No se puede usar foo : ' . mysql_error());
      }else
      {
         
         $consulta =  "select * from t_noticia order by id_not desc limit 5  ";
          
		 //$consulta="select * from noticias where Id=96"; 
             

          // Ejecutar la consulta
         $resultado = mysql_query($consulta,$enlace);

           if (!$resultado) {
           	echo " consulta : "+$consulta;
            $mensaje  = "Consulta no válida: " . mysql_error() . "\n";
            $mensaje .= "Consulta completa: " . $consulta;
           die($mensaje);
          }else
          {
          	 $arr=array();
          

             $total_records = mysql_num_rows($resultado);

             if($total_records >= 1)
             {

             	
             while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC))

                {

                   $row_array["noticia_id"] = $row["id_not"];
                   $row_array["noticia_titulo"] = $row["not_titulo"];
                   $row_array["noticia_fecha"]  =  $row["not_fecha"];
                   $row_array["noticia_autor"]  =  $row["not_autor"];
                   $row_array[ "noticia_cuerpo"] =  $row["not_cuerpo"];
                   $row_array[ "noticia_url"] =  $row["not_url"];
                   $row_array[ "noticia_url_image"] =  $row["not_url_image"];
                   
                   array_push($arr,$row_array);
  
                }
          


               echo json_encode($arr);

           } 
        
          }
            
        

      }
  }

mysql_close($enlace);



?>



<?php


 require_once ("config.php");

// decode JSON string to PHP object, 2nd param sets to associative array
$requestBody = file_get_contents('php://input');
$requestBody = json_decode($requestBody);

$id_noticia=$requestBody->id_noticia;
$titulo=$requestBody->titulo;
$fecha=$requestBody->fecha;
$autor=$requestBody->autor;
$cuerpo=$requestBody->cuerpo;
$not_url="";
$not_url_image="";    


     //create noticia
     
     $enlace =  mysql_connect("localhost", "root","");
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
         

		 $consulta="insert into t_noticia(not_titulo,not_fecha,not_autor,not_cuerpo,not_url,not_url_image)values('"
		 	.$titulo."','".$fecha."','".$autor."','".$cuerpo."','".$not_url."','".$not_url_image."')"; 
             
          // Ejecutar la consulta
         $resultado = mysql_query($consulta,$enlace);

           if (!$resultado) {
            $mensaje = array('status' => 'ERROR');
           die($mensaje);
          }else
          {
          	 $mensaje= array('status' => 'OK');
          }
            
        

      }
   }

    mysql_close($enlace);
   
    //echo mensaje
    echo json_encode($mensaje);


?>
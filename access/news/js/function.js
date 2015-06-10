
 /*** function que permite 
  ** crear una determinada
  ** noticia
  **/
function create()
{
    
    jQuery("#content").load("news/create.html");
    
}

function createNoticia()
{

  console.log("obtengo los datos a insertar de la noticia");
   var $=jQuery;

  var titulo=$("#titulo").val();
  var fecha=$("#fecha").val();
  var autor=$("#autor").val();
  var cuerpo=$("#cuerpo").val();
  var id_noticia="";

  var url="http://localhost:8080/FE-web/data/php/createNoticia.php";
 
  var data= JSON.stringify({
    'id_noticia': id_noticia,
    'titulo':titulo,
    "fecha":fecha,
    "autor":autor,
    "cuerpo":cuerpo
  });



   $.ajax({ 
    url        : url,
    dataType   : 'json',
    data       : data,
    type       : 'POST',
    success:function(data)
    {
      console.log("data");
      if(data.status=="OK")
        {
          $("#content").load("news/content.html");

        }

    },
    error:function(data)
    {


    }

   });

   
}


/*** carga el listado de noticias */
function loadTable()
{
    console.log("Load Table");

    var url=getUrlServer()+"/noticias.php";
    var $=jQuery;

    $.ajax({
      type:"json",
      data:null,
      url:url,
      success:function(data)
        {
           
          console.log("data");     

          $("#tblNoticias > tbody").empty();
           
        },
      error:function(error)
        {
         console.log("error data");
        }
    
    });
     
  

}

jQuery(document).ready(function(){
 
   loadTable();

});

$(document).ready(function(){

   $("#content" ).load( "template/content.html" );
    
   $("header").load("template/header.html");    
   
   
   loadTable();
    

   $("#btnCrearNoticia").onclick(function(event)
   {
   	console.log("crear noticia");

   });
 

    
    
});

 /*** function que permite 
  ** crear una determinada
  ** noticia
  **/
function create()
{
    
    jQuery("#content").load("news/create.html");
    
}


function loadTable()
{
    console.log("Load Table");

    /*$.ajax({
      url:"/data/noticias.php",
      type:"json",
      data:null,
      success:function(data)
        {
            
                  
          $("#tableNoticias > tbody").empty();
           
             
            
        },
      error:function(error)
        {
         console.log("error data");
        }
    
    });
     
    */

}

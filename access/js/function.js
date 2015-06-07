function loadContent(section)
 {
    console.log("loadContent : "+section); 
    jQuery("#content").load(section+"/content.html");
  
 }
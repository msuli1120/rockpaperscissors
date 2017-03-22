$(function(){
  $("span#click").click(function(event){
    event.preventDefault();
    $("div#hide").hide();
  });
});

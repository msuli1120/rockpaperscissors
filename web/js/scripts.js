$(function(){
  $("span#click").click(function(event){
    event.preventDefault();
    $("div#hide").hide();
  });

  $("form#players").submit(function(event){
    event.preventDefault();
    $("div#hide").show();
  })
});

document.onreadystatechange = function () {
    var state = document.readyState
    if (state == 'interactive') {

    } else if (state == 'complete') {
        setTimeout(function(){
          
           document.getElementById('load').style.display="none";
           load();
        },1000);
    }
  }
console.log('This is a test');
$('.menu').on('click', function(){
  $(".right").toggleClass('hide');
  $("footer").toggleClass('hide');
    $(".nav-main, .nav-main ").toggleClass("hide show");
    $(".menutxt").toggleClass('.menutxt:hover');
});
// if mobile devices only
// so
function load(){
    $(".mbody").addClass("load-anim");
    console.log("ANimation >>");
}
var x = window.innerHeight;
var y = window.innerWidth;
if(y <= 765){
    $(".nav-main").css("height", x - (0.08 * x));
    $(".desktop-content").addClass('hide');
}
else{
    $(".left").addClass('hide');
    $(".nav-main").css("height", 50);
     $(".nav-main ").css("right", (y - (y * 0.95)) * 1);
}

console.log('heights');
console.log(x);
console.log(y);
var oldVar = x;
if(oldVar != x){
    alert("Variable has changed");
}

$(".menu-wrapper-wrapper").css("margin-left", (y - (y * 0.95)) * -1);
$(".mbody").css("min-height", x - (165) - (0.08 * x));
$(document).ready(function() {
    console.log( "ready!" );    
    $("#selectorRegion").change(function () {
        
         $value = $("#selectorRegion :selected").attr('value');
         console.log($value);
        if ($value == 'region1')
        {
           $("#reg1").show();
           $("#reg2").hide();
           $("#reg3").hide();
           $("#reg4a").hide();
           $("#reg4b").hide();
           $("#reg5").hide();
           $("#reg6").hide();
           $("#reg7").hide();
           $("#reg8").hide();
           $("#reg9").hide();
           $("#reg10").hide();
           $("#reg11").hide();
           $("#reg12").hide();
           $("#reg13").hide();
           $("#ncr").hide();
           $("#car").hide();
           $("#armm").hide();
        }
        else if($value == 'region2')
        {
            $("#reg1").hide();
            $("#reg2").show();
            $("#reg3").hide();
            $("#reg4a").hide();
            $("#reg4b").hide();
            $("#reg5").hide();
            $("#reg6").hide();
            $("#reg7").hide();
            $("#reg8").hide();
            $("#reg9").hide();
            $("#reg10").hide();
            $("#reg11").hide();
            $("#reg12").hide();
            $("#reg13").hide();
            $("#ncr").hide();
            $("#car").hide();
            $("#armm").hide();
        }
        else if($value == 'region3')
        {
           $("#reg1").hide();
           $("#reg2").hide();
           $("#reg3").show();
           $("#reg4a").hide();
           $("#reg4b").hide();
           $("#reg5").hide();
           $("#reg6").hide();
           $("#reg7").hide();
           $("#reg8").hide();
           $("#reg9").hide();
           $("#reg10").hide();
           $("#reg11").hide();
           $("#reg12").hide();
           $("#reg13").hide();
           $("#ncr").hide();
           $("#car").hide();
           $("#armm").hide();
        }
        else if($value == 'region4a')
        {           
            $("#reg1").hide();
            $("#reg2").hide();
            $("#reg3").hide();
            $("#reg4a").show();
            $("#reg4b").hide();
            $("#reg5").hide();
            $("#reg6").hide();
            $("#reg7").hide();
            $("#reg8").hide();
            $("#reg9").hide();
            $("#reg10").hide();
            $("#reg11").hide();
            $("#reg12").hide();
            $("#reg13").hide();
            $("#ncr").hide();
            $("#car").hide();
            $("#armm").hide();
        }
        else if($value == 'region4b')
        {
            $("#reg1").hide();
            $("#reg2").hide();
            $("#reg3").hide();
            $("#reg4a").hide();
            $("#reg4b").show();
            $("#reg5").hide();
            $("#reg6").hide();
            $("#reg7").hide();
            $("#reg8").hide();
            $("#reg9").hide();
            $("#reg10").hide();
            $("#reg11").hide();
            $("#reg12").hide();
            $("#reg13").hide();
            $("#ncr").hide();
            $("#car").hide();
            $("#armm").hide();
        }
        else if($value == 'region5')
        {
            $("#reg1").hide();
            $("#reg2").hide();
            $("#reg3").hide();
            $("#reg4a").hide();
            $("#reg4b").show();
            $("#reg5").show();
            $("#reg6").hide();
            $("#reg7").hide();
            $("#reg8").hide();
            $("#reg9").hide();
            $("#reg10").hide();
            $("#reg11").hide();
            $("#reg12").hide();
            $("#reg13").hide();
            $("#ncr").hide();
            $("#car").hide();
            $("#armm").hide();
        }
        else if($value == 'region6')
        {
            $("#reg1").hide();
            $("#reg2").hide();
            $("#reg3").hide();
            $("#reg4a").hide();
            $("#reg4b").hide();
            $("#reg5").hide();
            $("#reg6").show();
            $("#reg7").hide();
            $("#reg8").hide();
            $("#reg9").hide();
            $("#reg10").hide();
            $("#reg11").hide();
            $("#reg12").hide();
            $("#reg13").hide();
            $("#ncr").hide();
            $("#car").hide();
            $("#armm").hide();
        }
        else if($value == 'region7')
        {
            $("#reg1").hide();
            $("#reg2").hide();
            $("#reg3").hide();
            $("#reg4a").hide();
            $("#reg4b").hide();
            $("#reg5").hide();
            $("#reg6").hide();
            $("#reg7").show();
            $("#reg8").hide();
            $("#reg9").hide();
            $("#reg10").hide();
            $("#reg11").hide();
            $("#reg12").hide();
            $("#reg13").hide();
            $("#ncr").hide();
            $("#car").hide();
            $("#armm").hide();
        }
        else if($value == 'region8')
        {
            $("#reg1").hide();
            $("#reg2").hide();
            $("#reg3").hide();
            $("#reg4a").hide();
            $("#reg4b").hide();
            $("#reg5").hide();
            $("#reg6").hide();
            $("#reg7").hide();
            $("#reg8").show();
            $("#reg9").hide();
            $("#reg10").hide();
            $("#reg11").hide();
            $("#reg12").hide();
            $("#reg13").hide();
            $("#ncr").hide();
            $("#car").hide();
            $("#armm").hide();
        }
        else if($value == 'region9')
        {
            $("#reg1").hide();
            $("#reg2").hide();
            $("#reg3").hide();
            $("#reg4a").hide();
            $("#reg4b").hide();
            $("#reg5").hide();
            $("#reg6").hide();
            $("#reg7").hide();
            $("#reg8").hide();
            $("#reg9").show();
            $("#reg10").hide();
            $("#reg11").hide();
            $("#reg12").hide();
            $("#reg13").hide();
            $("#ncr").hide();
            $("#car").hide();
            $("#armm").hide();
        }
        else if($value == 'region10')
        {
            $("#reg1").hide();
            $("#reg2").hide();
            $("#reg3").hide();
            $("#reg4a").hide();
            $("#reg4b").hide();
            $("#reg5").hide();
            $("#reg6").hide();
            $("#reg7").hide();
            $("#reg8").hide();
            $("#reg9").hide();
            $("#reg10").show();
            $("#reg11").hide();
            $("#reg12").hide();
            $("#reg13").hide();
            $("#ncr").hide();
            $("#car").hide();
            $("#armm").hide();
        }
        else if($value == 'region11')
        {
            $("#reg1").hide();
            $("#reg2").hide();
            $("#reg3").hide();
            $("#reg4a").hide();
            $("#reg4b").hide();
            $("#reg5").hide();
            $("#reg6").hide();
            $("#reg7").hide();
            $("#reg8").hide();
            $("#reg9").hide();
            $("#reg10").hide();
            $("#reg11").show();
            $("#reg12").hide();
            $("#reg13").hide();
            $("#ncr").hide();
            $("#car").hide();
            $("#armm").hide();
        }
        else if($value == 'region12')
        {
            $("#reg1").hide();
            $("#reg2").hide();
            $("#reg3").hide();
            $("#reg4a").hide();
            $("#reg4b").hide();
            $("#reg5").hide();
            $("#reg6").hide();
            $("#reg7").hide();
            $("#reg8").hide();
            $("#reg9").hide();
            $("#reg10").hide();
            $("#reg11").hide();
            $("#reg12").show();
            $("#reg13").hide();
            $("#ncr").hide();
            $("#car").hide();
            $("#armm").hide();
        }
        else if($value == 'region13')
        {
            $("#reg1").hide();
            $("#reg2").hide();
            $("#reg3").hide();
            $("#reg4a").hide();
            $("#reg4b").hide();
            $("#reg5").hide();
            $("#reg6").hide();
            $("#reg7").hide();
            $("#reg8").hide();
            $("#reg9").hide();
            $("#reg10").hide();
            $("#reg11").hide();
            $("#reg12").hide();
            $("#reg13").show();
            $("#ncr").hide();
            $("#car").hide();
            $("#armm").hide();
        }
        else if($value == 'regionncr')
        {
            $("#reg1").hide();
            $("#reg2").hide();
            $("#reg3").hide();
            $("#reg4a").hide();
            $("#reg4b").hide();
            $("#reg5").hide();
            $("#reg6").hide();
            $("#reg7").hide();
            $("#reg8").hide();
            $("#reg9").hide();
            $("#reg10").hide();
            $("#reg11").hide();
            $("#reg12").hide();
            $("#reg13").hide();
            $("#ncr").show();
            $("#car").hide();
            $("#armm").hide();
        }
        else if($value == 'regioncar')
        {
            $("#reg1").hide();
            $("#reg2").hide();
            $("#reg3").hide();
            $("#reg4a").hide();
            $("#reg4b").hide();
            $("#reg5").hide();
            $("#reg6").hide();
            $("#reg7").hide();
            $("#reg8").hide();
            $("#reg9").hide();
            $("#reg10").hide();
            $("#reg11").hide();
            $("#reg12").hide();
            $("#reg13").hide();
            $("#ncr").hide();
            $("#car").show();
            $("#armm").hide();
        }
        else if($value == 'armm')
        {
            $("#reg1").hide();
            $("#reg2").hide();
            $("#reg3").hide();
            $("#reg4a").hide();
            $("#reg4b").hide();
            $("#reg5").hide();
            $("#reg6").hide();
            $("#reg7").hide();
            $("#reg8").hide();
            $("#reg9").hide();
            $("#reg10").hide();
            $("#reg11").hide();
            $("#reg12").hide();
            $("#reg13").hide();
            $("#ncr").hide();
            $("#car").hide();
            $("#armm").show();
        }
        
        });
      
     });

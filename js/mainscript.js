
console.log('This is a test');
$('.menu').on('click', function(){
    
    $(".nav-main, .nav-main ").toggleClass("hide show");
    $(".menutxt").toggleClass('.menutxt:hover');
});

var x = window.innerHeight;
console.log('heights');
console.log(x);
$(".nav-main").css("height", x - (0.08 * x));

$(".mbody").css("min-height", x - (97) - (0.08 * x));
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

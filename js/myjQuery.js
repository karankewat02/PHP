$(document).ready(function () {

    console.log("jQuery Ready");

    $('.sidebar').hide();

    $('#menu').click(function () { 
        
        $('.sidebar').slideToggle(150);
    });
    $('.homepage','.all_customer').click(function () { 
        $('.sidebar').hide(100);        
    });

    $('#prob1,#sol1').hide();
    $('#prob2,#sol2').hide();
    $('#prob3,#sol3').hide();
    $('#prob4,#sol4').hide();
    $('#prob5,#sol5').hide();
 
    $('#btn1').click(function () { 
        
        $('#prob1').show(100);
        $('#sol1').delay(1500).show(100);
        
        
    });

    $('#btn2').click(function () { 
        
        $('#prob2').show(100);
        $('#sol2').delay(400).show(100);
        
        
    }); 
      $('#btn3').click(function () { 
        
        $('#prob3').show(100);
        $('#sol3').delay(700).show(100);
        
        
    });
       $('#btn4').click(function () { 
        
        $('#prob4').show(100);
        $('#sol4').delay(400).show(100);
        
        
    });  
     $('#btn5').click(function () { 
        
        $('#prob5').show(100);
        $('#sol5').delay(300).show(100);
        
        
    });

    $('#btn6').click(function () { 
        
        
        $('#prob1,#sol1,#prob2,#sol2,#prob3,#sol3,#prob4,#sol4,#prob5,#sol5').delay(1000).fadeOut(400);
        
        
    });


    
});
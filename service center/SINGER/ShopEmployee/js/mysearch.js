
  $(document).ready( function(){
   $("#search").hide();
   
   
   $("#sel1").focusout(function(){ 
    var index = $("#sel1").val();
    $(".e1").remove();   
    if (index==""){
      $('#sel1').after('<span class="e1">*Please select field</span>');
     
      $("#customer").hide();
      $("#nic").hide();
      $("#ser").hide();
      $("#job").hide();
      $("#serial").hide();
      $("#find,#btnsuper").fadeOut(10);

     }
    if(index=="1"){
      

      $("#customer").show();
      $("#nic").show();
      $("#ser").hide();
      $("#job").hide();
      $("#serial").hide();
    }
    if(index=="2"){
      
      $("#customer").hide();
      $("#nic").show();
      $("#ser").hide();
      $("#job").hide();
      $("#serial").show();
    }
    if(index=="3"){
      $("#customer").hide();
      $("#nic").show();
      $("#ser").show();
      $("#job").hide();
      $("#serial").show();
    }
    if(index=="4"){
      $("#customer").hide();
      $("#nic").hide();
      $("#ser").show();
      $("#job").show();
      $("#serial").show();
    }

   });

  $("#sel2").focusout(function(){ 
    var index1 = $("#sel2").val();
    $(".e2").remove();   
    if (index1==""){
      $('#sel2').after('<span class="e2">*Please select field</span>');
      $("#find,#btnsuper").fadeOut(10);
    }
  });

    $("#sel2").change(function(){ 
    var index3 = $("#sel2").val();
    if (index3 >0){
      
      $("#find,#btnsuper").fadeIn(10);
    }
  });

    $("#btnsuper").click(function(){
       $("#normal1,#normal2").hide();
       $("#search").show(); 
      $.ajax({
        type:"POST",
        url:"search.php",
        data:$("#searchform").serialize(),
        async: true,
        success:function(data)
        {
        
        $("#result").html(data);
        $("#result").show(); 
         
            
        }
      }); 
        
    });
  });

     
 

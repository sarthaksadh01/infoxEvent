
 $(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
    //   event.preventDefault();
      return false;
    }
  });
});      
    



    
function usecandy(){
    
    
}

function atmpt(){
    var ans = $("#ans").val();
    if(ans=="")alert("empty");
    
    else{
        
    
      
 $.ajax({
      url: 'functions.php', 
      method:'POST',
      data:{
      attempt:'yes',
      ans:ans
      },

      success: function(html) {
        if(html=="Completed"){
            
            $("body").hide();
            alert("Completed");
            
        } 
        else if(html=="Correct Answer!"){
            
            $('#nqs').modal()
       
        }
       else alert(html);
        
        
      }

});

}

    
    
}

function show_next_q(){
    
    $("#image").hide();
    $("#audio").hide();
         
 $.ajax({
      url: 'functions.php', 
      method:'POST',
      data:{
      nq:'yes',
      },

      success: function(data) {
          
          
      $("#cqn").html(data.qno);
        $("#cqt").html(data.qtext);
        if(data.qtype=="image"){
            // alert(data.qcontent);
          $("#qimage").attr("src",data.qcontent);
          $("#image").show();
        }
        
        if(data.qtype=="audio"){
            // alert(data.qcontent);
          $("#qaudio").attr("src",data.qcontent);
          $("#audio").show();
            
        }
        
        $('#nqs').modal('hide');
        var width = (data.qno-1)*10;
        var presult =11-data.qno;
        $("#pbar").html(presult+ " left");
        $('#pbar').css('width', width + "%");
      }

});
    
    
}


    
    
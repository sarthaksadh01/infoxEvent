var alertRedInput = "#8C1010";
var defaultInput = "rgba(10, 180, 180, 1)";

function login(){
  
  $("#login").fadeIn(100);
  $("#signup").hide();

}
function signup(){
  $("#login").hide();
  $("#signup").fadeIn(100);
  
}

$(document).ready(function(){


    $(".snd").click(function(event){
        var name = $("#name").val();
  var email = $("#email").val();
  var colg = $("#colg").val();
  var password = $("#password").val();

  
 $.ajax({
      url: 'functions.php', 
      method:'POST',
      data:{
      otp_sent:'yes',
      name:name,
      email:email,
      colg:colg,
      password:password
      },

      success: function(html) {
        alert(html);
        $("#otp").fadeIn(1000);
        $(".otpr").show();
        $(".otps").hide();
      }

});

        
        event.preventDefault();
    });
    
    
    $(".log").click(function(event){
  var email = $("#email1").val();
  var password = $("#password1").val();

  
 $.ajax({
      url: 'functions.php', 
      method:'POST',
      data:{
      login:'yes',
      email:email,
      password:password
      },

      success: function(html) {
        alert(html);

      }

});
});


    $(".rotp").click(function(event){
var otp=$("#otp2").val();

  $.ajax({
  url:'functions.php',
  method:'POST',
  data:{
    otp_r:'yes',
    otp_ans:otp
  },
  success: function(html){
  alert(html);
  }
 });
  
});
});



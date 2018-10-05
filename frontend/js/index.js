$(document).ready(function() {
  $(window).keydown(function(event) {
    if (event.keyCode == 13) {
      //   event.preventDefault();
      return false;
    }
  });
});





function usecandy() {

  $('#exampleModalCenter').modal("hide");
  // //   $('#nqs').modal();
  // $('#nqs').modal();
  // $("#candy").hide();

  $.ajax({
    url: '././backend/functions.php',
    method: 'POST',
    data: {
      skip: 'yes',
    },

    success: function(html) {
      if (html == "Completed!") {


      } else if (html == 'Correct Answer!') {
        $('#exampleModalCenter').modal("hide");
        $('#nqs').modal();
        $("#candy").hide();

      } else {
        alert(html);
      }
    }

  });

}

function atmpt() {
  //  alert($("input").val().toUpperCase());
  $('#button1').hide();
  $('#ajax-loader').fadeIn(1000);
  var ans = $("#ans").val().toUpperCase();
  if (ans == "") {
    alert("empty");
    $('#button1').fadeIn();
    $('#ajax-loader').hide();
  } else {



    $.ajax({
      url: '././backend/functions.php',
      method: 'POST',
      data: {
        attempt: 'yes',
        ans: ans
      },

      success: function(html) {
        if (html == "Completed") {

          $("body").hide();
          alert("Completed");

        } else if (html == "Correct Answer!") {
          $('#button1').fadeIn();
          $('#ajax-loader').hide();
          $('#nqs').modal();
          // $("#exampleModalCenter").show();


        } else {
          alert(html);
          $('#button1').fadeIn();
          $('#ajax-loader').hide();
        }
      }

    });

  }

  $("input").val("");

}

function show_next_q() {

  $("#image").hide();
  $("#audio").hide();

  $.ajax({
    url: '././backend/functions.php',
    method: 'POST',
    data: {
      nq: 'yes',
    },

    success: function(data) {


      $("#cqn").html(data.qno);
      $("#cqt").html(data.qtext);
      if (data.qtype == "image") {
        // alert(data.qcontent);
        $("#qimage").attr("src", data.qcontent);
        $("#image").show();
      }

      if (data.qtype == "audio") {
        // alert(data.qcontent);
        $("#qaudio").attr("src", data.qcontent);
        $("#audio").show();

      }

      $('#nqs').modal('hide');
      var width = (data.qno - 1) * 10;
      var presult = 11 - data.qno;
      $("#pbar").html(presult + " left");
      $('#pbar').css('width', width + "%");
    }

  });


}

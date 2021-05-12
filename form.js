
  var href = "'login.php'"; 
  $(document).ready(function(){
    $("form").submit(function (event) {
      $(".form-group").removeClass("has-error");
      var formData = {
        id: $("#id").val(),
        surname: $("#surname").val(),
        name: $("#name").val(),
        fathername: $("#fathername").val(),
        query: $("#query").val(),
      };

      $.ajax({
        type: "POST",
        url: "process.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {

        if (!data.success) {
          if (data.errors.id) {
            $("#id").addClass("has-error");

          }
  
          if (data.errors.surname) {
            $("#surname").addClass("has-error");

          }
  
          if (data.errors.name) {
            $("#name").addClass("has-error");

          }

          if (data.errors.fathername) {
            $("#fathername").addClass("has-error");

          }

          if (data.errors.query) {
            alert("Λάθος στοιχεία");

          }

        } else {
          $("form").html(
            '<div id="right">'+

                    '<input type="text" id="mark1" name="mark1" class="client-info" value="'+ data.mark1 +'" disabled>'+
                    '<label for="mark1">Test CSS</label>'+
 
                    '<input type="text" id="mark2" name="mark2" class="client-info" value="'+ data.mark2 +'" disabled>'+
                    '<label for="mark2">Test HTML</label>'+

                    '<input type="text" id="mark3" name="mark3" class="client-info" value="'+ data.mark3 +'" disabled>'+
                    '<label for="mark3">Test PHP</label>'+

                    '<input type="text" id="mark4" name="mark4" class="client-info" value="'+ data.mark4 +'" disabled>'+
                    '<label for="mark4">Εργασία Στατικής Σελίδας</label>'+
                
                    '<input type="text" id="mark5" name="mark5" class="client-info" value="'+ data.mark5 +'" disabled>'+
                    '<label for="mark5">Εργασία Δυναμικής Σελίδας</label>'+

                    '<input type="text" id="mark6" name="mark6" class="client-info" value="'+ data.mark6 +'" disabled>'+
                    '<label for="mark6">Τελικός Βαθμός</label>'+
                    '<input type="submit" id="back" class="client-info" onclick="window.location.href='+href+'" value="Αρχική">'+
            '</div>'
          );
        }
      }).fail(function (data) {
        $("form").html(
          '<div id="right" class="alert alert-danger"><center>Δεν ήταν δυνατή η πρόσβαση στον διακομιστή.<br> Δοκιμάστε ξανά αργότερα.</center></div>'
        );
      });
  
      event.preventDefault();
      });
  });
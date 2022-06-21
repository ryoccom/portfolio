//mail ajax

import jQuery from 'jquery';

jQuery(function ($) {
  
    $("#mailform").submit(function (e) {
      e.preventDefault();
      $.ajax({
        url: "sendmail.php",
        type: "POST",
        dataType: "json",
        data: $(this).serialize(),
      })
        .done(function (data) {
          $("#dispmsg").empty();
          $("#dispmsg").html(data.message);
          
          if (data.status === 'Success') {
            $("#mailform").remove();
          }
        })
        .fail(function (data) {
          alert("メール送信に失敗しました");
        });
      return false;
    });
  });

//Form inputs
import * as helper from "./helper.js";

function uncoverPassword(checkElement, passwordElement) {
  if (checkElement.prop("checked")) {
    passwordElement.attr("type", "text");
    console.log("password input has been change to text.");

    setTimeout(() => {
      passwordElement.attr("type", "password");
      checkElement.prop("checked", false);
    }, 400);
  }
}

function jqlogin(field1, field2) {
  $.ajax({
    type: "POST",
    url: "src/process/login_process.php",
    data: {
      id: field1,
      password: field2,
    },

    success: function (response) {
      //console.log(response);
      let msg = "";

      // If the error would point to this line it would be the importing, otherwise.
      if (helper.falsyValues(response)) {
        location.href = "/src/pages/admin.php";
      } else {
        msg = "Sorry your username and password dont't match on our record.";

        $("#alert-notification").html(myCustomHTML(msg, "fail"), function () {
          console.log("Complete");
        });
        $("#alert-notification").fadeOut(2000, "linear", function () {
          console.log("complete");
        });
        $("#alert-notification").html(myCustomHTML(msg, "success"));
      }
    },
  });
}

export { uncoverPassword, jqlogin };

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
    type: "GET",
    url: "src/process/login_process.php",
    data: {
      id: field1,
      password: field2,
    },

    success: function (response) {
      const lastHTML = $("#alert-notification").html();
      // If the error would point to this line it would be the importing, otherwise.

      if (response === "Success") {
        location.href = "src/pages/admin.php";
      } else {
        let msg =
          "Sorry your username and password dont't match on our record.";

        $("#alert-notification").html(
          helper.myCustomHTML(msg, "fail"),
          function () {
            console.log("Complete");
          }
        );
      }
      console.log(response);
      alert(response);
    },
  });
}

export { uncoverPassword, jqlogin };

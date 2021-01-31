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

function ajaxLogin(field1, field2) {  
  $.ajax({
    type: "POST",
    url: "src/process/login_process.php",
    data: {
      field1: field1,
      password: field2,
    },

    success: function (response) {
      if (response === "Success") {
        window.location.href = "src/pages/admin.php";
      } else {
        let msg =
          "Sorry your username and password dont't match on our record.";

        $("#alert-notification").html(helper.myCustomHTML(msg, "fail"));
      }
    },
  });
}

function clearInput(inputElement) {
  return inputElement.val("");
}


export { uncoverPassword, ajaxLogin };

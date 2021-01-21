//Form inputs

function uncoverPassword(checkElement, passwordElement) {
  if (checkElement.prop("checked")) {
    passwordElement.attr("type", "text");
    console.log("password input has been change to text.");

    setTimeout(() => {
      passwordElement.attr("type", "password");
      checkElement.prop("checked", false);
    }, 900);
  }
}

function jqlogin(field1, field2) {
  $.ajax({
    type: "post",
    url: "src/process/login_function.php",
    data: {
      admin_number: field1,
      admin_password: field2,
    },
    success: function (response) {
      $("#alert-notification").html(response);
    },
  });
}

export { uncoverPassword, jqlogin };

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
    type: "POST",
    url: "src/process/login_process.php",
    data: {
      id: field1,
      password: field2,
    },
    success: function (response) {
      console.log(response);
    },
  });
}

export { uncoverPassword, jqlogin };

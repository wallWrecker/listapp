import * as login_fn from "./login.js";
import * as helper from "./helper.js";
// import * as stringFn from "./string_manipulation";
$(document).ready(function () {
  const admin_id_textbox = $("#username-admin-field");
  const admin_login_button = $("#admin-login-button");
  const admin_password_textbox = $("#password-admin-field");

  var cleave_admin_id = new Cleave(admin_id_textbox, {
    prefix: "+63",
    phone: true,
    phoneRegionCode: "PH",
  });

  $("#login-submit-button").click(function () {
    const id = helper.replaceIt(cleave_admin_id.getRawValue(), "+", "");
    const password = admin_password_textbox.val();

    login_fn.jqlogin(id, password);
  });
  // console.log();
});

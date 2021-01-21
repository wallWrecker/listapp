import * as login_fn from "./login.js";
import * as register_fn from "./register.js";
// import Cleave from "../../node_modules/cleave.js/dist/cleave-esm.min.js";

$(document).ready(function () {
  const registration_section = $("#register-form-section");

  register_fn.hide_registration_section(registration_section);

  $("#register-link").click(function () {
    register_fn.unhide_registration_section(registration_section);
  });

  const passwordTextbox = $("#password-admin-field");
  const seepasswordcheckbox = $("#seepasswordcheckbox");

  seepasswordcheckbox.click(function () {
    login_fn.uncoverPassword(seepasswordcheckbox, passwordTextbox);
  });
});

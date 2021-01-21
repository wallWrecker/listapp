// import { run } from "./mycleave.js";

function hide_registration_section(registration_section) {
  registration_section.hide();
}

function unhide_registration_section(registration_section) {
  registration_section.show();
}

function sanitize_registration_form(registration_form) {}

export { hide_registration_section, unhide_registration_section };

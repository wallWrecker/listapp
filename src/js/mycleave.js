import Cleave from "../../node_modules/cleave.js/dist/cleave-esm.min.js";

const applyCleaveInput = function (input, type) {
  if (input == null || type == null) return "I need complete parameter";
  switch (type) {
    case phone:
      new Cleave(input, {
        numerals: true,
      });
    // create cleave function for phone
    case email:
  }
};

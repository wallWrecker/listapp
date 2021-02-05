export function myCustomHTML(message, type = "neutral") {
  let types = {
    neutral: "alert alert-secondary",
    success: "alert alert-success",
    fail: "alert alert-danger",
    warning: "alert alert-warning",
  };

  return `<p class='${types[type]}'> ${message}</p>`;
}

export function veryfyIfFalsy(data) {
  // Collection of falsy
  const falsyValues = [
    0,
    -0,
    0n,
    -0n,
    "",
    "",
    ``,
    null,
    undefined,
    NaN,
    false,
    "Failed",
  ];

  const result = falsyValues.falsyValues.every((ele) => ele != findThis);
  return result;
}

export function replaceIt(str, r, w) {
<<<<<<< HEAD
  if (typeof str !== "string") return str.replace(r, w);
=======
  if (typeof str === "string") {
    return str.replace(r, w);
  }
  return undefined;
>>>>>>> 8adb40b5c19a31ce0f813da9dcc6eb2a83e8251f
}

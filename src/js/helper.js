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
  falsyValues.forEach((ele) => {
    if (data == ele) {
      return false;
    }
  });
  return data;
}
export function replaceIt(str, r, w) {
  if (typeof str != "string" || typeof r != "string" || typeof w != "string") {
    return "";
  }
  return str.replace(r, w);
}

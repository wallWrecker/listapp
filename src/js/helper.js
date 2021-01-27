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
  const falsyValues = [0, -0, 0n, -0n, "", "", ``, null, undefined, NaN];
  falsyValues.forEach((ele) => {
    if (data == ele || data == false) {
      return false;
    }
  });
  return data;
}

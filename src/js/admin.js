$(document).ready(function () {
  const container = $(".container-div");
  console.log(typeof container);
  $("#search-input").val();
  $("#button-submit").on("click", function () {
    if ($("#search-input").val() !== "") {
      alert("Search button clicked!");
      console.log($("#search-input").val());
    } else {
      alert("Please Enter Something.");
    }
    // $("");
  });
});

$(document).ready(function () {
  $.ajax({
    type: "GET",
    url: "../process/admin_function.php",
    data: {
      request_type: "fetch_latest_transactions",
    },
    dataType: "json",
    // dataType: "json",
    success: function (response) {
      console.log(response);
      response.forEach((item) => {
        $("#table-result").append(item);
      });
    },
  });
});

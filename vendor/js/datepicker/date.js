$("#StartDate, #EndDate").datepicker({ dateFormat: "dd-mm-yy" }).val();

$("#EndDate").change(function () {
  var startDate = document.getElementById("StartDate").value;
  var endDate = document.getElementById("EndDate").value;

  if ((Date.parse(endDate) <= Date.parse(startDate))) {
      alert("End date should be greater than Start date");
      document.getElementById("EndDate").value = "";
  }
});
//
$("#StartReleased, #EndReleased").datepicker({ dateFormat: "dd-mm-yy" }).val();

$("#EndReleased").change(function () {
  var startDate = document.getElementById("StartReleased").value;
  var endDate = document.getElementById("EndReleased").value;

  if ((Date.parse(endDate) <= Date.parse(startDate))) {
      alert("End date should be greater than Start date");
      document.getElementById("EndReleased").value = "";
  }
});

$("#StartVerified, #EndVerified").datepicker({ dateFormat: "dd-mm-yy" }).val();

$("#EndVerified").change(function () {
  var startDate = document.getElementById("StartVerified").value;
  var endDate = document.getElementById("EndVerified").value;

  if ((Date.parse(endDate) <= Date.parse(startDate))) {
      alert("End date should be greater than Start date");
      document.getElementById("EndVerified").value = "";
  }
});

//
$("#StartVerifiedAll, #EndVerifiedAll").datepicker({ dateFormat: "dd-mm-yy" }).val();

$("#EndVerified").change(function () {
  var startDate = document.getElementById("StartVerifiedAll").value;
  var endDate = document.getElementById("EndVerifiedAll").value;

  if ((Date.parse(endDate) <= Date.parse(startDate))) {
      alert("End date should be greater than Start date");
      document.getElementById("EndVerifiedAll").value = "";
  }
});

//
$("#StartPrinted, #EndPrinted").datepicker({ dateFormat: "dd-mm-yy" }).val();

$("#EndPrinted").change(function () {
  var startDate = document.getElementById("StartPrinted").value;
  var endDate = document.getElementById("EndPrinted").value;

  if ((Date.parse(endDate) <= Date.parse(startDate))) {
      alert("End date should be greater than Start date");
      document.getElementById("EndPrinted").value = "";
  }
});

// $(document).ready(function() {
//     $("#Add").on("click", function() {
//         $("#textboxDiv").append("");
//     });
//     $("#Remove").on("click", function() {
//         $("#textboxDiv").children().last().remove();
//     });
// });


$(document).ready(function(){

    var counter = 2;

    $("#add").click(function () {

	if(counter>3){
            alert("You are only permitted to cross enroll 3 subjects");
            return false;
	}

	var newTextBoxDiv = $(document.createElement('div'))
	     .attr("id", 'TextBoxDiv' + counter);

	newTextBoxDiv.after().html('<label>Subject #'+ counter + ' : </label>' +
	      '<input type="text" class="form-control" name="subjects[]" id="textbox' + counter + '" value="" placeholder="Enter Subject" required>');

	newTextBoxDiv.appendTo("#TextBoxesGroup");


    var newTextBoxDiv2 = $(document.createElement('div'))
         .attr("id", 'TextBoxDiv2' + counter);

    newTextBoxDiv2.after().html('<label>Number of Units: </label>' +
          '<input type="number" class="form-control" name="units[]" id="textbox' + counter + '" value="" placeholder="Enter Units" required>');

    newTextBoxDiv2.appendTo("#TextBoxesGroup2");


	counter++;
     });

     $("#remove").click(function () {
	if(counter==2){
          alert("No more textbox to remove");
          return false;
       }

	counter--;

        $("#TextBoxDiv" + counter).remove();
        $("#TextBoxDiv2" + counter).remove();

     });
  });

$(document).ready(function(){
  $("#newbutton").click(function(){	//ensures the new problem tab is opened by default - hides other classes(tabs)
    $(".new").show();
    $(".pending").hide();
    $(".solved").hide();
    $(".resentry").hide();
  });
  function clearDetails(){	//clears the details of the new problem form
    document.getElementById("callerid").value = "";
    document.getElementById("telenumber").value = "";
    document.getElementById("jobtitle").value = "";
    document.getElementById("dept").value = "";
  };
  $("#pendbutton").click(function(){	//shows the pending class and hides the rest when the pending problems tab is selected
    $(".pending").show();
    $(".new").hide();
    $(".solved").hide();
    $(".resentry").hide();
    $(this).toggleClass("selectedbutton");
  });
  $("#solvbutton").click(function(){	//shows the solved class and hides the rest when the solved problems tab is selected
    $(".solved").show();
    $(".new").hide();
    $(".pending").hide();
    $(".resentry").hide();
    $(this).toggleClass("selectedbutton");
  });
  $("#updatebutton").click(function(){	//opens up the resolution entry UI when the uodate button is clicked - hides the pending problems class
    $(".resentry").show();
    $(".pending").hide();
  });
  $("#updatebutton1").click(function(){	//opens up the resolution entry UI when the uodate button is clicked - hides the pending problems class
    $(".resentry").show();
    $(".pending").hide();
  });
  $("#backbutton").click(function(){	//reverts back from the resolution entry UI to the pending problems tab
    $(".pending").show();
    $(".resentry").hide();
  });
});

function solutionStore() {	//notifies user when the solution is submitted and clears the resolution entry form, and goes back to the pending problems tab
  alert("Resolution submitted.");
  document.getElementById("solutionbox").value = "";
  $(".resentry").hide();
  $(".pending").show();
  document.getElementById("pendbutton").focus();
};
$( document ).ready(function() {
  $(".pending").hide();
  $(".solved").hide();
  $(".popup").hide();
  $(".resentry").hide();
});
$(".pending").click(function(){	//when pending button is clicked, it is focused.
  document.getElementById("pendbutton").focus();
});
$(function(){
  $( "#Submit" ).click(function() { //When the submit button is pressed the field borders inherit the preset colors
    $("#callername").css({"border-bottom-color":"inherit",});
    $("#serialno").css({"border-bottom-color":"inherit",});
    $("#ProblemDescription").css({"border-bottom-color":"inherit",});
    if ($.trim($("#callername").val())== ""){ //trim all spaces if the field is still empty then do the below
      alert("Ticket cannot be submitted with empty fields. Please complete all fields.");
      $("#callername").css({"border-bottom-color":"red",}); // field bottom border is set to red and an alert to the screen is made
    }
    else if ($.trim($("#serialno").val()) == "") { //Trims the spaces between the text and if the val is empty then outputs an error
      alert("Ticket cannot be submitted with empty fields. Please complete all fields.");
      $("#serialno").css({"border-bottom-color":"red",}); //changes the border of the field to red
    }
    else if ($.trim($("#ProblemDescription").val()) == "") { //Trims the spaces between the text and if the val is empty then outputs an error
      alert("Ticket cannot be submitted with empty fields. Please complete all fields.");
      $("#ProblemDescription").css({"border-bottom-color":"red",}); //changes the border of the field to red
    }
    else {
      alert("Ticket has been submitted. "); //Once the ticket has been submitted the value in the fields is reset/ made empty
  $("#callername").val("");
  $("#serialno").val("");
  $("#callerid").val("");
  $("#jobtitle").val("");
  $("#dept").val("");
  $("#telenumber").val("");
  $("#ProblemDescription").val("");
    }
  });
  $( "#Cancel" ).click(function() {    //cancels the ticket
    alert( "You sure you want to cancel?");
  });
});

function populateDetails(){	//Populates the callerid, telenumber, jobtitle and dept inputs based on the employee calling
var name = document.getElementById("callername").value;
if(name == "Andy"){
  document.getElementById("callerid").value = "324222";
  document.getElementById("telenumber").value = "07463528771";
  document.getElementById("jobtitle").value = "Manager";
  document.getElementById("dept").value = "HR";
};
};

function sortTable() {
  var input = document.getElementById("searchbox");
  var filter = input.value.toUpperCase();
  var table = document.getElementById("equipment");
  var tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
};

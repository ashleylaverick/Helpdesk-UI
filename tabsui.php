<!DOCTYPE html>
<html>
  <head>
    <title>Helpdesk UI</title>
    <script src="https://code.jquery.com/jquery-1.12.4.js">
    </script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js">
    </script>
    <link rel="stylesheet" type="text/css" href="jquery-ui.css">
    <script>
      $(function() {
        $("#tabs").tabs();
      });
    </script>
    <script src="myscripts.js">
    </script>
  </head>
  <body>
    <p id="logonnoti">You are now logged in as: <b>$username</b></p>	<!--Displays the user name and ID in corner. Based upon who is logged in-->
    <form action="login.html">
      <input type="submit" class="logoutbut" value="Logout" style="z-index:4;" onclick="alert('You have now signed out.')"/>	<!--logout notification-->
    </form>
    <h1>Helpdesk UI</h1>
    <div id="window">
      <div id="tabs">
        <ul class="tabs">
          <li><a href="#tabs-1" class="tabbutton">Create New Ticket</a></li>
          <li><a href="#tabs-2">View Pending Problems</a></li>
          <li><a href="#tabs-3">View Solved Problems</a></li>
        </ul>
        <div id="tabs-1">
          <h2>New Ticket Log</h2>
          <form action="" method="post" id="CreateTicket" novalidate="NoValidate">
            <div id="leftpane">
              <label for="callername">Caller Name: *</label>	<!--label for name input -->
              <label for="operatorid" class="rightofpane">Operator ID</label>	<!--label for operator ID input -->
              <br>
              <input type="text" name="operatorid" value="" placeholder="4322" disabled="disabled" id="operatorid" class="rightofpane"> <!-- place CSS in external stylesheet, operator ID - auto filled-->
              <input type="text" name="callername" value="" id="callername" placeholder="Enter Caller Name" onchange="populateDetails()"> <!--caller name input, runs populateDetails function when changed-->
              <br>
              <br>
              <label for="serialno">Equipment Serial Number: *</label>	<!--label for serial no input -->
              <label for="problemid" class="rightofpane">Problem ID</label>	<!-- label for problem ID input -->
              <br>
              <input type="text" name="serialno" value="" id="serialno" placeholder="Enter Serial No.">	<!-- serial no input -->
              <input type="text" name="problemid" value="1381936" disabled="disabled" id="problemid" class="rightofpane"> <!--problem id input, automatically generated -->
              <br>
              <br>
              <label for="datetime">Date of Query:*</label>	<!--label for datetime input -->
              <label class="rightofpane">Call ID</label>	<!-- label for call ID field -->
              <br>
              <input type="date" id="datetime">	<!-- date picker, date input -->
              <input type="text" disabled="disabled" placeholder="43920" id="callid" class="rightofpane">	<!--call id field, automatically generated -->
              <br>
              <br>
              <label for="problemtype">Problem Type:</label>	<!-- label for problem type input -->
              <br>
              <input type="text" name="problemtype" list="ProblemTypeList" placeholder="Enter or select problem type" style="width: 250px">	<!--problem type input, list - autocompletes -->
              <datalist id="ProblemTypeList">
                <option value="Printing">
                <option value="Server">
                <option value="Login">
                <option value="Telephone">
              </datalist>
              <br>
              <br>
              <label for="JobSpecialist">Job Specialist:</label>	<!--label for job specialist input -->
              <br>
              <select id="JobSpecialist" style="font-size: 18px; position: relative; top: 3px;"> <!--select input for associated job specialist -->
                <option value="John Wall"> Dan Totennnan- 1 </option>
                <option value="John Wall"> Elon Musk - 3 </option>
                <option value="Kevin Durant">Rob Garder - 4 </option>
                <option value="John Spec">George Snow - 7 </option>
              </select>
              <br>
              <br>
              <br>
              <br>
            </div>
            <div id="rightpane">
              <label>Caller's ID:</label>
              <label class="rightofpane">Job Title:</label> <!-- label for job style input -->
              <br>
              <input type="text" id="callerid" disabled="disabled" placeholder="Caller's ID"> <!-- caller ID input -->
              <input type="text" id="jobtitle" disabled="disabled" placeholder="Job Title" class="rightofpane">	<!-- job title input, automatically filled -->
              <br>
              <br>
              <label>Department:</label>
              <label class="rightofpane">Telephone Number:</label> <!-- label for tele number input -->
              <br>
              <input type="text" id="dept" disabled="disabled" placeholder="Department">	<!-- department input, autmatically filled -->
              <input type="text" id="telenumber" disabled="disabled" placeholder="Telephone Number" class="rightofpane"> <!-- telephone number input -->
              <br>
              <br>
              <div class="label">Description of Problem:</div>
              <br>
              <textarea id="problemDescription" placeholder="Enter a Description of the problem...." rows="8"></textarea>	<!--problem description input -->
              <br>
              <br>
              <button type="button" id="Cancel">Cancel</button>	<!-- cancels form, clear fields -->
              <button type="button" id="Submit">Submit</button>	<!-- submits form -->
            </div>
          </form>
        </div>
        <div id="tabs-2" class="tabs-2">
          <h2>Pending Problems</h2>
  				<table class="table">
  					<tr>
  						<th>Problem ID</th>
  						<th>Problem Description</th>
  						<th>Problem Type</th>
  						<th>Specialist ID</th>
  						<th>Operator ID</th>
  						<th>Caller ID</th>
  						<th class="buttoncell"></th> <!-- inline CSS to get rid of borders above cell which updatebutton is in -->
  					</tr>
  				</table>
        </div>
        <div id="tabs-3">
          <h2>Solved Problems</h2>
  				<table>
  					<tr>
  						<th>Problem ID</th>
  						<th>Problem Description</th>
  						<th>Problem Type</th>
  						<th>Specialist ID</th>
  						<th>Operator ID</th>
  						<th>Resolution ID</th>
  						<th>Resolution Description</th>
  					</tr>
  				</table>
        </div>
      </div>
    </div>
  </body>
</html>

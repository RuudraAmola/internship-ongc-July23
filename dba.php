<!DOCTYPE html>
<html>
<head>
    <title>Form Display</title>
    <link rel="stylesheet" href="display.css">
</head>
<body>
<img src="ONGC.png" width="120" height="110" align="left">
<form action="login.html">
  <div class="logout">
        <button class="button1" type="submit">Log Out</button>
  </div>
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ongc_form1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `request_ongc` ORDER BY id DESC LIMIT 1;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  
  echo "<h1> REQUEST FOR CREATION OF USER ACCOUNT IN EPINET </h1>";
  echo "<h4> (Latest Request Details) </h4>";
  echo "<br>";
  echo "<hr>";
  echo "<br>";
  echo "<ul>";
  while ($row = mysqli_fetch_assoc($result)) {
    
    echo "<li>";
    echo "<strong>Recipient :</strong> " . $row['recipient'] . "<br><br>";
    echo "</li>";
    echo "<li>";
    echo "<strong>Modules : </strong> " . $row['module'] . "<br>";
    echo "</li>";
    echo "<li>";
    echo "<strong>Purpose : </strong> " . $row['purpose'] . "<br>";
    echo "</li>";
    echo "<li>";
    echo "<strong>CPF ID : </strong> " . $row['cpfNo'] . "<br>";
    echo "</li>";
    echo "<li>";
    echo "<strong>Name : </strong> " . $row['name'] . "<br>";
    echo "</li>";
    echo "<li>";
    echo "<strong>Designation : </strong> " . $row['desig'] . "<br>";
    echo "</li>";
    echo "<li>";
    echo "<strong>Department : </strong> " . $row['dept'] . "<br>";
    echo "</li>";
    echo "<li>";
    echo "<strong>IP Address : </strong> " . $row['ip'] . "<br>";
    echo "</li>";
    echo "<li>";
    echo "<strong>E-Signature : </strong> " . $row['sign'] . "<br>";
    echo "</li>";
    echo "<li>";
    echo "<strong>Date : </strong> " . $row['date'] . "<br>";
    echo "</li>";
    echo "<li>";
    echo "<strong>Location : </strong> " . $row['location'] . "<br>";
    echo "</li>";
    echo "<li>";
    echo "<strong>Phone number : </strong> " . $row['phnNo'] . "<br>";
    echo "</li>";
    echo "<li>";
    echo "<strong>Last Posting : </strong> " . $row['lastPosting'] . "<br>";
    echo "</li>";
    echo "<li>";
    echo "<strong>Recommendation : </strong> " . $row['recommend'] . "<br>";
    echo "</li>";
    
    echo "<br><br>";

    echo "<li>";
    echo "<strong>Divisional Head/Controlling Officer Approval Status : </strong> " . $row['Status_CO'] . "<br>";
    echo "</li>";
    echo "<li>";
    echo "<strong>RDM/SDM/Head EPINET Approval Status : </strong> " . $row['Status_HOD'] . "<br>";
    echo "</li>";
    echo "<li>";
    echo "<strong>Database Administrator Approval Status : </strong> " . $row['Status_DBA'] . "<br>";
    echo "</li>";
}
echo "</ul>";

} else {
  echo "NO LATEST SUBMISSION TO DISPLAY!";
}

$conn->close();
?>
<form action="status_dba.php" method="post" class="center" id="statusForm">
<label id="val"><strong>Validate as Database Administrator : </strong></label>
            <div class="radio-options">
                    <input type="radio" name="status" value="APPROVED" id="radio1">
                    <label for="radio1">Approve</label>
                    
                    <input type="radio" name="status" value="REJECTED" id="radio2">
                    <label for="radio2">Reject</label>

                    <input type="radio" name="status" value="Under Review" id="radio3">
                    <label for="radio3">Review</label>
            </div>
            <div class="form-buttons">
              <button class="button2" type="reset">Reset</button>
              <button class="button2" type="submit">Submit</button>
            </div>
</form>

</body>
<script>
    document.getElementById("statusForm").addEventListener("submit", function(event) {
        const radioButtons = document.getElementsByName("status");
        let isChecked = false;

        for (let i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                isChecked = true;
                break;
            }
        }
        if (!isChecked) {
            alert("Please select a status for your validation!");
            event.preventDefault();
        }
    });
</script>
</html>
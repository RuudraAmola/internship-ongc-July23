<!DOCTYPE html>
<html>
<head>
    <title>DBA status page</title>
    <link rel="stylesheet" href="status.css">
</head>
<body>

<h2>
  <marquee behavior="alternate" SCROLLAMOUNT=8>
    Your Response has been recorded. It is safe to log out now.
  </marquee>
</h2>
<div class="form">
  <form action="login.html">
          <button type="submit">Log Out</button>
  </form>
</div>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ongc_form1";

  $status_dba = $_POST['status'];

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql2 = "SELECT * FROM `request_ongc` ORDER BY id DESC LIMIT 1";
  $result2 = $conn->query($sql2);
  while ($row = mysqli_fetch_assoc($result2)){
      $id = $row['id'];
  }

  $sql = "UPDATE request_ongc SET Status_DBA='$status_dba' WHERE id='$id'";
  $result = $conn->query($sql);

  $conn->close();
  ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
    <style>
        body {
            background-color: lightseagreen;
        }
        marquee {
            direction:"right";
            border:BLACK 1px SOLID;
        }
        button {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: green;
        }
    </style>
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

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $id="";
        $recipient = $_POST['recipient'];
        $purpose = $_POST['purpose'];
        $cpfNo = $_POST['cpf'];
        $name = $_POST['name'];
        $desig = $_POST['designation'];
        $dept = $_POST['department'];
        $ip = $_POST['ip-address'];
        $sign = $_POST['signature'];
        $date = $_POST['date'];
        $location = $_POST['location'];
        $phnNo = $_POST['mobile'];
        $lastPosting = $_POST['last-posting-location'];
        $recommend = $_POST['recommendation'];
        $module = $_POST['modules'];
        $data = implode(', ', $module);
        $Status_CO="";
        $Status_HOD="";
        $Status_DBA="";

        $query_in = "INSERT INTO request_ongc VALUES (
            '$id','$recipient','$data','$purpose','$cpfNo','$name','$desig','$dept',
            '$ip','$sign','$date','$location','$phnNo','$lastPosting','$recommend',
            'Pending','Pending','Pending')";

        if(mysqli_query($conn, $query_in)){
            echo "<script> alert('Data stored successfully.') </script>";
        } else{
            echo "<script> alert('Data upload unsuccessful.') </script>";
        }

        mysqli_close($conn);
    ?>
</body>
</html>
<!doctype html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?= isset($PageTitle) ? $PageTitle : "Raumbuchungssystem"?></title>
    <link rel="stylesheet" href="css/kiosk.css" type="text/css">
  </head>

    <!-- Additional tags here -->
    <!-- <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?> -->
    <?php

  // connection to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mrbs";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

// check if the room is occupied
if($room == 1){
    $sql = "SELECT * FROM `mrbs_entry` WHERE UNIX_TIMESTAMP(current_timestamp()) BETWEEN START_TIME AND END_TIME AND room_id = 1";


    $result = $conn->query($sql);



    if ($result->num_rows > 0) {
        // output status :offline -- Room is occupied
        while($row = $result->fetch_assoc()) {
          echo '<div class="header_offline">
        <h1 class="header_text_offline">' .'BESETZT &nbsp;&nbsp; OCCUPIED'. '</h1></div>';

        }
        // output status :online -- Room is free

        } else {
        echo '<div class="header_online">
        <h1 class="header_text_online">' .'FREI  &nbsp;&nbsp;  FREE'. '</h1></div>';

        }
    $conn->close();
}

// check if the room is occupied

if($room == 2){
    $sql = "SELECT * FROM `mrbs_entry` WHERE UNIX_TIMESTAMP(current_timestamp()) BETWEEN START_TIME AND END_TIME AND room_id = 2";


    $result = $conn->query($sql);



    if ($result->num_rows > 0) {
      // output status :offline -- Room is occupied
        while($row = $result->fetch_assoc()) {
          // echo "room_id: " . $row["room_id"]. " - Start-End: " . $row["start_time"]. " " . $row["end_time"]. "<br>";
          echo '<div class="header_offline">
    <h1 class="header_text_offline">' .'BESETZT ~ OCCUPIED'. '</h1></div>';

        }
        // output status :online -- Room is free

    } else {
      echo '<div class="header_online">
    <h1 class="header_text_offline">' .'FREI - FREE'. '</h1></div>';

    }
    $conn->close();


}

if($room == 3){
    $sql = "SELECT * FROM `mrbs_entry` WHERE UNIX_TIMESTAMP(current_timestamp()) BETWEEN START_TIME AND END_TIME AND room_id = 3";


    $result = $conn->query($sql);



    if ($result->num_rows > 0) {
      // output status :offline -- Room is occupied

        while($row = $result->fetch_assoc()) {
          // echo "room_id: " . $row["room_id"]. " - Start-End: " . $row["start_time"]. " " . $row["end_time"]. "<br>";
          echo '<div class="header_offline">
    <h1 class="header_text_offline">' .'BESETZT ~ OCCUPIED'. '</h1></div>';

        }
        // output status :online -- Room is free
    } else {
      echo '<div class="header_online">
<h1 class="header_text_online">' .'FREI - FREE'. '</h1></div>';

    }
    $conn->close();

}

if($room == 4){
    $sql = "SELECT * FROM `mrbs_entry` WHERE UNIX_TIMESTAMP(current_timestamp()) BETWEEN START_TIME AND END_TIME AND room_id = 4";


    $result = $conn->query($sql);



    if ($result->num_rows > 0) {
      // output status :offline -- Room is occupied
        while($row = $result->fetch_assoc()) {
          // echo "room_id: " . $row["room_id"]. " - Start-End: " . $row["start_time"]. " " . $row["end_time"]. "<br>";
          echo '<div class="header_offline">
    <h1 class="header_text_offline">' .'BESETZT ~ OCCUPIED'. '</h1></div>';

        }
        // output status :online -- Room is free

    } else {
      echo '<div class="header_online">
<h1 class="header_text_online">' .'FREI - FREE'. '</h1></div>';

    }
    $conn->close();

}

include_once("footer.php");

    ?>
  </head>
  <body>

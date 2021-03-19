<?php 
  $title= "Results' Table";
  require_once "Header.php";
?>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Mercy's School Project</h1>
  <p>Electrical and Elecronic Engineering</p> 
  </div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark"></nav>
<?php
//include("databaseconnect.php"); //We include the database_connect.php which has the data for the connection to the database

$user='root';
$password='';
$database='the_network';
$con=mysqli_connect("localhost",$user,$password,$database) or die("unable to connect");// server, user, password, database
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();}// Check the connection


$query = "SELECT `IMSI`,`MSISDN`, `RSSI`,`Access Point`  FROM `vlr_002` WHERE `Location Area ID` =101 AND `Access Point`=25;";//Access point of your choice
$query.="SELECT `IMSI`,`MSISDN`, `RSSI`, `Access Point`  FROM `vlr_001` WHERE `Location Area ID` =101 AND `Access Point`=25"; 


echo '
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
    table-layout: fixed;
  }
  
  td {
    border-: collapse #dddddd;
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  th {
    border-: collapse #dddddd;
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  
  tr:nth-child(even) {
    border-: collapse #dddddd;
  }
  </style>
<table>
<tr> 
    <td> <font face="Arial">IMSI</font> </td> 
    <td> <font face="Arial">MSISDN</font> </td> 
    <td> <font face="Arial">RSSI</font> </td> 
    <td> <font face="Arial">Access Point</font> </td> 
</tr>
</table>';
if (mysqli_multi_query($con, $query)) {
  do {
      /* store first result set */
      if ($result = mysqli_store_result($con)) {
          while ($row = mysqli_fetch_row($result)) {
            $field1name = $row[0];
            $field2name = $row[1]; 
            $field3name = $row[2]; 
            $field4name = $row[3];

            echo '<table><tr> 
            <td>'.$field1name.'</td> 
            <td>'.$field2name.'</td> 
            <td>'.$field3name.'</td>
            <td>'.$field4name.'</td> 
        </tr></table>';
}
          mysqli_free_result($result);
      }
      /* print divider */
      if (mysqli_more_results($con)) {
          printf("-----------------\n");
      }
  } while (mysqli_next_result($con));
  mysqli_close($con);
}

// function recieve_number(){
//     if(isset($_GET['sender'])){
//         $sender = $_GET['sender']; 
//     }else{
//         $sender = 'senders phone number not set in GET Method';
//     }
//     if(isset($_GET['content'])){
//         $message_content = $_GET['content']; 
//     }else{
//         $message_content = "<br>Message content not set in GET Method";
//     }
//     echo $sender;
//     echo $message_content;
// }

try {
$query2="SELECT `Access Point`  FROM `vlr_001` WHERE `MSISDN`=254985683;";
$query2.="SELECT `Access Point`  FROM `vlr_002` WHERE `MSISDN`=254985683;";
  if (mysqli_multi_query($con, $query2)) {

    while (mysqli_fetch_assoc($result))

  //Set the Fetch mode
$result->setFetchMode(PDO::FETCH_ASSOC);

foreach($result as $row){
  foreach($result as $row){
    print "$name: $value ";
  } // end field loop
  print "";
} // end record loop
}
} 
catch(PDOException $e) {
  echo 'ERROR: ' . $e->getMessage();
 } // end try
 
?>

<form action="/Tables.php" method="post"style="margin-bottom:0">
<p>Who would you like to recieve this data:.</p>
  <label for="phone_number">The phone number: </label><br>
  <input type="text" id="Phone_number" name="phone_number" value="+2547XXXXXXX"><br>
  <input type="submit" value="Submit">
</form> 
 
<?php  $Reciever = $_POST["phone_number"];
echo $Reciever;
?>
<?php

// function africastalkingapi(){
//     require 'vendor/autoload.php';
//     use AfricasTalking\SDK\AfricasTalking;

//     // Set your app credentials
//     $username   = "mjklove24";
//     $apiKey     = "c3fe6d322ce321f0e27b5deba00a19169d6efe657d9256966e9a78a7beb8252f";

//     // Initialize the SDK
//     $AT = new AfricasTalking($username, $apiKey);

//     // Get the SMS service
//     $sms = $AT->sms();

//     // Set the numbers you want to send to in international format
//     $recipients = $Reciever;

//     // Set your message
//     $message    = "I'm a lumberjack and its ok, I sleep all night and I work all day";

//     // Set your shortCode or senderId
//     $from       = "myShortCode or mySenderId";

//     try {
//         // Thats it, hit send and we'll take care of the rest
//         $result = $sms->send([
//             'to'      => $recipients,
//             'message' => $message,
//             'from'    => $from
//         ]);

//         print_r($result);
//     } catch (Exception $e) {
//         echo "Error: ".$e->getMessage();
//     }
// }

?>
<?php require_once "Footer.php";?>
<!--    start of php code-->
    
    <?php

//$servername = "localhost";
//$username = "root";
//$password = "empty";
//$dbname = "feereport";

// create connection
$conn =  mysqli_connect("localhost", "root", "", "feereport");

//  check connection
if($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Taking all the values from the form data (input)
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$address = $_REQUEST['address'];
$contact = $_REQUEST['contact'];

// performing insert query execution
// here our table name is user
$sql = "INSERT INTO user VALUES ('$name' , '$email' , '$password' , '$address' , '$contact')";
    
if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully." . " please browse your localhost php my admin" . " to view the updated data</h3>";
    
    echo n12br("\n$name\n $email\n " . "$password\n $address\n $contact");
}  else{
    echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
}

// close connection
mysqli_close($conn);


?>



    
<!--end of php code    -->
    
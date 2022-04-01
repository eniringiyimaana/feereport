<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add accountant</title>
    <link rel="stylesheet" href="css/accountant.css">
</head>
<body>


    
<?php
 $conn = mysqli_connect('localhost','root', '', 'feereport');
 if (! $conn ) {  
 die('could not connect : ' . mysqli_connect_error () ) ;
 }

 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $address = $_POST['address'];
 $contact = $_POST['tel'];
 

 $sql = " INSERT INTO addaccountant ( ‘ name ‘ , ‘ email ‘ , ‘
password ‘ , ‘ address ‘ , ‘ contact ‘) VALUES ( ’ $name ’,’ $email ’,’
$password ’,’ $address ’,’ $contact ’)";


 mysqli_close($conn);   
    
 ?>   




    
    

    
    
   <div class="container">
        
        <div class="header">
            
            <div class="menu">
                
                <ul>
                    <li><h1>FeeReport</h1></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="addaccountant.php">Add Accountant</a></li>
                    <li><a href="viewaccountant.php">View Accountant</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        
       <div class="addaccountant">
          <h2>Add Accountant Form</h2>
            
                <form action="" method="post">
               <table>
                   <tr>
                       <td>Name:</td>
                       <td><input type="text" id="name1" name="name" required></td>
                   </tr>
                   <tr>
                       <td>Email:</td>
                       <td><input type="text" id="email1" name="email" required></td>
                   </tr>
                   <tr>
                       <td>Password:</td>
                       <td><input type="password" id="password1" name="password"  required></td>
                   </tr>
                   <tr>
                       <td>Address:</td>
                       <td><input type="text" id="address1" name="address"  required ></td>
                   </tr>
                   <tr>
                       <td>Contact:</td>
                       <td><input type="tel" id="tel1" name="tel" required></td>
                   </tr>
                   <tr>
                       <td><button onclick="alert('Accountant is added Successfully')" type="submit" value="submit">Add Accountant</button></td>
                   </tr>
               </table>
           </form>
       </div>
        
        
                       
        
        <div class="footer">
            <p>Copyright &copy 2022,all rights reserved by <a href="index.php">FeeReport.com</a> </p>
        </div>
        

    
    <script src=""></script>
    </div>
    </body>
</html>
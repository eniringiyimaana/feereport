<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    
   
    
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
        
       <div class="mainsection">
           
            <b>
    <?php
print "Welcome back, ";
    
// Print what was submitted in the form parameter called 'user'
    
print $_POST['email'];
print "!";
?>
        </b>

           
          <h1>Admin Panel</h1>
            
                <ul>
                    
                    <li><a href="addaccountant.php">Add Accountant</a></li>
                    <li><a href="viewaccountant.php">View Accountant</a></li>
                    
                </ul>
              
       </div>
        
        
        
        <div class="footer">
            <p>Copyright &copy 2022,all rights reserved by <a href="index.php">FeeReport.com</a> </p>
        </div>
        
    </div>
    
    
    <script src=""></script>
</body>
</html>

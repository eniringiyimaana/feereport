<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accountant panel</title>
    <link rel="stylesheet" href="css/newaccountant.css">
</head>

<body>
    
    

    
    <div class="container">
        
        <div class="header">
            
            <div class="menu">
                
                <ul>
                    <li><h1>FeeReport</h1></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="addastudent.php">Add Astudent</a></li>
                    <li><a href="viewastudent.php">View Astudent</a></li>
                    <li><a href="duefees.php">Due Fees</a></li>
                    <li><a href="search.php">Search Astudent</a></li>
                    <li><a href="logoutaccountant.php">Logout</a></li>
                </ul>
            </div>
        </div>
        
       <div class="mainsection">
           
           <b>
             <?php
print "welcome back, ";
    
// Print what was submitted in the form parameter called 'user'
    
print $_POST['email'];
print "!";
?>
     </b>      
           
          <h1>Accountant Panel</h1>
           
         
            
                <ul>
                    
                    <li><a href="addastudent.php">Add Astudent</a></li>
                    <li><a href="viewastudent.php">View Astudent</a></li>
                    <li><a href="duefees.php">Due Fees</a></li>
                    <li><a href="search.php">Search Astudent</a></li>
                    <li><a href="deleteastudent.php">Delete Astudent</a></li>
                    <li><a href="Editastudent.php">Edit Astudent</a></li>
                    
                    
                </ul>
              
       </div>
        
        
        
        <div class="footer">
            <p>Copyright &copy 2022,all rights reserved by <a href="index.php">FeeReport.com</a> </p>
        </div>
        
    </div>
    
    
    <script src=""></script>
</body>
</html>

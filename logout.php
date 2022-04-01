<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="css/accountant.css">
</head>

<body>

<div class="container">
        
        <div class="header">
            
            <div class="menu">
                
                <ul>
                    <li><h1>FeeReport</h1></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        
       <div class="logout">
          <h2>Admin Logout Success</h2>
            
            <form action="admin.php" method="post">
               <table>
                   <tr>
                       <td>Email:</td>
                       <td><input type="text" id="email" name="email" placeholder="Enter your email" required></td>
                   </tr>
                   <tr>
                       <td>Password:</td>
                       <td><input type="password" id="password" name="password" placeholder="Enter your password" required></td>
                   </tr>
                   <tr>
                       <td><button onclick="alert('Login Successfull')" type="submit">Login</button></td>
                   </tr>
               </table>
           </form>
          </div>       
           
           
           
       </div>
        
        
        
        <div class="footer">
            <p>Copyright &copy 2022,all rights reserved by <a href="index.php">FeeReport.com</a> </p>
        </div>
        
     
    

    <script src=""></script>
</body>
</html>

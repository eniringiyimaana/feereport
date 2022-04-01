<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeeReport</title>
    <link rel="stylesheet" href="css/report.css">
</head>

<body>
    
    <div class="container">
        
        <div class="header">
            <h1>FeeReport</h1>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
            </div>
        </div>
        
       <div class="main">
          <div class="section1">   
           <h2>Admin Login Form</h2>  
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
           
          <div class="section2">
           <h2>Accountant Login Form</h2>
           <form action="accountant.php" method="post">
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
            <p>Copyright &copy 2022,all rights reserved by <a href="index.php">FeeReport.com</a></p>
        </div>
        
    
    
    <script>
        function tellTime() {
            var now = new Date();
            var theHr = now.getHours();
            var theMin = now.getMinutes();
            alert("current time: "+ theHr + ":" + theMin);
        }
        
    
        
    </script>
    </div>
    </body>
</html>

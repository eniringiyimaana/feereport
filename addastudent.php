<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Astudent</title>
    <link rel="stylesheet" href="css/addastudent.css">
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
        
       <div class="addastudent">
          <h2>Add Astudent Form</h2>
            
                <form action="" method="post">
               <table>
                   <tr>
                       <td>Name:</td>
                       <td><input type="text" id="name" name="name" required></td>
                   </tr>
                   <tr>
                       <td>Email:</td>
                       <td><input type="text" id="email" name="email" required></td>
                   </tr>
                   <tr>
                       <td>Sex:</td>
                       <td>
                           <input type="radio" id="gender" name="male"  required>Male
                           <input type="radio" id="gender" name="female"  required>Female
                           <input type="radio" id="gender" name="others"  required>Others
                       </td>
                   </tr>
                   <tr>
                       <td>Course:</td>
                       <td>
                           <select id="course">
                              <option value="">Please select</option>
                              <option value="html">HTML</option>
                              <option value="css">CSS</option>
                              <option value="javascript">JavaScript</option>
                              <option value="java">Java</option>
                              <option value="php">PHP</option>
                              <option value="python">Python</option>
                              <option value="xml">XML</option>   
                           </select>
                       </td>
                   </tr>
                   <tr>
                       <td>Fees:</td>
                       <td><input type="number" id="number" name="number" required></td>
                   </tr>
                   <tr>
                       <td>Paid:</td>
                       <td><input type="number" id="number" name="number" required></td>
                   </tr>
                   <tr>
                       <td>Due:</td>
                       <td><input type="number" id="number" name="number" required></td>
                   </tr>
                   <tr>
                       <td>Address:</td>
                       <td><input type="text" id="address" name="address"  required ></td>
                   </tr>
                   <tr>
                       <td>Contact:</td>
                       <td><input type="tel" id="tel" name="tel" required></td>
                   </tr>
                   <tr>
                       <td><button onclick="alert('Astudent is added Successfully')" type="submit" value="submit">Save Astudent</button></td>
                   </tr>
               </table>
           </form>
       </div>
        
        
        
        <div class="footer">
            <p>Copyright &copy 2022,all rights reserved by <a href="index.php">FeeReport.com</a> </p>
        </div>
        
    </div> 
    
    <script src=""></script>
</body>
</html>

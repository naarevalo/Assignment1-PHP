<?php
    include_once ('database.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>EmployeeHub</title>
    <meta name="author" content="Natalia Arevalo" />
    <meta name="description" content="A concise and accurate summary of the document content is to appear here">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/3058002332.js" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <nav class="navbar">
            <div class="menu-bar">
                <i class="fas fa-bars" id="menu-bar"></i>
            </div>
            <img src="images/in.png" class="logo" alt="Logoinge">
            <ul class="sidebar" id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="view.php">Employee Information</a></li>
               
            </ul>
        </nav>
    </header>

    <div class="container">
	<div class="row">
		<table class="table">
      <?php
        
        $query = 'SELECT * FROM user';
        $result = $database->getData($query);
      ?>
    
      <tr>
        <th>Name</th>
        <th>Employee position</th>
        <th>Hire Date</th>
        <th>Hours worked:</th>
        <th>Phone number:</th>
     </tr>
   
      <?php
      
          foreach($result as $key => $res){
          echo "<tr>";
          echo "<td style='border-right: 1px solid #ccc;'>".$res['name']."</td>";
          echo "<td style='border-right: 1px solid #ccc;'>".$res['employee_position']."</td>";
          echo "<td style='border-right: 1px solid #ccc;'>".$res['hire_date']."</td>";
          echo "<td style='border-right: 1px solid #ccc;'>".$res['hours_worked']."</td>";
          echo "<td>".$res['phone']."</td>";
          echo "</tr>";
      }
  ?>
  

		</table>
	</div>
</div>

<footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <div class="footer-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i>Facebook</a>
                    <a href="#"><i class="fa-brands fa-instagram"></i>Instagram</a>
                    <a href="#"><i class="fa-brands fa-twitter"></i>Twitter</a>
                </div>
                <div class="footer-text">
                    <p><small>© AmbiSolutions. All Rights Reserved</small></p>
                </div>
            </div>
        </div>
   

    </footer>

</body>

</html>

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

    <main>

<?php
   include_once ('validate.php');
   include_once ('database.php');
   
   $valid = new validate();
   
   if(!empty($_POST['Submit'])){
     
     $name = $_POST['name'];
     $employee_position = $_POST['employee_position'];
     $hire_date = $_POST['hire_date'];
     $hours_worked = $_POST['hours_worked'];
     $phone = $_POST['phone'];
  
     $msg = $valid->checkEmpty($_POST, array('name', 'employee_position', 'hire_date', 'hours_worked', 'phone'));
     $checkEmployeePosition = $valid->validEmployeePosition($_POST['employee_position']);
     $checkHireDate = $valid->validHireDate($_POST['hire_date']);
     $checkHoursWorked = $valid->validHoursworked($_POST['hours_worked']);
     $checkPhone = $valid->validPhone($_POST['phone']);

     
     if($msg != null){
       echo $msg;
       
       echo "<a href='javascript:self.history.back();'>Go Back</a>";
    } elseif (!$checkEmployeePosition) {
        echo '<p>Please provide a valid employee_position.</p>';
    } elseif (!$checkHireDate) {
        echo '<p>Please provide a valid hire_date.</p>';
    } elseif (!$checkHoursWorked) {
        echo '<p>Please provide a valid hours_worked.</p>';
    } elseif (!$checkPhone) {
        echo '<p>Please provide a valid phone.</p>';
    }
     else{
      
       $result = $database->execute("INSERT INTO user(name,employee_position,hire_date,hours_worked,phone) VALUES('$name','$employee_position','$hire_date','$hours_worked','$phone')");
     
       if($result){
         echo "<p>Data added successfully.</p>";
         echo "<a href='view.php'>View Result</a>";
       }
            
     }
   }
   ?>
    </main>
  </body>
</html>
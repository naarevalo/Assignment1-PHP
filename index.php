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
        <div class="form"> 
            <form action="add.php" method = "post">
                <table>
                    <h1>Worker Data</h1>
                    <br>
                    <h2>Enter the following worker information:</h2>
                    <br>

                  
                    <tr>
                        <td>Name of the employee:</td>
                        <td><input type="text" placeholder="" name="name" required></td>
                    </tr>
                    
                   
                    <tr>
                        <td>Employee Position:</td>
                        <td><input type="text" placeholder="" name="employee_position" required></td>
                    </tr>
                   
                    <tr>
                        <td>Hire Date:</td>
                        <td><input type="date" placeholder="" name="hire_date" required></td>
                    </tr>
                    <tr>
                        <td>Hours worked:</td>
                        <td><input type="number" placeholder="" name="hours_worked" min="1" required></td>
                    </tr>

                    <tr>
                      <td>Phone number:</td>
                      <td><input type="phone" placeholder="" name="phone" required></td>
                  </tr>

                    <tr>
                        <td>
                         
                            <input class="btn btn-primary order" type="submit" name="Submit" value="Add">
                         <input class="btn btn-dark reset" type="reset" name="reset" value="Clear">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </main>


    
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

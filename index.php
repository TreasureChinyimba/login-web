<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <div class="login" method="post">
            <label for="first name">First Name</label><br>
            <input type="text" id="first" placeholder="Enter first Name" required><br>

            <label for="last name">Last Name</label><br>
            <input type="text" id="last" placeholder="Enter Last Name" required><br>

            <label for="email">Enter Email</label><br>
            <input type="text" id="email" placeholder="Enter Email" required><br>

            <label for="number">Phone Number</label><br>
            <input type="tel" id="number" placeholder="Enter Phone Number" required><br>

            <label for="password">Password</label><br>
            <input type="text" id="password" placeholder="Enter Password" required><br>

            <button id="submit" type="submit" name="login">SUBMIT</button>
        </div>
    </div>
    <?php>
    include('dp.php');

    if (isset($POST ['login'])) {
        $first_name= $POST['first name'];
        $last_name= $POST['last name'];
        $email= $POST['email'];
        $number= $POST['number'];
        $password= $POST['password'];

        $query = mysql_query($con,"SELECT * FROM `login` WHERE 1")
    }
    ?>
</body>
</html>
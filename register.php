<?php
    if(isset($_POST['register']))
    {
        require_once "model/user.php";

        $user = new User();

        $register = $user->createUser(
            $_POST['fullname'],
            $_POST['username'],
            $_POST['email'],
            $_POST['password']
        );

        if($register)
        {
            $success = 'Registration successful.Go back to Log in page';
        }else
        {
            $error =  $user->error; //'There was a problem adding your details.Please try again';
        }
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Register User</title>
</head>
<body>
    <div id="login">
        <a href="login.php">Log In</a>
    </div> 
    <div id="new-user">
        <div id="error" style="color:red">
            <?php if(isset($error))  echo $error;?>
        </div>
        <div id="success" style="color:green">
            <?php if(isset($success))  echo $success;?>
        </div>
        <h1>Register Here</h1>
        <form  method="POST">

            <label for="">Fullname</label>
            <input type="text" name="fullname" id="" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname']; ?>">

            <label for="">Username</label>
            <input type="text" name="username" id="" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">

            <label for="">Email Address</label>
            <input type="text" name="email" id="" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">

            <label for="">Password</label>
            <input type="password" name="password" id="" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>">

            <input type="submit" name="register" value="Register" >

        </form>
    </div>

</body>
</html>
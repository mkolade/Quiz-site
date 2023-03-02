<?php
    if(isset($_POST['submit'])){
        require_once "model/user.php";

        $user = new User();

        $login = $user->login($_POST['login'],$_POST['password']);

        if($login == false){
            $error = "Invalid username/email and password combination";
        }
        else{
            header("location:Quiz/quiz.php?id=$login[id]");
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
    <title>Log in to my library</title>
</head>
<body>
    <div id="register">
        <a href="register.php">Register</a>
    </div>
    <div id="login-user"> 
        <div id="error" style="color:red">
            <?php if(isset($error))  echo $error;?>
        </div>
        <div id="success" style="color:green">
            <?php if(isset($success))  echo $success;?>
        </div>
        <form action="" method="POST">
            <h1>Log In Here</h1>
            <label for="">Email Address or Username</label>
            <input type="text" name="login" id="" value="<?php if(isset($_POST['login'])) echo $_POST['login']; ?>">

            <label for="">Password</label>
            <input type="password" name="password" id="" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>">

            <input type="submit" name="submit" value="submit">
        </form>
    </div>
    
</body>
</html>
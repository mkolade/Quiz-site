<?php
    require_once "model/user.php";
    $user = new User;
    $id = $_GET['id'] ?? null;
    if(!isset($id)){
        header('location:index.php');
        exit;  
    }
    $me = $user->getUser($id);

    if(empty($me)){
        echo "wtf";
    }else{
        print_r($me);
        $username = $me['username'];
        
    }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>HOME</title>
</head>
<body id="home">
    <h1>Welcome To Your Library <?php echo $username; ?> </h1>
</body>
</html>
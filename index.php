<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background: blue;
        display: flex;
        justify-content: center;
        text-align: center;
        height: 100vh;
        align-content: center;
        
    }
    #content{
        display: block;
        align-items: center;
        padding-top: 20%;
    }

    #content h1{
        color:white;
        text-decoration: none;
        font-size: 40px;
        margin-bottom: 30px;
    }

    #content p{
        color:white;
        text-decoration: none;
        margin-bottom: 30px;
    }

    #content a{
        padding-top: 30px;
        color:white;
        text-decoration: none;
        border: 2px solid white;
        padding: 5px 30px;
        border-radius: 10px;
        font-size: 17px;
        transition: 0.5s ease-in-out;
        font-weight: 700;
    }

    #content a:hover{
        background: white;
        color: #007bff;
        transition: 0.5s ease-in-out;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="content">
        <h1>Welcome To Your CBT test</h1>
        <p>Click the button below to continue to your test</p>
        <a href="login.php">Log in</a>
    </div>
   
   
    
</body>
</html>
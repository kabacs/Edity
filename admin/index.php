<?php
    session_start();
    $error = '';

    if (isset($_POST['username']) && isset($_POST['password']))
    {
        if ($_POST['username'] == 'user' && $_POST['password'] == 'pass')
        {
            $_SESSION['client'] = 'ok';
            Header ("location:home.php");
        }
        else
        {
            $error = '<span class="error">Wrong Username or Password, please try again!</span>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edity - Simple Content Editor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <meta name="description" content="Simple Content Editor for one-page websites">
    <meta name="author" content="Paulo Nunes - syndicate-fx.com">
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="shortcut icon" href="favicon.ico">
</head>
<body>
<div class="top">
<header class="wrap cf">
    <h1>edity</h1>
</header>
</div>

<div class="wrap cf">
    <div class="double">
        <h3>Please fill in the fields to login!</h3>
         <?php echo $error ?>
    </div>
    <div class="double">
        <form action="" method="post">
            <fieldset>
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Your Username">

                    <label>Password</label>
                    <input type="password" name="password"> 
                    <button type="submit" name="submit">Login</button>  
            </fieldset>   
        </form> 
    </div>
</div>
<?php include 'inc/footer.php' ?>
</body>
</html>
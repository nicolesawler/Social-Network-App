<?php
//login not required for page
define('LOGIN_NOT_REQUIRED', 1);
$error=false;

//if submit login button pressed
if(isset($_POST['btn-login']))
{
    //validate info sent
 include_once 'back/db-user.php';

 //validation methods
 $uname = $user->basicValidation(preg_replace("/[^a-z0-9-_.]/i", "", $_POST['txt_uname_email']));
 $umail = $user->basicValidation(filter_var($_POST['txt_uname_email'], FILTER_VALIDATE_EMAIL));
 $upass = $user->basicValidation($_POST['txt_password']);
   

// if no errors
if(!isset($user->error)){
    
    // log user in
    if($user->login($uname,$umail,$upass))
   {
        //send user to homepage profile
    $user->redirect('home');
   }
   else
   {
       //otherwise display login info incorrect on error element
    $user->error = "Login incorrect"; 
   }    
}

}

?>

<?php $page = 'index';?>
<!DOCTYPE html>
<html lang="en" id="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name=”viewport” content="width=device-width, initial-scale=1" />
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<title>Goalwoke.com - A social network to inspire personal growth.</title>
<meta name="description" content="A description of the page" /><!-- 155 characters max --> 
<link rel="stylesheet" href="assets/css/styles.css" type="text/css"  />
<link rel="stylesheet" href="assets/css/<?=$page;?>.css" type="text/css"  />
</head>
<body>
<div id="vision">
<?php include_once 'template/top-navigation.php';?>

	
     <div id="form-box" class="form-box credential-form-container">
	     
        <form method="post" id="login-credentials-form">
            <h2>Log in</h2>
            
            
            <?php
            //error element output message
                if(isset($user->error)) {
                    echo '<div id="in-warnings" class="alert warning">';
                   $user->printError();
                   $error = true;
                   echo '</div>';
               }
               ?>
            
            <div>
            
            <div><?php // display email address if error so user isnt required to refill ?>
             <input type="text" class="" name="txt_uname_email" placeholder="Username or Email" value="<?php if($error){echo $user->basicValidation($_POST['txt_uname_email']);}?>" maxlength="45"/>
            </div>
            
            <div>
             <input type="password" class="" name="txt_password" placeholder="Your Password" maxlength="45" />
            </div>
            
            <div class="clearfix"></div>
            
            <div>
             <button type="submit" name="btn-login" class="btn btn-block btn-primary">SIGN IN</button>
            </div>
            
            
            
            <br />
            
            <p>Don't have an account yet? <a href="create-an-account.php">Create one now</a></p>
            
            
        </form>
     </div>
     
     
</div><!-- Vision container -->

</body>
</html>
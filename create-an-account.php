<?php
define('LOGIN_NOT_REQUIRED', 1);
include_once 'front/post-register.php';
//echo $_SERVER['REMOTE_ADDR'];
//echo $real_client_ip = $user->get_ip();

?>
<!DOCTYPE html>
<html lang="en" id="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name=”viewport” content="width=device-width, initial-scale=1" />
<title>Login : cleartuts</title>
<meta name="description" content="A description of the page" /><!-- 155 characters max --> 
<link rel="stylesheet" href="assets/css/styles.css" type="text/css"  />
</head>
<body>
<div id="vision">
	
<?php
require_once 'template/top-navigation.php';
?>


      <div id="form-box" class="form-box credential-form-container">
        
        
        <form method="post" id="register-credentials-form">
            <h2>Create an account</h2>

            <div id="in-warnings" class="alert warning"></div>
            <?php
                if(isset($user->error)) {
                   $user->printError();
                   $error = true;
               }
            ?>
            
            <div>
            <input id="in-first-name" type="text" class="names credential-create in-first-name" name="txt_first" value="<?php if($error){echo $fname;}?>" placeholder="First Name" />
            <input id="in-last-name" type="text" class="names credential-create in-last-name" name="txt_last" value="<?php if($error){echo $lname;}?>" placeholder="Last Name" />
            </div>
            
            
            <div>
 <select id="in-birth-month" name="txt_month" value="<?php if($error){echo $month;}?>">
	<option value="January">January</option>
	<option value="February">February</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>
</select>

<select id="in-birth-day" name="txt_day" value="<?php if($error){echo $day;}?>">
	<option value="01">01</option>
	<option value="02">02</option>
	<option value="03">03</option>
	<option value="04">04</option>
	<option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option selected value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>


<select id="in-birth-year" name="txt_year" value="<?php if($error){echo $year;}?>">
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option selected value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
	<option value="1946">1946</option>
	<option value="1945">1945</option>
	
</select>
            </div>
            
            <div>
            <input id="in-user-name" type="text" class="credential-create form-control" name="txt_uname" placeholder="Username" value="<?php if($error){echo $uname;}?>" />
            </div>
            
            <div>
            <input id="in-e-mail" type="text" class="credential-create form-control" name="txt_umail" placeholder="E-mail" value="<?php if($error){echo $umail;}?>" />
            </div>
            
            <div>
             <input id="in-pass-word" type="password" class="credential-create form-control" name="txt_upass" placeholder="Password" />
            </div>
            
            <div class="clearfix"></div>
            
            <div>
             <button id="btn-signup" type="submit" class="btn btn-block btn-primary" name="btn-signup">
                 SIGN UP
                </button>
            </div>
            
            <br />
            <p>Already have an account? <a href="index.php">Log in</a></p>
            
        </form>
        
       </div>
       
<div id="footer-outside" class="">    
   &copy; GritBldr <?= date('Y'); ?>
 </div>

</div>
<script src="assets/js/create-an-account.js"></script>
</body>
</html>
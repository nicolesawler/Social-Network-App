<?php
include_once 'back/db-user.php';

if($userStuff = $user->getProfileUserInfo(USER_NAME) ){
    $userBirthMonth = $userStuff['birth_month'];
    $userBirthYear = $userStuff['birth_year'];
    $userBirthDay = $userStuff['birth_day'];
    
    $userPhoneRaw = $userStuff['user_phone_raw'];
    $userPhone = $userStuff['user_phone'];
    $userCountry = $userStuff['country'];
    $userZip = $userStuff['postal'];
    
}else{
    $user->redirect('log-out');
}


?>
<?php $page = 'account-privacy';?>
<?php include_once 'template/head.php';?>  
<div id="vision">
<?php include_once 'template/top-navigation.php';?>
<div id="boxed-space">
<?php include_once 'template/user-sidebar.php';?>
<div id="main-space" class="main-space">	
<?php include_once 'template/user-navigation.php';?>
    

	
	<div id="love-title" class="love-title">
		Privacy Preferences
	</div>
	<div id="love-box" class="love-box">
	
		<table id="account-privacy-table" class="account-privacy-table">
			<thead>
				<th></th>
				<th>The World</th>
				<th>People near me</th>
				<th>Followers</th>
				<th>Love Matches</th>
				<th>Career Matches</th>
				<th>Private</th>
			</thead>
			
			<tbody>
				<tr>
					<td><strong>Timeline</strong></td>
					<td><input type="checkbox" class="checkbox" name="checkbox1" ></td>
					<td><input type="checkbox" class="checkbox" name="checkbox2" ></td>
					<td><input type="checkbox" class="checkbox" name="checkbox3" ></td>
					<td><input type="checkbox" class="checkbox" name="checkbox4" ></td>
					<td><input type="checkbox" class="checkbox" name="checkbox5" ></td>
					<td><input type="checkbox" class="checkbox" name="checkbox6" ></td>
				</tr>
					<tr>
					<td><strong>Goals</strong></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
				</tr>
					<tr>
					<td><strong>Career</strong></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
				</tr>
					<tr>
					<td><strong>Love</strong></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
				</tr>
					<tr>
					<td><strong>Book</strong></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
				</tr>
					<tr>
					<td><strong>Stars</strong></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
				</tr>
					<tr>
					<td><strong>Investments</strong></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
					<td><input type="checkbox" class="checkbox" name="checkbox" /></td>
				</tr>
				
			</tbody>
		</table>
		</div>
	
	<div id="love-title" class="love-title">
		Personal Account Preferences
	</div>
	<div id="love-box" class="love-box">
		
		
		
		<table id="account-pref-table" class="account-pref-table">
			<tbody>
				<tr>
					<td>Name</td>
					<td><input name="" class="" value="<?= FIRST_NAME; ?>"/></td>
					<td><input name="" class="" value="<?= LAST_NAME; ?>"/></td>
				</tr>
					<tr>
					<td>Birthday</td>
					<td>
												
<select id="in-birth-month" name="txt_month" value="<?php if(isset($error)){echo $month;}?>">
						  
	<option selected value="<?= $userBirthMonth ?>"><?= $userBirthMonth ?></option>
	<option value="January" disabled></option>
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

</td><td>
	<select class="dates" id="in-birth-day" name="txt_day" value="<?php if(isset($error)){echo $day;}?>">
	<option selected value="<?= $userBirthDay ?>"><?= $userBirthDay ?></option>
	<option value="12" disabled></option>
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
	<option value="12">12</option>
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


<select class="dates"  id="in-birth-year" name="txt_year" value="<?php if(isset($error)){echo $year;}?>">
	<option selected value="<?= $userBirthYear ?>"><?= $userBirthYear ?></option>
	<option value="1989" disabled></option>
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
	<option value="1989">1989</option>
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
	
	
</td>
	
						
				</tr>
					<tr>
					<td>Username</td>
					<td><input name="" class="" disabled value="<?= USER_NAME; ?>"></td>
					<td><small>Username can not be changed.</small></td>
				</tr>
					<tr>
					<td>E-Mail</td>
					<td><input name="" class="" value="<?= USER_EMAIL; ?>"/></td>
					<td></td>
				</tr>
					<tr>
					<td>New Password</td>
					<td><input name="" class=""/></td>
					<td></td>
				</tr>
					<tr>
					<td>Confirm New Password</td>
					<td><input name="" class=""/></td>
					<td></td>
				</tr>

				
			</tbody>
		</table>
		</div>
	
	
	
	<div id="love-title" class="love-title">
		Recovery Options
	</div>
	<div id="love-box" class="love-box">
	<small>If you have trouble logging in or forget your password, use the options below to help recover your account. By adding a recovery email, all recovery options will go to that email (we will still use your default email for notifications).	</small><br><br>
		
		
<table id="account-pref-table" class="account-pref-table">
    <tbody>
    <tr>
        <td>Cell Phone</td>
        <td>
        <select name="country" id="country" class="" tabindex="0">

      <?php if(isset($userPhoneRaw)){?>
		<option selected value="<?= $userPhoneRaw ?>"><?= $userPhoneRaw ?></option>
	<?php } else { ?>
		<option selected value="NA" disabled>Choose area code</option>
	<?php }  ?>

                <option value="AF">Afghanistan (+93)</option><option value="AL">Albania (+355)</option><option value="DZ">Algeria (+213)</option><option value="AS">American Samoa (+1)</option><option value="AD">Andorra (+376)</option><option value="AO">Angola (+244)</option><option value="AI">Anguilla (+1)</option><option value="AG">Antigua (+1)</option><option value="AR">Argentina (+54)</option><option value="AM">Armenia (+374)</option><option value="AW">Aruba (+297)</option><option value="AU">Australia (+61)</option><option value="AT">Austria (+43)</option><option value="AZ">Azerbaijan (+994)</option><option value="BH">Bahrain (+973)</option><option value="BD">Bangladesh (+880)</option><option value="BB">Barbados (+1)</option><option value="BY">Belarus (+375)</option><option value="BE">Belgium (+32)</option><option value="BZ">Belize (+501)</option><option value="BJ">Benin (+229)</option><option value="BM">Bermuda (+1)</option><option value="BT">Bhutan (+975)</option><option value="BO">Bolivia (+591)</option><option value="BQ">Bonaire, Sint Eustatius and Saba (+599)</option><option value="BA">Bosnia and Herzegovina (+387)</option><option value="BW">Botswana (+267)</option><option value="BR">Brazil (+55)</option><option value="IO">British Indian Ocean Territory (+246)</option><option value="VG">British Virgin Islands (+1)</option><option value="BN">Brunei (+673)</option><option value="BG">Bulgaria (+359)</option><option value="BF">Burkina Faso (+226)</option><option value="BI">Burundi (+257)</option><option value="KH">Cambodia (+855)</option><option value="CM">Cameroon (+237)</option><option value="CA">Canada (+1)</option><option value="CV">Cape Verde (+238)</option><option value="KY">Cayman Islands (+1)</option><option value="CF">Central African Republic (+236)</option><option value="TD">Chad (+235)</option><option value="CL">Chile (+56)</option><option value="CN">China (+86)</option><option value="CO">Colombia (+57)</option><option value="KM">Comoros (+269)</option><option value="CK">Cook Islands (+682)</option><option value="CR">Costa Rica (+506)</option><option value="CI">Côte d'Ivoire (+225)</option><option value="HR">Croatia (+385)</option><option value="CU">Cuba (+53)</option><option value="CW">Curaçao (+599)</option><option value="CY">Cyprus (+357)</option><option value="CZ">Czech Republic (+420)</option><option value="CD">Democratic Republic of the Congo (+243)</option><option value="DK">Denmark (+45)</option><option value="DJ">Djibouti (+253)</option><option value="DM">Dominica (+1)</option><option value="DO">Dominican Republic (+1)</option><option value="EC">Ecuador (+593)</option><option value="EG">Egypt (+20)</option><option value="SV">El Salvador (+503)</option><option value="GQ">Equatorial Guinea (+240)</option><option value="ER">Eritrea (+291)</option><option value="EE">Estonia (+372)</option><option value="ET">Ethiopia (+251)</option><option value="FK">Falkland Islands (+500)</option><option value="FO">Faroe Islands (+298)</option><option value="FM">Federated States of Micronesia (+691)</option><option value="FJ">Fiji (+679)</option><option value="FI">Finland (+358)</option><option value="FR">France (+33)</option><option value="GF">French Guiana (+594)</option><option value="PF">French Polynesia (+689)</option><option value="GA">Gabon (+241)</option><option value="GE">Georgia (+995)</option><option value="DE">Germany (+49)</option><option value="GH">Ghana (+233)</option><option value="GI">Gibraltar (+350)</option><option value="GR">Greece (+30)</option><option value="GL">Greenland (+299)</option><option value="GD">Grenada (+1)</option><option value="GP">Guadeloupe (+590)</option><option value="GU">Guam (+1)</option><option value="GT">Guatemala (+502)</option><option value="GG">Guernsey (+44)</option><option value="GN">Guinea (+224)</option><option value="GW">Guinea-Bissau (+245)</option><option value="GY">Guyana (+592)</option><option value="HT">Haiti (+509)</option><option value="HN">Honduras (+504)</option><option value="HK">Hong Kong (+852)</option><option value="HU">Hungary (+36)</option><option value="IS">Iceland (+354)</option><option value="IN">India (+91)</option><option value="ID">Indonesia (+62)</option><option value="IR">Iran (+98)</option><option value="IQ">Iraq (+964)</option><option value="IE">Ireland (+353)</option><option value="IM">Isle Of Man (+44)</option><option value="IL">Israel (+972)</option><option value="IT">Italy (+39)</option><option value="JM">Jamaica (+1)</option><option value="JP">Japan (+81)</option><option value="JE">Jersey (+44)</option><option value="JO">Jordan (+962)</option><option value="KZ">Kazakhstan (+7)</option><option value="KE">Kenya (+254)</option><option value="KI">Kiribati (+686)</option><option value="XK">Kosovo (+381)</option><option value="KW">Kuwait (+965)</option><option value="KG">Kyrgyzstan (+996)</option><option value="LA">Laos (+856)</option><option value="LV">Latvia (+371)</option><option value="LB">Lebanon (+961)</option><option value="LS">Lesotho (+266)</option><option value="LR">Liberia (+231)</option><option value="LY">Libya (+218)</option><option value="LI">Liechtenstein (+423)</option><option value="LT">Lithuania (+370)</option><option value="LU">Luxembourg (+352)</option><option value="MO">Macau (+853)</option><option value="MK">Macedonia (+389)</option><option value="MG">Madagascar (+261)</option><option value="MW">Malawi (+265)</option><option value="MY">Malaysia (+60)</option><option value="MV">Maldives (+960)</option><option value="ML">Mali (+223)</option><option value="MT">Malta (+356)</option><option value="MH">Marshall Islands (+692)</option><option value="MQ">Martinique (+596)</option><option value="MR">Mauritania (+222)</option><option value="MU">Mauritius (+230)</option><option value="YT">Mayotte (+262)</option><option value="MX">Mexico (+52)</option><option value="MD">Moldova (+373)</option><option value="MC">Monaco (+377)</option><option value="MN">Mongolia (+976)</option><option value="ME">Montenegro (+382)</option><option value="MS">Montserrat (+1)</option><option value="MA">Morocco (+212)</option><option value="MZ">Mozambique (+258)</option><option value="MM">Myanmar (+95)</option><option value="NA">Namibia (+264)</option><option value="NR">Nauru (+674)</option><option value="NP">Nepal (+977)</option><option value="NL">Netherlands (+31)</option><option value="NC">New Caledonia (+687)</option><option value="NZ">New Zealand (+64)</option><option value="NI">Nicaragua (+505)</option><option value="NE">Niger (+227)</option><option value="NG">Nigeria (+234)</option><option value="NU">Niue (+683)</option><option value="NF">Norfolk Island (+672)</option><option value="KP">North Korea (+850)</option><option value="MP">Northern Mariana Islands (+1)</option><option value="NO">Norway (+47)</option><option value="OM">Oman (+968)</option><option value="PK">Pakistan (+92)</option><option value="PW">Palau (+680)</option><option value="PS">Palestine (+970)</option><option value="PA">Panama (+507)</option><option value="PG">Papua New Guinea (+675)</option><option value="PY">Paraguay (+595)</option><option value="PE">Peru (+51)</option><option value="PH">Philippines (+63)</option><option value="PL">Poland (+48)</option><option value="PT">Portugal (+351)</option><option value="PR">Puerto Rico (+1)</option><option value="QA">Qatar (+974)</option><option value="CG">Republic of the Congo (+242)</option><option value="RE">Réunion (+262)</option><option value="RO">Romania (+40)</option><option value="RU">Russia (+7)</option><option value="RW">Rwanda (+250)</option><option value="BL">Saint Barthélemy (+590)</option><option value="SH">Saint Helena (+290)</option><option value="KN">Saint Kitts and Nevis (+1)</option><option value="MF">Saint Martin (+590)</option><option value="PM">Saint Pierre and Miquelon (+508)</option><option value="VC">Saint Vincent and the Grenadines (+1)</option><option value="WS">Samoa (+685)</option><option value="SM">San Marino (+378)</option><option value="ST">Sao Tome and Principe (+239)</option><option value="SA">Saudi Arabia (+966)</option><option value="SN">Senegal (+221)</option><option value="RS">Serbia (+381)</option><option value="SC">Seychelles (+248)</option><option value="SL">Sierra Leone (+232)</option><option value="SG">Singapore (+65)</option><option value="SX">Sint Maarten (+599)</option><option value="SK">Slovakia (+421)</option><option value="SI">Slovenia (+386)</option><option value="SB">Solomon Islands (+677)</option><option value="SO">Somalia (+252)</option><option value="ZA">South Africa (+27)</option><option value="KR">South Korea (+82)</option><option value="SS">South Sudan (+211)</option><option value="ES">Spain (+34)</option><option value="LK">Sri Lanka (+94)</option><option value="LC">St. Lucia (+1)</option><option value="SD">Sudan (+249)</option><option value="SR">Suriname (+597)</option><option value="SZ">Swaziland (+268)</option><option value="SE">Sweden (+46)</option><option value="CH">Switzerland (+41)</option><option value="SY">Syria (+963)</option><option value="TW">Taiwan (+886)</option><option value="TJ">Tajikistan (+992)</option><option value="TZ">Tanzania (+255)</option><option value="TH">Thailand (+66)</option><option value="BS">The Bahamas (+1)</option><option value="GM">The Gambia (+220)</option><option value="TL">Timor-Leste (+670)</option><option value="TG">Togo (+228)</option><option value="TK">Tokelau (+690)</option><option value="TO">Tonga (+676)</option><option value="TT">Trinidad and Tobago (+1)</option><option value="TN">Tunisia (+216)</option><option value="TR">Turkey (+90)</option><option value="TM">Turkmenistan (+993)</option><option value="TC">Turks and Caicos Islands (+1)</option><option value="TV">Tuvalu (+688)</option><option value="UG">Uganda (+256)</option><option value="UA">Ukraine (+380)</option><option value="AE">United Arab Emirates (+971)</option><option value="GB">United Kingdom (+44)</option><option value="US">United States (+1)</option><option value="UY">Uruguay (+598)</option><option value="VI">US Virgin Islands (+1)</option><option value="UZ">Uzbekistan (+998)</option><option value="VU">Vanuatu (+678)</option><option value="VA">Vatican City (+39)</option><option value="VE">Venezuela (+58)</option><option value="VN">Vietnam (+84)</option><option value="WF">Wallis and Futuna (+681)</option><option value="EH">Western Sahara (+212)</option><option value="YE">Yemen (+967)</option><option value="ZM">Zambia (+260)</option><option value="ZW">Zimbabwe (+263)</option></select>
</td>
<td><input name="" class="" value="<?= $userPhone; ?>" placeholder=""/></td>
</tr>

<tr>
<td>Zip/Postal Code</td>
<td><input name="" class="" value=""></td>
<td>
						
<select name="country" id="country">
	<?php if(isset($userCountry)){?>
		<option selected value="<?= $userCountry ?>"><?= $userCountry ?></option>
	<?php } else { ?>
		<option selected value="NA" disabled>Choose a country</option>
	<?php }  ?>
	
<option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>						
						
					</td>
				</tr>
					<tr>
					<td>Recovery E-Mail</td>
					<td><input name="" class="" value=""/></td>
					<td></td>
				</tr>

				
			</tbody>
		</table>
		</div>
	
	
	
	
<div class="clear"></div>
	

	
	
<div id="love-title" class="love-title">
	Save Options
</div>
	<div id="love-box" class="love-box">
<button class="save-love" id="save-love">Save</button>
<div class="clear"></div>
	


	</div>
	
	
	
	
	
	<div id="love-note" class="love-note">
	Some sort of disclaimer. Children under 13 have this section disabled.
	
	</div>
		

	
	
	<div class="clear"></div>
	
		
</div>






</div>
</div>
<?php include_once 'template/foot.php'; ?>
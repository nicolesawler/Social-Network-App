<?php
$error = false;
/* user */
include_once 'back/db-user.php';
/* profiles */
include_once 'back/db-profiles.php';
/* network */
include_once 'back/db-network.php';
/* post */
include 'front/post-home.php';
/* css */
$page = 'messages';

?>
<?php include_once 'template/head.php';?>  
<div id="vision">
<?php include_once 'template/top-navigation.php';?>
<div id="boxed-space">	
    



           
            <div id="in-warnings" class="alert warning">
            <?php
                if(isset($user->error)) {
                   $user->printError();
                   $error = true;
               }
               ?></div> 
           




<div class="time-row">
    <a id="HomeFriendButton" href="javascript:void(0)" onclick="openType(event, 'Friend');" class="tablink Friend active">
      <div id="HomeFriendDiv" class="HomeFriendDiv tablink Friend ">Friends</div>
    </a>
    <a id="HomeLoveButton" href="javascript:void(0)" onclick="openType(event, 'Love');" class="tablink Love">
      <div id="HomeLoveDiv" class="HomeLoveDiv tablink Love">Love</div>
    </a>
    <a id="HomeCareerButton" href="javascript:void(0)" onclick="openType(event, 'Career');" class="tablink Career">
      <div id="HomeCareerDiv" class="HomeCareerDiv tablink Career">Career</div>
    </a>
 </div>
    
 <div class="clear"></div>
 
 
 <div class="Timeline_Container">
     
     
    
  <div id="Friend" class="timelineType" style="display:none">

            <div id="message-title" class="friend">Enter a name </div>
            
           <div id="message-box-left" class="friend">
               <ul>
                   <li>John Smith<span class="actions">Delete</span><br><small>Last: Just Now</small></li>
                  <li>John Smith<span class="actions">Delete</span><br><small>Last: Today</small></li>
                  <li>John Smith<span class="actions">Delete</span><br><small>Last: Jan 12, 17 4:10pm</small></li>
                  <li>John Smith<span class="actions">Delete</span><br><small>Last: Jan 12, 17 4:10pm</small></li>
               </ul> 
               
               
               <div id="message-user-info">
                   <div class="message-profile-pic">&nbsp;</div>
                   <div class="message-msg">
                    <b>John Smith</b>
                    <span class="msg-zodiac">Sagittarius</span>
                    <button>View Profile</button>
                   </div>
               </div>
               
               
            </div>
            <div id="message-box-right">
               
                
                <div id="real-messages" class="friend">
                    
<p><small class="date">Jan 12, 17 4:10pm</small>The first paragraph.</p>      
                   
<p><small class="date">Jan 12, 17 4:10pm</small> The second paragraph.The second paragraph.The second paragraph.The second paragraph.
    The second paragraph.The second paragraph.The second paragraph.The second paragraph.</p>

<p><small class="date">Jan 12, 17 4:10pm</small>The third paragraph.</p>
                    
<p><small class="date">Jan 12, 17 4:10pm</small>The first paragraph.</p>      
                   
<p><small class="date">Jan 12, 17 4:10pm</small> The second paragraph.The second paragraph.The second paragraph.The second paragraph.
    The second paragraph.The second paragraph.The second paragraph.The second paragraph.</p>

<p><small class="date">Jan 12, 17 4:10pm</small>The third paragraph.</p>
                    
<p><small class="date">Jan 12, 17 4:10pm</small>The first paragraph.</p>      
                   
<p><small class="date">Jan 12, 17 4:10pm</small> The second paragraph.The second paragraph.The second paragraph.The second paragraph.
    The second paragraph.The second paragraph.The second paragraph.The second paragraph.</p>

<p><small class="date">Jan 12, 17 4:10pm</small>The third paragraph.</p>
                    
<p><small class="date">Jan 12, 17 4:10pm</small>The first paragraph.</p>      
                   
<p><small class="date">Jan 12, 17 4:10pm</small> The second paragraph.The second paragraph.The second paragraph.The second paragraph.
    The second paragraph.The second paragraph.The second paragraph.The second paragraph.</p>

<p><small class="date">Jan 12, 17 4:10pm</small>The third paragraph.</p>
                    



                </div> 
                
                
                
                
                
                
                <div>geff</div>
                
                
            <div id="single-moment" class="single-moment">
            <form method="post">
            <textarea id="in-single-mom" class="in-single-mom" name="in-single-mom" maxlength="255"></textarea>
            <button id="in-single-mom-submit" class="in-single-mom-submit" name="in-single-mom-submit" type="submit" >go</button>
            <div class="clear"></div>
            </form>
            </div>    
                
                
            </div>
                
                
                
                
         <div class="clear"></div> 
  </div>

  <div id="Love" class="timelineType" style="display:none">

            <div id="message-title" class="love">fdvd </div>
                      <div id="message-box-left" class="love">
               <ul>
                   <li>John Smith<span class="actions">Delete</span><br><small>Last: Just Now</small></li>
                  <li>John Smith<span class="actions">Delete</span><br><small>Last: Today</small></li>
                  <li>John Smith<span class="actions">Delete</span><br><small>Last: Jan 12, 17 4:10pm</small></li>
                  <li>John Smith<span class="actions">Delete</span><br><small>Last: Jan 12, 17 4:10pm</small></li>
               </ul> 
               
               
               <div id="message-user-info">
                   <div class="message-profile-pic">&nbsp;</div>
                   <div class="message-msg">
                    <b>John Smith</b>
                    <span class="msg-zodiac">Sagittarius</span>
                    <button>View Profile</button>
                   </div>
               </div>
               
               
            </div>
            <div id="message-box-right">
             
                
                                
                <div id="real-messages" class="love">
                    
<p><small class="date">Jan 12, 17 4:10pm</small>The first paragraph.</p>      
                   
<p><small class="date">Jan 12, 17 4:10pm</small> The second paragraph.The second paragraph.The second paragraph.The second paragraph.
    The second paragraph.The second paragraph.The second paragraph.The second paragraph.</p>

<p><small class="date">Jan 12, 17 4:10pm</small>The third paragraph.</p>
                    
<p><small class="date">Jan 12, 17 4:10pm</small>The first paragraph.</p>      
                   
<p><small class="date">Jan 12, 17 4:10pm</small> The second paragraph.The second paragraph.The second paragraph.The second paragraph.
    The second paragraph.The second paragraph.The second paragraph.The second paragraph.</p>

<p><small class="date">Jan 12, 17 4:10pm</small>The third paragraph.</p>
                    
<p><small class="date">Jan 12, 17 4:10pm</small>The first paragraph.</p>      
                   
<p><small class="date">Jan 12, 17 4:10pm</small> The second paragraph.The second paragraph.The second paragraph.The second paragraph.
    The second paragraph.The second paragraph.The second paragraph.The second paragraph.</p>

<p><small class="date">Jan 12, 17 4:10pm</small>The third paragraph.</p>
                    
<p><small class="date">Jan 12, 17 4:10pm</small>The first paragraph.</p>      
                   
<p><small class="date">Jan 12, 17 4:10pm</small> The second paragraph.The second paragraph.The second paragraph.The second paragraph.
    The second paragraph.The second paragraph.The second paragraph.The second paragraph.</p>

<p><small class="date">Jan 12, 17 4:10pm</small>The third paragraph.</p>
                    



                </div> 
                
                
                
                
                
                
                
            </div>
            <div class="clear"></div> 
    </div>

  <div id="Career" class="timelineType" style="display:none">


            <div id="message-title" class="career">fdvd </div>
            
           <div id="message-box-left">
                career
            </div>
            <div id="message-box-right">
                career
            </div>
            <div class="clear"></div> 
  </div>
    
     
     
</div>
 
 
 
 
 




    

 
 
</div> 	
</div><!--main space--> 
</div>
 <script>
var ctype = "Friend";
document.getElementById(ctype).style.display = "block";
document.getElementById('Home'+ctype+'Div').className += " "+ctype.toLowerCase()+"Active";

function openType(evt, type) {
    
    var frienddiv = document.getElementById('HomeFriendDiv');
    var lovediv = document.getElementById('HomeLoveDiv');
    var careerdiv = document.getElementById('HomeCareerDiv');
    

    var i, x, tablinks;
    x = document.getElementsByClassName("timelineType");
    
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");

    }
    if(type === "Friend"){
        frienddiv.className += " friendActive";
        lovediv.classList.remove("loveActive");
        careerdiv.classList.remove("careerActive");
    }else if(type === "Love"){
        frienddiv.classList.remove("friendActive");
        lovediv.className += " loveActive";
        careerdiv.classList.remove("careerActive");
    }else{
        frienddiv.classList.remove("friendActive");
        lovediv.classList.remove("loveActive");
        careerdiv.className += " careerActive";    
    }
    
    
    document.getElementById(type).style.display = "block";
  
    evt.currentTarget.className += " active";
}



</script>
<script src="assets/js/home-functions.js"></script>
<?php include_once 'template/foot.php'; ?>
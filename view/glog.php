<?php

require 'checkUsername.php';

$output = "";
$chap_cnt = 0;

        if(USER_PROFILE_ID != 0){
           
                 try
                    {
                        if($chaps = $userProfile->getGlogProfile(USER_PROFILE_ID)) 
                        {
                            foreach ($chaps as $cview) 
                            {
                            $chap_cnt++;
                            $output .= ' <li><input type="radio" id="radio-'.$chap_cnt.'" name="radio-accordion"  /><li>'
                                    . '<input type="radio" id="radio-'.$chap_cnt.'" name="radio-accordion"  />'
                                    . '<label class="'.$cview['chapter_hidden'].'" for="radio-'.$chap_cnt.'">'
                                    . 'Chapter '.$chap_cnt.' : '.$cview['chapter_title'].'</label><div class="content">'
                                    . '<p>'.nl2br($cview['chapter_blog']).'</p></div></li>';
                            } 
                            
   

                        }else{
                            $output .= "Sorry no glogs";
                        }
                   }
                   catch(PDOException $e)
                   {
                      echo $e->getMessage();
                   } 
           
           
        }else{
           //$user->redirect('glog.php?new');
        }

?>
<?php $page = 'glog';?>
<?php include_once '../template/head.php';?>  
<div id="vision">
<?php include_once '../template/top-navigation.php';?>
<div id="boxed-space">
<?php include_once '../template/user-sidebar.php';?>
<div id="main-space" class="main-space">	
<?php include_once '../template/user-navigation.php';?>
    

<div id="glog-post" class="glog-post">
		

    <div class="bookchapters vertical">	
    <ul>

    <?= $output; ?> 

    </ul>
    </div>

</div>
		
</div>
</div>
<?php include_once '../template/foot.php';?>
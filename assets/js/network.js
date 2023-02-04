/* 
 * Copyright 2017 nicolesawler.
 *

 */
function addEvent(element, evnt, funct){
  if (element.attachEvent)
   return element.attachEvent('on'+evnt, funct);
  else
   return element.addEventListener(evnt, funct, false);
}

if(document.getElementById('AddFriendButton')){
    addEvent(
        document.getElementById('AddFriendButton'),
        'click', 
        function() {addConnection(user,owner,"FRIEND");}  
    );
}
if(document.getElementById('AddLoveButton')){
    addEvent(
        document.getElementById('AddLoveButton'),
        'click', 
        function() {addConnection(user,owner,"LOVE");}  
    );
}
if(document.getElementById('AddCareerButton')){
    addEvent(
        document.getElementById('AddCareerButton'),
        'click', 
        function() {addConnection(user,owner,"CAREER");}  
    );
 }
 /* If Sidebar deny button */
if(document.getElementById('RequestButtonDeny')){
    addEvent(
        document.getElementById('RequestButtonDeny'),
        'click', 
        function() {denyConnection(this, user,owner);}  
    );
}




function addConnection(user,owner,type) {
   
if(document.getElementById('AddFriendButton'))
{var friendBtn = document.getElementById('AddFriendButton');}else{var friendBtn = "";}

if(document.getElementById('AddLoveButton'))
{var loveBtn = document.getElementById('AddLoveButton');}else{var loveBtn = "";}

if(document.getElementById('AddMatchLoveButton'+owner))
{var loveBtnMATCH = document.getElementById('AddMatchLoveButton'+owner);}else{var loveBtnMATCH = "";}

if(document.getElementById('AddCareerButton'))
{var careerBtn = document.getElementById('AddCareerButton');}else{var careerBtn = "";}

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
            
            if(friendBtn.innerHTML === 'Requested' || loveBtn.innerHTML === 'Requested' || careerBtn.innerHTML === 'Requested'){
                
                var url = "http://localhost/goalwoke/inc/_cancelConnection.php";
                var params = "u="+user+"&o="+owner+"&t="+type;
                xmlhttp.open("POST", url, true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        
                            friendBtn.innerHTML = 'Add Friend';//this.responseText;
                            loveBtn.innerHTML = 'Add Match';//this.responseText; 
                            careerBtn.innerHTML = 'Add Career';//this.responseText;
                            friendBtn.removeAttribute("disabled","disabled");
                            loveBtn.removeAttribute("disabled","disabled");                        
                            careerBtn.removeAttribute("disabled","disabled");                        
                        
                    }
                };
                xmlhttp.send(params);
                         
            }else if(friendBtn.innerHTML === 'Approve' || loveBtn.innerHTML === 'Approve' || careerBtn.innerHTML === 'Approve'){
                
                var url = "http://localhost/goalwoke/inc/_approveConnection.php";
                var params = "u="+user+"&o="+owner;
                xmlhttp.open("POST", url, true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        location.reload();
                        if(type == 'FRIEND'){
                            friendBtn.innerHTML = 'Approved';//this.responseText;
                            friendBtn.setAttribute("disabled","disabled");
                        } else if(type == 'LOVE'){
                            loveBtn.innerHTML = 'Approved';//this.responseText;
                            loveBtn.setAttribute("disabled","disabled");                     
                        }else{
                            careerBtn.innerHTML = 'Approved';//this.responseText;
                            careerBtn.setAttribute("disabled","disabled");                    
                        }                    
                        
                    }
                };
                xmlhttp.send(params);
               
            } else {
                
                var url = "http://localhost/goalwoke/inc/_addConnection.php";
                var params = "u="+user+"&o="+owner+"&t="+type;
                xmlhttp.open("POST", url, true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        if(type == 'FRIEND'){
                            friendBtn.innerHTML = 'Requested';//this.responseText;
                            loveBtn.setAttribute("disabled","disabled");
                            careerBtn.setAttribute("disabled","disabled");
                        } else if(type == 'LOVE'){
                            if(loveBtnMATCH != ""){
                                loveBtnMATCH.innerHTML = 'Requested';
                                loveBtnMATCH.setAttribute("disabled","disabled");
                            }else{
                                loveBtn.innerHTML = 'Requested';//this.responseText;
                                friendBtn.setAttribute("disabled","disabled");
                                careerBtn.setAttribute("disabled","disabled");  
                            }
                     
                        }else{
                            careerBtn.innerHTML = 'Requested';//this.responseText;
                            friendBtn.setAttribute("disabled","disabled");
                            loveBtn.setAttribute("disabled","disabled");                        
                        }
                    }
                };
                xmlhttp.send(params);
                
                
            }
            
}



function approveConnection(obj,user,owner) {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        var url = "http://localhost/goalwoke/inc/_approveConnection.php";
        var params = "u="+user+"&o="+owner;
        xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = function() {
            
            if (this.readyState == 4 && this.status == 200) {
                var result = this.responseText;
                if(result){
                    parent = obj.parentNode;
                    parent.innerHTML = '<button id="RequestButtonApprove" class="RequestButtonApprove" disabled>Approved</button>';
                }else{
                    parent = obj.parentNode;
                    parent.innerHTML = 'Oops! Problem adding this person.';
                }
                //obj.innerHTML = "Approved";//this.responseText;//this.responseText;
                //obj.setAttribute("disabled","disabled");

            }
            
        };
        xmlhttp.send(params);
                
         
            
}

function denyConnection(obj,user,owner) {
        //obj.innerHTML = "DENIED";//this.responseText;//this.responseText;
        //obj.setAttribute("disabled","disabled");
                    
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        var url = "http://localhost/goalwoke/inc/_denyConnection.php";
        var params = "u="+user+"&o="+owner;
        xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var result = this.responseText;
                if(result){
                    parent = obj.parentNode;
                    parent.innerHTML = '<button id="RequestButtonDeny" class="RequestButtonDeny" disabled>Denied</button>';
                }else{
                    parent = obj.parentNode;
                    parent.innerHTML = 'Oops! Error.';
                }
                //obj.innerHTML = "Approved";//this.responseText;//this.responseText;
                //obj.setAttribute("disabled","disabled");

            }
        };
        xmlhttp.send(params);
                
         
            
}


function removeConnection(obj,user,owner) {
           
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        var url = "http://localhost/goalwoke/ajax/_removeConnection.php";
        var params = "u="+user+"&o="+owner;
        xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var result = this.responseText;
                if(result){
                    parent = obj.parentNode;
                    parent.innerHTML = 'Removed';
                }else{
                    parent = obj.parentNode;
                    parent.innerHTML = 'Error';
                }
                //obj.innerHTML = "Approved";//this.responseText;//this.responseText;
                //obj.setAttribute("disabled","disabled");

            }
        };
        xmlhttp.send(params);
                
         
            
}
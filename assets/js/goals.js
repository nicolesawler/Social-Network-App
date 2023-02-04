/* 
 * Copyright 2017 nicolesawler.
 *

 */

//document.getElementsByClassName("btn-goals-edit")[0].onclick = function() {
    
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var deleteButton = document.getElementById("deleteButton");

    // Get the <span> element that closes the modal
    var closeSpan = document.getElementsByClassName("close")[0];
    var cancelModalButton = document.getElementById("cancelButton");

    // When the user clicks the button, open the modal 
    deleteButton.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    closeSpan.onclick = function() {
        modal.style.display = "none";
    }
    cancelModalButton.onclick = function() {
        modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

//}

    
    function showEncourages(goal,user,owner) {
        if (goal == "") {
            document.getElementById("encourageSpan"+goal).innerHTML = "";
            return;
        } else { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(goal,user,owner);
                    document.getElementById("encourageSpan"+goal).innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","http://localhost/goalwoke/inc/_encourages.php?g="+goal+"&u="+user+"&o="+owner,true);
            xmlhttp.send();
        }
    }

    function addAdvice(goal,user,owner) {
        var adv = document.getElementById("advice_input_"+goal).value;
        
        if (goal == "") {
            document.getElementById("advice_input_"+goal).value = "";
            return;
        } else { 
            
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(goal,user,owner);
                    document.getElementById("goal-advice-"+goal).innerHTML = this.responseText;//"Ok";
                    document.getElementById("advice_input_"+goal).value = "";
            
                }
            };
            xmlhttp.open("GET","http://localhost/goalwoke/inc/_advice.php?g="+goal+"&u="+user+"&o="+owner+"&adv="+adv,true);
            xmlhttp.send();
        }
    }

    function getAdvice(goal,owner,user) {
        if (goal == "") {
            return;
        } else { 
            
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(goal,user,owner);
                    document.getElementById("goal-advice-"+goal).innerHTML = this.responseText;//"Ok";
                    document.getElementById("advice_input_"+goal).value = "";
            
                }
            };
            xmlhttp.open("GET","http://localhost/goalwoke/inc/_getAdvice.php?g="+goal+"&o="+owner+"&u="+user,true);
            xmlhttp.send();
        }
    }

    function deleteAdvice(goal,user,owner,adv) {
        if (goal == "" || user == "" || owner == "" || adv == "")  {
            return;
        } else { 
            
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(goal,user,owner);
                    document.getElementById("goal-advice-"+goal).innerHTML = this.responseText;
            
                }
            };
            xmlhttp.open("GET","http://localhost/goalwoke/inc/_deleteAdvice.php?g="+goal+"&u="+user+"&o="+owner+"&a="+adv,true);
            xmlhttp.send();
        }
    }

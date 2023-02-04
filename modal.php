<!DOCTYPE html>
<html>
<head>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    margin:0 auto 0 auto;
    width: 400px; /* Full width */
    height: 150px; /* Full height */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
</style>
</head>
<body>
<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      Are you sure you want to delete?
    </div>
    <div class="modal-body">
      <p>Deleting this category will delete all of it's goals.</p>
      <p>Are you sure you want to do this?</p>
    </div>
    <div class="modal-footer">
        
     <form method="post" id="edit-key">
            <input name="cat-id" value="<?= $cat_item['cat_id']; ?>" style="display:none;" />
            <button name="btn-goals-delete" type="submit" class="btn-goals-delete">Yes, Delete.</button>
     </form>
      
        
        <button id="cancelButton">No, Cancel</button>
    </div>
  </div>
</div>


<button id="deleteButton">Delete</button>





<script>
// Get the modal
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
</script>

</body>
</html>
// Get the modal

window.onload = function(){ 
    var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("button");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function validateForm() {
    var x = document.forms["myForm"]["fn"].value;
    var y = document.forms["myForm"]["ln"].value;
    var z = document.forms["myForm"]["email"].value;
    var a = document.forms["myForm"]["resume"].value;

    var re = /\S+@\S+\.\S+/;

    if (x == "") {
        alert("First Name must be filled out");
        return false;
    }
   if (y == "") {
        alert("Last Name must be filled out");
        return false;
    }
   if (a == "") {
        alert("Please submit a resume");
        return false;
    }
  if (re.test(z) != true) {
        alert("Email is in the wrong format");
        return false;
    }
}
};
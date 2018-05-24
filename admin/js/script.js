//Sign-up Validation
function validate() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var confirm = document.getElementById('confirm').value;

    if(name != "" && email != "" && username !="" && password != "" && confirm != ""){
        document.getElementById("submit").disabled = false;
    }
    //Password Validation
    if (document.getElementById('password').value != document.getElementById('confirm').value) {
        document.getElementById('message').style.display= "block";
        document.getElementById('message').classList.add("bg-danger");
        document.getElementById('message').innerHTML = "Password isn't matching!";
    }
    else{
        document.getElementById('message').style.display= "none";
    }
}

//DataTable
$(document).ready(function() {
    $('#example').DataTable();
} );

    
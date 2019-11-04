function validateName(){
    var name = document.getElementById("name").value;
    name.trim(); 
    if(name.length > 0){ 
        var regexp = /^([A-z'\s]+)$/;
        if(regexp.test(name)){
            return true;
        }
        else{
            alert("Name must contain alphabet characters only");
            return false;
        }
    }
    alert("Please fill in your name.");
    return false;
}

function validateEmail(){
    var email = document.getElementById("email").value;
    email.trim();
    if(email.length > 0){ //make sure it is not empty
        var regexp = /^[0-9A-z]([\w\.-])+@([\w]+\.){1,3}([A-z]){2,3}$/;
        if(regexp.test(email)){
            return true;
        }
        else{
            alert("Email format is invalid.");
            return false;
        }
    }
    alert("Please fill in your email.");
    return false;
}
function validatePhone() {
  var phonenum = document.getElementById("phonenum").value;
  phonenum.trim();
  
  if(phonenum.length > 0){ 
        var regexp = /^[\d]{8}$/;
        if(regexp.test(phonenum)){
            return true;
        }
        else{
            alert("The mobile number you entered is not in the correct form. \n" +
				"The correct form should be 8 digits only.");
  
            return false;
        }
    }
}


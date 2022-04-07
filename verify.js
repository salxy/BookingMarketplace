
function verifyPassword() {  
    var pw1 = document.getElementById("pass1").value;  
    var pw2 = document.getElementById("pass2").value;  
    if(pw1.length < 8) {  
        document.getElementById("message").innerHTML = "<br/>Password length must be atleast 8 characters";  
        return false;  
    }  
    if(pw1.length > 15) {  
        document.getElementById("message").innerHTML = "<br/>Password length must not exceed 15 characters";  
        return false;
    }if(pw1 != pw2){
        document.getElementById("message").innerHTML = "<br/>Passwords do not match.";  
        return false;
    }

}  
function isTermsChecked(inp){
     if(inp.checked){
    document.getElementById("submit").disabled = false;
    } else{
    document.getElementById("submit").disabled = true;
    }
}

function highlight(){
    x = document.getElementById("high").style;
    x.border = "2px dashed red";
    x.marginBottom = "0";
    x.float = "left";    
}
function undoHighlight(){
    x = document.getElementById("high").style;
    x.borderStyle = "none";
}
function changeLoc(x){
    if(x == "1"){
        location.href =  "login.php";
    }else if (x == "2"){
        location.href =  "form.php";
    }

}
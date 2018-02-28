document.addEventListener("DOMContentLoaded", function(event) {
    var times = document.getElementsByClassName("comment-time");
    for(var i = 0; i < times.length; i++){
        var element = times[i];
        var ogTime = element.innerHTML;
        element.innerHTML = moment(ogTime).fromNow();
    }
});

// Shortcut function
function $(ele){
    return document.getElementById(ele);
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';
var f = Math.ceil(Math.random() * 9)+ '';
var g = Math.ceil(Math.random() * 9)+ '';
var h = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e + f + g + h;
$("txtCaptcha").value = code;
$("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
    var str1 = removeSpaces($('txtCaptcha').value);
    var str2 = removeSpaces($('CaptchaInput').value);
    if (str1 == str2){
        return true;
    }
    else{
        return false;
    }
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
    return string.split(' ').join('');
}

// validates user input in the comments section of the page
function validation(form){
    var errMsg = "";

    if(!$("comment-name").value){
        errMsg += "Please enter a name<br/>";
    }

    if($("comment-name").value.length > 15){
        errMsg += "Name must be a max length of 15 characters<br/>";
    }

    if(!$("comment-body").value){
        errMsg += "Please enter a comment<br/>";
    }

    if(form.CaptchaInput.value == ""){
        errMsg += "Please Enter CAPTCHA Code.<br/>";
    }

    if(form.CaptchaInput.value != ""){
        if(ValidCaptcha(form.CaptchaInput.value) == false){
            errMsg += "The CAPTCHA Code Does Not Match.<br/>";
        }
    }

    if(errMsg){
        var errorMessages = $("error-messages");
        errorMessages.innerHTML = "<i><strong>" + errMsg + "</strong></i>";
        return false;
    }
}

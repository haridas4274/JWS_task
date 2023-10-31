var code;
// validateCaptcha();
createCaptcha();
function createCaptcha() {
  //clear the contents of captcha div first 
  document.getElementById('captcha').innerHTML = "";
  var charsArray =
  "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
  var lengthOtp = 6;
  var captcha = [];
  for (var i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index]);
    else i--;
  }
  var canv = document.createElement("canvas");
  canv.id = "captcha";
  canv.width = 100;
  canv.height = 50;
  var ctx = canv.getContext("2d");
  ctx.font = "25px Georgia";
  ctx.strokeText(captcha.join(""), 0, 30);
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code = captcha.join("");
  document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
}
function validateCaptcha() {
  event.preventDefault();
  
  if (document.getElementById("cpatchaTextBox").value == code) {
    // alert("Valid Captcha");
    var btn=document.getElementById("validBtn");
    btn.classList.replace("validBtn", "validedBtn");
    btn.innerText="Verified";
    document.getElementById("regEvent").innerHTML =` <button class="btn btn-success" id="register">Register</button>`;
  }else{
    // alert("Invalid Captcha. try Again");
    document.getElementById("cpatchaTextBox").value="";
   
    document.querySelector('.msg').innerHTML="<span>Invalid Captcha. try Again</span>";
    createCaptcha();
  }
}

///registration

$(document).ready(function() {
    $("#register").click(function() {
        var formData = $("#register-form").serializeArray();
        console.log(formData);
        if (formData[1].value != formData[3].value) {
            $(".msg").html("<span>Password Mismatch</span>");
        } else if (formData[0].value === "") {
            $("#username").css("outline-color", "red");
            alert("Please enter a username");
        } else if (formData[2].value === "") {
            $("#email").val("haridas");
            $("#email").css("outline-color", "red");
            alert("Please enter an email");
        } else if (formData[1].value === "") {
            $("#password").css("outline-color", "red");
            alert("Please enter a password");
        } else if (formData[3].value === "") {
            $("#c_password").css("outline-color", "red");
            alert("Please confirm your password");
        } else {
            // alert("Success");
            $.ajax({
                url: "functions/register.php",
                type: "POST",
                data: formData,
                success: function(response) {
                //    console.log(response);
                if(response=true){
                    $('#error').text('Register Successfull');
                    $("#registerModal").modal('hide');

                }else{
                    $('#error').text('Register Failed');
                }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    });
});



//login 
$("#login").click(function(e){
    e.preventDefault();
    var logData=$("#login-form").serializeArray();
    // console.log(logData);
    var msg=$('.loginerror');
    $.ajax({
        url: "functions/login.php",
        type: "POST",
        data: logData,
        success: function(response) {
           console.log(response);
        if(response==1){
            msg.text('Login Successfull');
            msg.css("color", "red");
            setTimeout(() => {
                $("#exampleModalToggle").modal('hide');
                // alert("jarda");
            }, 500);

        }else{
            msg.text('Invalid User');
            msg.css("color", "red");
        }
        },
        error: function(error) {
            console.log(error);
        }
    });
});

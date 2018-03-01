$(document).ready(function(){
  $('#goRight').on('click', function(){
    $('#slideBox').animate({
      'marginLeft' : '0'
    });
    $('.topLayer').animate({
      'marginLeft' : '100%'
    });
  });
  $('#goLeft').on('click', function(){
    $('#slideBox').animate({
      'marginLeft' : '50%'
    });
    $('.topLayer').animate({
      'marginLeft': '0'
    });
  });
});

///for animated search bar

// $(document).ready(function(){
//     $('#search-trigger').click(function(){
//         $('#search-input').toggleClass('search-input-open');
//     });

//     $(document).click(function(e){
//         if(!$(e.target).closest('.ngen-search-form').length){
//             $('#search-input').removeClass('search-input-open');
//         }
//     })
// });


$(document).ready(function()
{
  $(".signUpBtn").click(function()
  {
    var registeremail = $("#registeremail").val();
    var registerpassword =$("#registerpassword").val();
    var confirmpassword = $("#confirmpassword").val();
    var isValid = true;

    //validate email
    if(registeremail == "")
    {
      $("#registeremail").next().text("This field is required");
      isValid = false;
    }
    else
    {
      $("#registeremail").next().text("");
    }

    //validate password
    if(registerpassword == "")
    {
      $("#registerpassword").next().text("This field is required");
    }
    else{
      $("#registerpassword").next().text("");
    }

    //validate confirm password

    if(confirmpassword == "")
    {
      $("#confirmpassword").next().text("This field is required");
    }
    else{
      $("#confirmpassword").next().text("");
    }
  });

  $("#login").click(function()
  {
    var loginemail = $("#loginemail").val();
    var loginpassword= $("#loginpassword").val();
    var isValid = true;

    if( loginemail == "")
    {
      $("#loginemail").next().text("This field is required");
    }
    else
    {
      $("#loginpassword").next().text("This field is required");
    }
  });

});

// regular expression

$(document).ready(function()
{
  $("#userNameErrorMsg").hide();
  $("#emailErrorMsg").hide();
  $("#passwordErrorMsg").hide();
  $("#confirmpasswordErrorMsg").hide();
var error_userName = true;
var error_email = true;
var error_password = true;
var error_confirmpassword = true;

$("#name").focusout(function()
  {
    check_userName();
  
});

$("#registeremail").focusout(function()
{
  // alert("hi");
  check_email();
});

$("#registerpassword").focusout(function()

{
  // alert("hi");
  check_password();
});

$("#confirmpassword").focusout(function()
{
  check_confirmpassword();
});

function check_userName()
  {
    var userNameLength = $("#name").val().length;

    if(userNameLength < 3 || userNameLength > 20 )
    {
      $("#userNameErrorMsg").html("Please enter valid name");
      $("#userNameErrorMsg").show();
      error_userName = false;

    }
    else
    {
      $("#userNameErrorMsg").hide();
    }

  }

  function check_email()
  {
    var pattern = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);

    if(pattern.test($("#registeremail").val()) )
    {
      $("#emailErrorMsg").hide();
    }
    else{
      $("#emailErrorMsg").html("Invalid email address");
      $("#emailErrorMsg").show();
      var error_email = false;

    }
  }

 function check_password()
  {
    var passwordLength = $("#registerpassword").val().length;

    if(passwordLength < 8 )
    {
      $("#passwordErrorMsg").html("Password should be more than 8 characters");
      $("#passwordErrorMsg").show();
      error_password = false;
      

    }
    else
    {
      $("#passwordErrorMsg").hide();
    }

  }

  function check_confirmpassword()
  {
    var confirmPassword = $("#registerpassword").val();
    var confirmTypedPassword = $("#registerConfirmPassword").val();

    if(confirmPassword != confirmTypedPassword)
    {
      $("#confirmPasswordErrorMsg").html("Passwords don't match");
       $("#confirmPasswordErrorMsg").show();
       var error_confirmpassword = false;
    }
    else
    {
       $("#confirmPasswordErrorMsg").hide();
    }

  }


});

$(document).ready(function()
{
 $("#logInEmail").hide();
 $("#logInPassword").hide();

 var error_logInEmail = true;
 var error_logInPassword = true;

$("#loginemail").focusout(function()
{
  check_emaillogIn();
});

$("#loginpassword").focusout(function()
{
 check_passwordLogIn();
});

function check_emaillogIn()
{
  var patternEmail = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
   if(patternEmail.test($("#loginemail").val()))
   {
      $("#logInEmail").hide();

   }
   else
   {
     $("#logInEmail").html("Enter a valid email address");
      $("#logInEmail").show();
      error_logInEmail = false;
   }
}

function check_passwordLogIn()
{
  var passwordLogIn = $("#loginpassword").val().length;

  if(passwordLogIn < 8)
  {
    $("#logInPasswordMsg").html("Password is too small");
    $("#logInPasswordMsg").show();
    error_logInPassword = false;
    
  }

  else
  {
    $("#logInPasswordMsg").hide();
  }
}


});

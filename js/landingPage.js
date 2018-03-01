$(document).ready(function()
{
 $("#contactNameMsg").hide();
 $("#contactEmailMsg").hide();

 var error_contactEmailId = true;
 var error_fullName = true;

$("#contactEmail").focusout(function()
{
  check_emailContact();
});

$("#fullName").focusout(function()
{
 check_contactName();
});

function check_emailContact()
{
  var patternEmailContact = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
   if(patternEmailContact.test($("#contactEmail").val()))
   {
      $("#contactEmailMsg").hide();

   }
   else
   {
     $("#contactEmailMsg").html("Enter a valid email address");
      $("#contactEmailMsg").show();
     error_contactEmailId = false;
   }
}

function check_contactName()
{
  var passwordLogIn = $("#fullName").val().length;

  if(passwordLogIn < 3)
  {
    $("#contactNameMsg").html("Enter valid name");
    $("#contactNameMsg").show();
   error_fullName = false;
    
  }

  else
  {
    $("#contactNameMsg").hide();
  }
}

$(".top").click (function(e)
{
     $('html, body').animate({scrollTop: '0px'}, 'slow');
     e.preventDefault();

});

});

// $('html, body').animate({scrollTop: '0px'}, 300);

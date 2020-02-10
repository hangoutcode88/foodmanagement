<link rel="stylesheet" type="text/css" href="loginpage.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<div class="login">
  <h1>Login to Web App</h1>
  <form id="login_form">
    <p><input type="text" name="user" id="user" placeholder="Username or Email"></p>
    <p><input type="password" name="pwd" id="pwd" placeholder="Password"></p>
    <p class="submit"><input type="submit" name="login" id="login_submit"></p>
  </form>
  <span id="error_msg"></span>
</div>

<script>
$(document).ready(function(){
  $("#login_submit").click(function(event){
    event.preventDefault();
    var username1 = $("#user").val().trim();
    var userpassword1 = $("#pwd").val().trim();
    if( username1 != "" && userpassword1 != "" ){
      $.ajax({
        url:'../../Server/ActionController/LoginAuth.php',
        type:'post',
        data: { username: username1, userpassword: userpassword1 },
        success: function(response) {
            console.log(response == 1);
            var msg = "";
            if (response == 1){
              msg = "successfully login";
            }
            else{
              msg = "invalid user";
            }
            $("#error_msg").html(msg);
        },
        error: function(error) {
            console.log(error);
        }
      });
    }
  });
});
</script>

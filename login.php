<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head><title>MINA HEALTH CARE</title>
<link rel="stylesheet" href="mina.css">
</head>
<body>
<div>
<h1>Mina Health Care</h1>
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="appointment.php">Appointments</a></li>
<li style="float:right;"><a href="login.php">Login | Register</a></li>
</ul>
</div>
	<form name="loginform" onSubmit="return validateForm(usr,pword)" action="authentication.php" method="post">
    <h3>Username
    <input type="text" name="usr" placeholder="username"></h3>
    <h3>Password
    <input type="password" name="pword" placeholder="password"></h3>
    <input type="submit" value="LOGIN" >
    <a href="register.html" style="text-decoration: none;"><h4>First time user? Register here </h4></a>
    <a href="forgotpwd.html" style="text-decoration: none;"><h4>forgot password?</h4></a>
  </form>
  <script>
      function validateForm(un,pw) {
        var un = document.loginform.usr.value;
        var pw = document.loginform.pword.value;
        
        if ((un.length == "") !! (pw.length == "")) {
            
            alert("Username or password is blank");
            return false;
        }
        else{
             if(un.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (pw.length=="") {  
                    alert("Password field is empty");  
                    return false;
                }

        }
  }
</script>
</div>
</div>
</div>
</body>
</html>
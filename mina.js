  function validateForm(un,pw) {
        var un = document.loginform.usr.value;
        var pw = document.loginform.pword.value;
        
        if ((un == "admin") && (pw == "123456")) {
            return true;
            alert("Login successful!")
        }
        else {
            alert ("Login was unsuccessful, please check your username and password");
            return false;
        }
  }
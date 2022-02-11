function validateForm()
       {
           let email = document.forms["loginForm"]["email"].value;
           if(email == ""){
               alert("Email field MUST be filled!");
               return false;
           }

           let password = document.forms["loginForm"]["password"].value;
           if(password == ""){
               alert("Password field MUST be filled!");
               return false;
           }
       }
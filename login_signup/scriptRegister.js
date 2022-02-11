function validateForm2() {
    let fname = document.forms["register"]["name"].value;
    if (fname == "") {
        alert("First name field MUST be filled!");
        return false;
    }

    let lname = document.forms["register"]["lname"].value;
    if (lname == "") {
        alert("Last name field MUST be filled!");
        return false;
    }

    let email = document.forms["register"]["email"].value;
    if (email == "") {
        alert("Email field MUST be filled!");
        return false;
    }

    let password = document.forms["register"]["password"].value;
    if (password == "") {
        alert("Password field MUST be filled!");
        return false;
    }

    let confirmPassword = document.forms["register"]["confirmPassword"].value;
    if (confirmPassword == "") {
        alert("Confirm password field MUST be filled!");
        return false;
    }

    if (confirmPassword != password) {
        alert("Password and confirmed password DON'T match!");
        return false;
    }

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}
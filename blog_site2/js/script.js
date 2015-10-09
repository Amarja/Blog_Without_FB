function validateLoginForm() {
    var lemail = document.forms["login_form"]["email"].value;
    var lpass = document.forms["login_form"]["pass"].value;

    if ((lemail == null || lemail == "") && (lpass == null || lpass == "")) {
        console.log("Please enter email address and password.");
        document.getElementById("error_msg").innerHTML = "Please enter email address and password.";
        return false;
    }
    else if (lemail == null || lemail == "") {
        console.log("Please enter email address.");
        document.getElementById("error_msg").innerHTML = "Please enter email address.";
        return false;
    }
    if (lpass == null || lpass == "") {
        console.log("Please enter password.");
        document.getElementById("error_msg").innerHTML = "Please enter password.";
        return false;
    }

}

function validateRegisterForm() {
    var remail = document.forms["register_form"]["email"].value;
    var rpass = document.forms["register_form"]["pass"].value;
    var rfname = document.forms["register_form"]["fname"].value;
    var rlname = document.forms["register_form"]["lname"].value;

    if(rfname == null || rfname == ""){
        console.log("Please enter your name.");
        document.getElementById("name_error").innerHTML = "Please enter your name.";
        return false;
    }
    if(rlname == null || rlname == ""){
        console.log("Please enter your last name.");
        document.getElementById("lname_msg").innerHTML = "Please enter your last name.";
        return false;
    }
    if(remail == null || remail == ""){
        console.log("Please enter your email address.");
        document.getElementById("email_msg").innerHTML = "Please enter your email address.";
        return false;
    }
    if(rpass == null || rpass == ""){
        console.log("Please enter your password.");
        document.getElementById("pass_msg").innerHTML = "Please enter your password.";
        return false;
    }
}

function validateBlogForm() {
    var user_disp_name = document.forms["blog_form"]["user_disp_name"].value;
    var blog_title = document.forms["blog_form"]["blog_title"].value;
    var blog_text = document.forms["blog_form"]["blog_text"].value;

    if(user_disp_name == null || blog_title == "" || blog_text == ""){
        console.log("Please fill up all the fields.");
        document.getElementById("fillup_msg").innerHTML = "Please fill up all the fields.";
        return false;
    }
}

//==============Re-Enter Password=======================
function validateRP() {
    var password1 = document.getElementById("password").value;
    var password2 = document.getElementById("re_enter_password").value;
    //alert("password1= " + password1 + ", password2= " + password2);

    if (password1 === password2) {
        document.getElementById("label_re_enter_password").innerHTML = "";
        return;
    } else {
        document.getElementById("label_re_enter_password").innerHTML = "ERROR: Passwords Do Not Match. Please Re-Enter.";
    }
}
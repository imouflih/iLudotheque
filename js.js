function SaveDetails() {
    validateControls();
}
function SaveDetails2() {
    validateControls2();
}
function SaveDetails3() {
    validateControls3();
}
function SaveDetails4() {
    validateControls4();
}

function validateControls() {
    var fname = document.getElementById("fname")
    if (fname.value == "") {
        window.alert("Veuillez entrer votre prénom");
        fname.focus();
        return false;
    }
    var lname = document.getElementById("lname")
    if (lname.value == "") {
        window.alert("Veuillez entrer votre nom");
        lname.focus();
        return false;
    }
    var email = document.getElementById("email")
    if (email.value == "") {
        window.alert("Veuillez entrer votre adresse mail");
        email.focus();
        return false;
    }
    var mobile = document.getElementById("mobile")
    if (mobile.value == "") {
        window.alert("Veuillez entrer votre numéro de téléphone");
        mobile.focus();
        return false;
    }
    var password = document.getElementById("password")
    if (password.value == "") {
        window.alert("Veuillez un mot de passe");
        password.focus();
        return false;
    }
}

function validateControls2() {
    var fname = document.getElementById("fname")
    if (fname.value == "") {
        window.alert("Veuillez entrer votre prénom");
        fname.focus();
        return false;
    }
    var lname = document.getElementById("lname")
    if (lname.value == "") {
        window.alert("Veuillez entrer votre nom");
        lname.focus();
        return false;
    }
    var email = document.getElementById("email")
    if (email.value == "") {
        window.alert("Veuillez entrer votre adresse mail");
        email.focus();
        return false;
    }
    var subject = document.getElementById("subject")
    if (subject.value == "") {
        window.alert("Veuillez écrire votre message");
        subject.focus();
        return false;
    }
}

function validateControls3() {
    var email = document.getElementById("email")
    if (fname.value == "") {
        window.alert("Veuillez entrer votre adresse mail");
        email.focus();
        return false;
    }
    var password = document.getElementById("password")
    if (lname.value == "") {
        window.alert("Veuillez entrer votre mot de passe");
        lname.focus();
        return false;
    }
}

function validateControls2() {
    var subject = document.getElementById("subject")
    if (subject.value == "") {
        window.alert("Veuillez écrire votre message");
        subject.focus();
        return false;
    }
}

function myFunction1() {
    var x = document.getElementById("senha_atual");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
function myFunction2() {
    var x = document.getElementById("senha_nova");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
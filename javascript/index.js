function gotohome(){
    var u = document.getElementById("user").value;
    var p = document.getElementById("password").value;
    if (u == "admin" && p == "admin"){
        window.location.href = "../Projeto Dsin/principal.php";
    }
    else{
        alert("Usuário ou Senha inválidos!");
    }
}
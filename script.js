function Login() {
    const nombre = document.getElementById("nombre").value;
    const clave = document.getElementById("clave").value;

    if (nombre == "" && clave == "") {

    }

}
function Registrar() {
    const nombre = document.getElementById("nombre").value;
    const clave = document.getElementById("clave").value;

    if (nombre != "" && clave != "") {
        alert("Usuario registrado con éxito");
    }else {
        alert("Por favor, complete todos los campos.");
    }
}
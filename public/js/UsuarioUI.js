import $ from "jquery";
class UsuarioUI{

    constructor(){
        
    };

    loginUI(){
        let container = document.getElementById("container");
        let containerLoginUI = document.createElement("div");
        containerLoginUI.setAttribute("class","container-fluid container-login");
        let inputNick = document.createElement("input");
        let inputPassword = document.createElement("input");
        let btnEnviar = document.createElement("button");
        inputNick.placeholder = " Introduce tu nick";
        inputPassword.placeholder = "Introduce tu contraseña";
        inputPassword.type="password";
        btnEnviar.innerHTML = "Ingresar";
        
        container.append(containerLoginUI);
        containerLoginUI.append(inputNick);
        containerLoginUI.append(inputPassword);
        containerLoginUI.append(btnEnviar);
        btnEnviar.addEventListener("click",()=>{
            let data = {
                nick : inputNick.value,
                password: inputPassword.value
            }
            
        })
    }

}
export default UsuarioUI;
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
        //evento login
        btnEnviar.addEventListener("click",()=>{
            let data = {
                nick : inputNick.value,
                password: inputPassword.value
            }
            $.ajax({
                url:'../servidor/Controllers/ControllerUser.php',
                method:"POST",
                data:{login:data},
                beforeSend:function(){
                },
                success:function(data){
                    console.log(data);
                }
            });
        })
    }

    RegisterUI(){
        //creacion de objetos
        let container = document.getElementById("container");
        let containerRegisterUI  =  document.createElement("div");
        let inputName = document.createElement("input");
        let inputLastName  = document.createElement("input");
        let inputTelephone = document.createElement("input");
        let selectSexo = document.createElement("select");
        let optionMasculino = document.createElement("option");
        let optionFemenino = document.createElement("option");
        let inputDireccion = document.createElement("input");
        let selectedCargo = document.createElement("select");
        let optionCargoDev = document.createElement("option");
        let nick = document.createElement("input");
        let password = document.createElement("input");
        let configPassword = document.createElement("input");
        let nci = document.createElement("input");
        let buttonRegister = document.createElement("button");
        
        //modificacion de objetos
        containerRegisterUI.setAttribute("class","container-fluid");
        buttonRegister.innerHTML = "Registrarse";
        optionCargoDev.innerHTML = "Desarrollador";
        optionCargoDev.setAttribute("value","Desarrolador");
        inputDireccion.setAttribute("type","text");
        inputDireccion.placeholder="Introduce tu direccion";
        optionMasculino.setAttribute("value","M");
        optionMasculino.innerHTML="Masculino";
        optionFemenino.setAttribute("value","F");
        optionFemenino.innerHTML ="Femenino";
        inputLastName.setAttribute("type","text");
        inputTelephone.setAttribute("type","number");
        inputName.setAttribute("type","text");
        inputName.placeholder="Nombres";
        inputLastName.placeholder = "Apellidos";
        inputTelephone.placeholder ="Telefono";
        nick.placeholder = "introduce tu nombre usuario";
        password.placeholder = "Contraseña";
        configPassword.placeholder = "Confirma contraseña";
        nci.placeholder = "Carnet Identidad"
        
        
        //añadir nodos
        container.append(containerRegisterUI);
        selectSexo.append(optionMasculino);
        selectSexo.append(optionFemenino);        
        containerRegisterUI.append(inputName);
        containerRegisterUI.append(inputLastName);
        containerRegisterUI.append(nci);
        containerRegisterUI.append(inputTelephone);
        containerRegisterUI.append(inputDireccion);
        containerRegisterUI.append(selectSexo);
        selectedCargo.append(optionCargoDev);
        containerRegisterUI.append(selectedCargo);
        containerRegisterUI.append(nick);
        containerRegisterUI.append(password);
        containerRegisterUI.append(configPassword);
        containerRegisterUI.append(buttonRegister);
        
        //eventos
        configPassword.addEventListener("change",()=>{
            alert("");
            if(password.value  == configPassword.value){
                console.log("son iguales");
            
            }else{
                console.log("no son iguales");
            }
        })
        buttonRegister.addEventListener("click",()=>{
           let  data = {
                name : inputName.value,
                lastname : inputLastName.value,
                direccion : inputDireccion.value,
                sexo : selectSexo.value,
                telephone : inputTelephone.value,
                cargo : selectedCargo.value,
                nick : nick.value,
                password :password.value,
                nci :nci.value
            }
            $.ajax({
                url:'../servidor/Controllers/ControllerUser.php',
                method:"POST",
                data:{user:data},
                beforeSend:function(){
                },
                success:function(data){
                    //data = JSON.parse(data);
                    console.log(data);
                }
            });

        });
        
        
    }

}
export default UsuarioUI;

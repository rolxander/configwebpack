import '../css/estilos.css';
import '../css/bootstrap.css';
import UsuarioUI from './UsuarioUI.js';
import $ from "jquery";
let usuarioUI = new UsuarioUI();
usuarioUI.loginUI();
$("#container").click(()=>{
    alert("hiciste click");
});



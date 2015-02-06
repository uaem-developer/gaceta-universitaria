
//validación            Letra        Números     Simbolos
var re = /(?=.*\d)(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!?.,@#_$\-%^&*])/;

document.getElementById("contraseniaRegistro").addEventListener("keyup", validarContrasenia);
document.getElementById("contraseniaRegistro2").addEventListener("keyup", validarIgual);
document.getElementById("domicilio").addEventListener("blur", busqueda);


function valida(str){
  if(re.test(str)){
    return true;
  }
  else{
    return false;
  }
}


function validarContrasenia(){
  //si contraseña correcta
  p= document.getElementById("contraseniaRegistro");

  if(p.value==""){
    p.parentNode.parentNode.className= "form-group";
    p.className = "form-control tooltips";
  }else{
    if(valida(p.value)){
        p.parentNode.parentNode.className= "form-group has-success";
        p.className = "form-control tooltips iconsuccess";
    }else{
        //si contraseña incorrecta
        p.parentNode.parentNode.className= "form-group has-error";
        p.className = "form-control tooltips iconfail";
    }
  }

}

function validarIgual(){
  p= document.getElementById("contraseniaRegistro");
  p2= document.getElementById("contraseniaRegistro2");


  if(p2.value==""){
    document.getElementById("gContrasenia2").className = "form-group";
    p2.className = "form-control tooltips";
  }else{
    if(p.value==p2.value && valida(p2.value)){
      document.getElementById("gContrasenia2").className = "form-group has-success";
      p2.className = "form-control tooltips iconsuccess";
    }else{
      document.getElementById("gContrasenia2").className = "form-group has-error ";
      p2.className = "form-control tooltips iconfail";
    }
  }



}

function busqueda(){
  document.getElementById("busquedamapa").value= document.getElementById("domicilio").value + ", Cuautitlán";
}

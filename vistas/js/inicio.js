/*=======================================
Seleccionar lista desplegable dependiente
=======================================

function macros(s1, s2) {

    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);

    s2.innerHTML = "";

    if(s1.value == "mp2") {
      var optionArray = ['1|Gerencia', '2|Control Interno'];
    } 
    else if(s1.value == "mp3") {
      var optionArray = ['3|Gestión Calidad', 'SIAU|SIAU', '4|Seguridad del Paciente', '5|Auditoria Asistencial', '6|Gestión Ambiental', '7|Seguridad y Salud en el trabajo'];
    }

    for (var option in optionArray) {
      var pair = optionArray[option].split("|");
      var nuevaOp = document.createElement ("option");
      
      nuevaOp.value = pair[0];
      nuevaOp.innerHTML = pair[1];
      s2.option.createElement(nuevaOp);
    }
  }

*/
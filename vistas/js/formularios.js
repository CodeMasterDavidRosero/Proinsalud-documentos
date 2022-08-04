/*=========================================
SUBIR EL DOCUMENTO
=========================================*/
$(".rutaDocumento").change(function(){

	var documento = this.files[0];
    console.log("documento", documento);
	
        /*=========================================
        SUBIR EL DOCUMENTO
        =========================================*/
        if(documento["type"]  != "application/msword" && documento["type"] != "application/vnd.openxmlformats-officedocument.wordprocessingml.document" &&
        documento["type"] != "application/vnd.ms-excel" && documento["type"] !="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" &&
        documento["type"] != "application/vnd.ms-powerpoint" && documento["type"] != "application/vnd.openxmlformats-officedocument.presentationml.presentation" &&
        documento["type"] != "image/jpeg" && documento["type"] != "image/png" &&
        documento["type"] != "application/pdf"){

            $(".rutaDocumento").val("");

            swal({
                title: "¡Formato de documento No permitido!",
                text: "Por favor, verifique el tipo de archivo...",
                type: "error",
                confirmButtonText: "¡Cerrar!"
              }); 
        } else if(documento["size"]> 20000000){

            $(".rutaDocumento").val("");            

            swal({
                title: "¡Tamaño de Documento No permitido!",
                text: "Por favor, verifique el tamaño maximo permitido...",
                type: "error",
                confirmButtonText: "¡Cerrar!"
              });       
        } else{
            var datosDocumento = new FileReader;
            datosDocumento.readAsDataURL(documento);

            
        }
})



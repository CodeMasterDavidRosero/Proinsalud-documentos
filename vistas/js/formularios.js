/*=========================================
RECUPERAR CAMBIO ID DEL SELECT MACROPROCESO
=========================================
$("#sel_macro").change(function(){
    var value2 = $(this).val();
    console.log(value2);

})

/*
$(document).ready(function(){
    $("#sel_macro").change(function(){
        var numero = $(this).val();
       
        $.ajax({
            type: "POST",
            url: "formularios",
            data: {numero:numero},
            success: function(data){
                $("#sel_proceso").html(data);

            }
        });
});
})
/*=========================================
ENVIAR EL ID MACRO AL VALUE PROCESO
==========================================*/

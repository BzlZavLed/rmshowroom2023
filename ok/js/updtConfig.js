$(document).one("click", "#subir", function () {
    var color1 = $("#color1").val();
    var color2 = $("#color2").val();
    var color3 = $("#color3").val();
    var nomEmpresa = $("#nomEmpresa").val();

    var id = $("#id").val();
    var archivo = $("#archivo").html();
    var logoActual = $("#logoActual").val();
    if (archivo == "") {
     $.ajax({
        url: "../../db/consultas/updtConfig.php",
        dataType: "text",
        type: "post",
        data: {
          id: id,
          nomEmpresa: nomEmpresa,
          color1: color1,
          color2: color2,
          color3: color3,
          archivo: archivo,
          logoActual: logoActual,

        },
    } else {
      $.ajax({
        url: "../../db/consultas/updtConfig.php",
        dataType: "text",
        type: "post",
        data: {
           id: id,
          nomEmpresa: nomEmpresa,
          color1: color1,
          color2: color2,
          color3: color3,
          archivo: archivo,
          logoActual: archivo,
        },
        async: true,
        beforeSend: function () {},
        complete: function () {},
        error: function (resp) {
          console.log(resp);
        },
        success: function (resp) {
          document.getElementById("producto").click();
          document.getElementById("cons").click();
          swal("Alerta", resp, "success");
        },
      });
    }
  });
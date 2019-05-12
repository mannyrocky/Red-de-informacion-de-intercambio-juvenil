$(document).ready(function(){
    $(".btnn").click(function(){
        var form = "";
        var titulo = $("#modalTitle6");
        var body = $("#bodyModal6");
        form+='<form><div class="row"><div class="col">';
       form+='<input class="btn btn-info" name="uploadedfile" type="file" ></div><div class="col"><input class="btn btn-info" name="uploadedfile" type="file" ></div></div>';
       form+='<div class="row mt-4"><div class="col"><input class="btn btn-info" name="uploadedfile" type="file" ></div><div class="col"><input class="btn btn-info" name="uploadedfile" type="file" ></div></div></form>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" name="uploadedfile" type="file" ></div>';
       body.html(form);
       titulo.html('Editar carrusel');
    });
});
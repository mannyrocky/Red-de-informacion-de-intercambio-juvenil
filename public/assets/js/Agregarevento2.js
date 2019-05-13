$(document).ready(function(){
    $(".dependencia").click(function(){
        var form = "";
        var titulo = $("#titledependencia");
        var body = $("#bodydependencia");
        form+='<form><div class="row">';
       form+='<div class="col"><input type="text" class="form-control" placeholder="Nombre de la Dependencia" name="nombredep"></div></div>';
       form+='<div class="row mt-4"><div class="col"><input type="text" class="form-control" placeholder="Director" name="director" id="director"></div><div class="col"><input type="text" class="form-control" placeholder="url" name="url" id="url"></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion" id="descripciondep" name="descripciondep"></textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" name="imagendep" id="imagendep" type="file" /></div>';
       body.html(form);
       titulo.html('Agregar Dependencia');
    });
});
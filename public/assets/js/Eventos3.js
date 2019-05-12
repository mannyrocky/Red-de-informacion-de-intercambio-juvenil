$(document).ready(function(){
    $(".juventud").click(function(){
        var form = "";
        var titulo = $("#modalTitle3");
        var body = $("#bodyModal3");
        form+='<form><div class="row"><div class="col">';
       form+='<input type="text" class="form-control" placeholder="Id"></div><div class="col"><input type="text" class="form-control" placeholder="Titulo"></div></div>';
       form+='<div class="row mt-4"><div class="col"><input type="text" class="form-control" placeholder="Autor"></div><div class="col"><input type="text" class="form-control" placeholder="fecha"></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion"></textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" name="uploadedfile" type="file" /></div>';
       body.html(form);
       titulo.html('Editar Noticias sobre la Juventud');
    });
});
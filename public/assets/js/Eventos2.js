$(document).ready(function(){
    $(".dependencia").click(function(){
        var form = "";
        var titulo = $("#modalTitle2");
        var body = $("#bodyModal2");
        form+='<form><div class="row"><div class="col">';
       form+='<input type="text" class="form-control" placeholder="Id"></div><div class="col"><input type="text" class="form-control" placeholder="Dependencia"></div></div>';
       form+='<div class="row mt-4"><div class="col"><input type="text" class="form-control" placeholder="Director"></div><div class="col"><input type="text" class="form-control" placeholder="Url"></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion"></textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" name="uploadedfile" type="file" /></div>';
       body.html(form);
       titulo.html('Editar Dependencias');
    });
});
var tableRoles;

document.addEventListener('DOMContentLoaded', function(){
    tableRoles = $('#tableRoles').DataTable({
        "aProcessing":true,
        "aServerSide":true,
        "language":{
            "url":"//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Roles/getRoles",

            "dataSrc":""
        },
        "columns":[
            {"data":"idrol"},
            {"data":"nombrerol"},
            {"data":"descripcion"},
            {"data":"status"},   
            {"data":"options"}   
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]]
    })

    //Nuevo Rol
    var formRol = document.querySelector("#formRol");
    formRol.onsubmit = function(e){
        e.preventDefault();

        var strNombre = document.querySelector('#txtNombre').value;
        var strDescripcion = document.querySelector('#txtDescripcion').value;
        var strDescripcion = document.querySelector('#listStatus').value;
        //Campo para evitar la información vacia o basura
        if(strNombre == '' || strDescripcion == '' || intStatus == '')
        {
            swal("Atención", "Todos los campos son obligatorios.", "error");
            return false;
        }
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url+'/Roles/SetRol';
        //var formElement = document.querySelector("#formRol");
        var formData = new FormData(formRol);
        request.open("POST",ajaxUrl,true);
        request.send(formData);
        request.onreadystatechange = function(){

            console.log(request);
        }
    }
})

$('#tableRoles').DataTable();

function openModal(){
    $('#modalFormRol').modal('show');
}
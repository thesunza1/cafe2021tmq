//get model in page
var obj_md_ud = document.getElementById('md-update');
var obj_md_cr = document.getElementById('md-create');
var obj_md_dl = document.getElementById('md-delete');
//$date = new Date();
//modal update
function md_ud(updateid) {
    $.get("/home/menulist/getshow/" + updateid,function(data){
        $('#ml-up-id').val(updateid);
        $('#ml-up-name').val(data.name);
        $('#ml-up-price').val(parseInt(data.price));
        $('#ml-up-img').attr('src','http://127.0.0.1:8000/'+ data.image );
        tinymce.get('status-up').execCommand('mceSetContent', false, data.status);
    },"json");
    var today = new Date();
    var date =('0'+today.getDate()).slice(-2) +'/'+('0'+(today.getMonth()+1)).slice(-2)+'/'+today.getFullYear();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    var dateTime = date+' '+time;
    $('#up_time').val(dateTime);
    $("#wh_id").val(updateid);
    $("#md-update").show();

}
//modal create
function md_cr() {
    var today = new Date();
    var date =('0'+today.getDate()).slice(-2) +'/'+('0'+(today.getMonth()+1)).slice(-2)+'/'+today.getFullYear();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    var dateTime = date+' '+time;
    $('#cr_times').val(dateTime);
    $('#cr_up_time').val(dateTime);
    $('#md-create').show();
}
//modal delete
function md_dl(deleteid){
    $('#md-delete').show();
    $('#wh_dl_id').val(deleteid);
}
//close model
window.onclick = function(event) {

    if(event.target== obj_md_ud) {
        obj_md_ud.style.display = "none" ;
    }
    if(event.target == obj_md_cr) {
        obj_md_cr.style.display = "none";
    }
    if(event.target== obj_md_dl) {
        obj_md_dl.style.display ="none";
    }
};
//in price  or inquantity change
//change price update
function change_ttprice() {
    //$('#up_tt').val =parseInt( $('#up_inquanti').val()) *parseInt( $('#up_price').val());
    $inquanity_up = document.getElementById('up_inquanti');
    $price_up = document.getElementById('up_price');
    $ttprice_up = document.getElementById('up_tt');
    $ttprice_up.value = parseInt($inquanity_up.value * $price_up.value);
}
$('#up_price').change(change_ttprice);
$('#up_inquanti').change(change_ttprice);
//change price create
function change_ttprice_cr() {
    //$('#up_tt').val =parseInt( $('#up_inquanti').val()) *parseInt( $('#up_price').val());
    $inquanity_up = document.getElementById('cr_inquanti');
    $price_up = document.getElementById('cr_price');
    $ttprice_up = document.getElementById('cr_tt');
    $ttprice_up.value = parseInt($inquanity_up.value * $price_up.value);
}
$('#cr_price').change(change_ttprice_cr);
$('#cr_inquanti').change(change_ttprice_cr);




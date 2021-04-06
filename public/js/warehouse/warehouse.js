
var obj_md_ud = document.getElementById('md-update');
//$date = new Date();

function md_ud(updateid) {
    $.get("/home/warehouse/getshow/" + updateid,function(data){
        $('#wh_id').val(updateid);
        $('#ud_name').val(data.toName);
        $('#up_price').val(data.price);
        $('#up_inquanti').val(data.inquantity);
        $('#up_tt').val(data.totalIn);
        //
        const cre_at = new Date(data.created_at);
        //
        $('#cr_time').val(cre_at.toLocaleString().replace(',',''));
        //$('#up_time').val(data.nowtime);
        $test = data.created_at;
        new Date($test);
        console.log(new Date($test));
    },"json");
    var today = new Date();
    var date =('0'+today.getDate()).slice(-2) +'/'+('0'+(today.getMonth()+1)).slice(-2)+'/'+today.getFullYear();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    var dateTime = date+' '+time;
    $('#up_time').val(dateTime);
    $("#wh_id").val(updateid);
    $("#md-update").show();

}
window.onclick = function(event) {

    if(event.target== obj_md_ud) {
        obj_md_ud.style.display = "none" ;
    }
};
//in price  or inquantity change

function change_ttprice() {
    //$('#up_tt').val =parseInt( $('#up_inquanti').val()) *parseInt( $('#up_price').val());
    $inquanity_up = document.getElementById('up_inquanti');
    $price_up = document.getElementById('up_price');
    $ttprice_up = document.getElementById('up_tt');
    $ttprice_up.value = parseInt($inquanity_up.value * $price_up.value);
}
$('#up_price').change(change_ttprice);
$('#up_inquanti').change(change_ttprice);




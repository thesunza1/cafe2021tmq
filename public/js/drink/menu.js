// $(document).ready(function() {
//     $('.bnt_tables').click(function(even) {

//         $('#myModal').show();
//         var drink_id = $('.bnt_tables').attr("value");
//         var _token = $('input[name="_token"]').val();
//         $.ajax({
//             url:" {{ route('menu.getdrink')}} ",
//             method: "POST",
//             data(drink_id:drink_id , _token:_token) ,
//             success:function(data) {
//                 $('#myModal').html(data);
//             }

//         });



//     });

// });

$(window).click(function(e) {
    var model = document.getElementById('myModal');
    if(e.target ==model){
        $('#myModal').hide();
    }

})


//const { add } = require("lodash");

    var modal = document.getElementById("myModal");
    var input_table = document.getElementsByClassName('Ntable');

    function getval(numtable) {
        var tbl_num = numtable.value;
        modal.style.display = "block";
        var header = document.getElementById('tbl_name');
        header.innerText += ' ' + tbl_num;

        //get date into table;
        var addDrinks = document.getElementById('addDrinks');
        addDrinks.rows[1].cells[3].innerHTML = d.getDate() + "/" + d.getMonth() + "/" + d.getFullYear();
        //set value table in input hidden
        var len_input_table = input_table.length;
        for (let i=0 ; i<len_input_table ; i++ ){
            input_table[i].value = tbl_num;
            //console.log(input_table[i]);
        }
        //get idstatus  in table :
        let input_idstatus = document.getElementsByClassName('idStatus');
        let inp_idstatus = numtable.getElementsByClassName('idstatus')[0];
        console.log(inp_idstatus.value);
        var len_input_status = input_idstatus.length;
        for (let i=0 ; i<len_input_status ; i++ ){
            input_idstatus[i].value = inp_idstatus.value;
            //console.log(input_table[i]);
        }

        $.get("/home/getbill/"+ tbl_num, function(data){
            $('#bill').html(data);
        });
        //console.log(input_idstatus);

        //input_idstatus.value = inp_idstatus;


    }
    // Get the modal


    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal


    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
        var header = document.getElementById('tbl_name');
        header.innerText = "table ";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
            var header = document.getElementById('tbl_name');
            header.innerText = "table "
        }
    }

    //id01

    //button dropdown
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }


    //delete and insert row in tables
    function deleteRow(row) {
        var i = row.parentNode.parentNode.rowIndex;
        if(i!=1){

        }
        document.getElementById('addDrinks').deleteRow(i);
    }

    var d = new Date();

    function insRow() {
        //console.log('hi');
        var x = document.getElementById('addDrinks');
        var new_row = x.rows[1].cloneNode(true);
        var len = x.rows.length;
        new_row.cells[3].innerHTML = d.getDate() + "/" + d.getMonth() + "/" + d.getFullYear();

        // var inp1 = new_row.cells[1].getElementsByTagName('input')[0];
        // inp1.id += len;
        // inp1.value = '';
        // var inp2 = new_row.cells[2].getElementsByTagName('input')[0];
        // inp2.id += len;
        // inp2.value = '';
        x.appendChild(new_row);

    }

function changeprice(row) {
    var num = row.value ;
    var prices = row.parentNode.parentNode.cells[1];
    var price = prices.getElementsByTagName('h2')[0];
    var totalprice = row.parentNode.parentNode.cells[5];
    console.log(price.innerHTML);

    totalprice.innerHTML = num * price.innerHTML + " vnd";

}
//more





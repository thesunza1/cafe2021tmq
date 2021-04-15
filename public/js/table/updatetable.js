var md_tb_cr = document.getElementById('cr-table');
var md_tb_dl = document.getElementById('dl-table');
var md_tb_re = document.getElementById('md-restore');

function md_cr() {
    md_tb_cr.style.display = "block";
}
function md_dl() {
    md_tb_dl.style.display = "block";
}
function md_re() {
    md_tb_re.style.display = "block";
}
$(window).click(function(e){
    console.log("dsf");
    if(e.target == md_tb_cr) {

        md_tb_cr.style.display = "none";
    }
    if(e.target == md_tb_dl) {

        md_tb_dl.style.display = "none";
    }
    if(e.target == md_tb_re) {

        md_tb_re.style.display = "none";
    }
});


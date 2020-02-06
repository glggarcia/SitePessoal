/*
    MODAL
*/

let imgPalhatro = document.getElementById("luizpalhatro");
let imgDikazza = document.getElementById("dikazza");
let imgLig = document.getElementById("lig");
let imgDashboard = document.getElementById("dashboard")

let modalPalhatro = document.getElementById("modal_palhatro");
let modalDikazza = document.getElementById("modal_dikazza");
let modalLig = document.getElementById("modal_lig");
let modalDashboard = document.getElementById("modal_dashboard")

imgPalhatro.onclick = function (){
    modalPalhatro.style.display = "block";
}

imgDikazza.onclick = function () {
    modalDikazza.style.display = "block";
}

imgLig.onclick = function() {
    modalLig.style.display = "block";
}

imgDashboard.onclick = function() {
    modalDashboard.style.display = "block";
}


var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementsByClassName("close")[2];
var span2 = document.getElementsByClassName("close")[3];
var span3 = document.getElementsByClassName("close")[1];

span.onclick = function() {
    modalPalhatro.style.display = "none";
}

span1.onclick = function() {
    modalDikazza.style.display = "none";
}

span2.onclick = function() {
    modalLig.style.display = "none";
}

span3.onclick = function() {
    modalDashboard.style.display = "none";
}


/*
    Navbar
*/

function openNav() {
    document.getElementsByClassName("navbar")[0].style.width = "250px"
}

function closeNav() {
    document.getElementsByClassName("navbar")[0].style.width = "0";
}


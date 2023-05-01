
$("#list").sortable();
$( "#tabs" ).tabs();



let formInput = document.getElementById("form-input");
let input = document.getElementById("input");
let modal = document.getElementById("modal");
let btnClose1 = document.getElementById("btn-close-1");
let btnClose2 = document.getElementById("btn-close-2");


function closeModal() {
    modal.style.display = "none";
}

btnClose1.addEventListener('click', closeModal);
btnClose2.addEventListener('click', closeModal);




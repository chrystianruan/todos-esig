
$("#list").sortable();
$( "#tabs" ).tabs();


let spanIcon = document.getElementsByClassName("span-icon edit");
let formInput = document.getElementById("form-input");
let input = document.getElementById("input");
let modal = document.getElementById("modal");
let btnClose1 = document.getElementById("btn-close-1");
let btnClose2 = document.getElementById("btn-close-2");

for (let i = 0; i < spanIcon.length; i++) {
    spanIcon[i].addEventListener('click', function() {
      let idSpan = spanIcon[i].id;
      let id = idSpan.replace('span-', '');
      let editInputName = document.getElementById("edit-input-name");
      let editForm = document.getElementById("edit-form");
      $.ajax({
        type: 'GET',
        url: 'http://127.0.0.1:8000/show/todo/'+id,
        dataType: 'json',
        success: dados => {
            modal.style.display = "block";
            editInputName.value = dados.name;
            editForm.action = "/update/todo/"+id;
        }
      
      }) 
     });
}

function closeModal() {
    modal.style.display = "none";
}

btnClose1.addEventListener('click', closeModal);
btnClose2.addEventListener('click', closeModal);




const btnCancel = document.getElementById('btnCancel');
const containerAddTodoForm = document.getElementById('containerAddTodoForm');
const btnAddTodoTogleForm = document.getElementById('btnAddTodoTogleForm');

function togleAddTodoForm(){
  containerAddTodoForm.classList.toggle('hide');
  btnAddTodoTogleForm.classList.toggle('hide');
}

btnCancel.addEventListener('click', togleAddTodoForm);

btnAddTodoTogleForm.addEventListener('click', togleAddTodoForm);
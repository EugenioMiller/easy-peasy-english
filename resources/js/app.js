import './bootstrap';

//------- START MODAL ----------------------------

const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})

//--------- END MODAL ---------------------------




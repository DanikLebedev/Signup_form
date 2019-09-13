document.querySelectorAll('.modal-show').forEach(function (element) {
    element.onclick = showModal;
});

document.querySelectorAll('.modal-close').forEach(function (element) {
    element.onclick = closeModal;
});

document.querySelectorAll('.modal-wrap').forEach(function (element) {
    element.onclick = closeModal;
});

function showModal() {
    let modalId = this.dataset.modal;
    document.querySelector(modalId).classList.remove("hide");
    document.onkeydown = function (event) {
        if (event.keyCode == 27) closeModal();
    }
}

function closeModal() {
    document.querySelectorAll('.modal-wrap').forEach(function (element) {
        element.classList.add('hide');
    });
    document.onkeydown = null;
}

document.querySelector('#log-in .modal-project').onclick = function(event){
    event.stopPropagation();
}
document.querySelector('#sign-up .modal-project').onclick = function(event){
    event.stopPropagation();
}


document.querySelector('.read-rules').onclick = function () {
    document.querySelector('.form-slider').style.marginLeft = '-350px';
}

document.querySelector('.read-rules-back').onclick = function () {
    document.querySelector('.form-slider').style.marginLeft = '0';
}

document.querySelector('#agree').onchange = function(){
    if(this.checked){
        document.querySelector('#signup-submit').classList.remove('disabled');
    } else {
        document.querySelector('#signup-submit').classList.add('disabled');
    }
}
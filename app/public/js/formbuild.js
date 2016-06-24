'use strict'

function FormBuild() {
    this.count = 2;
}

FormBuild.prototype.validator = function(form) {

    let fieldValid = form.children[3].children[0];

    if (fieldValid.value != "") {
        form.submit();
    }
}

FormBuild.prototype.buttonChange = function(button) {

    button.className = "btn btn-info";
}

FormBuild.prototype.newInput = function(input) {
    
    console.log(this.count + "Вход в функцию");

    let newAttrName = "foto" + this.count,
        parentElem = document.getElementById('place'),
        button = document.getElementById('postButton');

    let newInput = document.createElement('input');
    newInput.setAttribute('type', 'file');
    newInput.setAttribute('name', newAttrName);
    newInput.setAttribute('accept', 'image/*');
    newInput.setAttribute('onchange', 'formBuild.newInput(this);');
    newInput.style.paddingTop = '5px';

    if (!input.nextElementSibling) {

        if (this.count < 5 + 1) {

            if (input.value != '') {
                parentElem.appendChild(newInput);
                this.buttonChange(button);
                this.count++;
                
                console.log(this.count + "Добавили инпут");
            }
        } else if (this.count === 5 + 1) {
            alert("Вы прикрепили максимальное количество фотографий");
        }
    }
};

let formBuild = new FormBuild();
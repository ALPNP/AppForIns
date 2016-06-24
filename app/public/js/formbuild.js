'use strict'

function FormBuild() {
    this.count = 1;
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
    
    this.count++;

    let newAttrName = "foto" + this.count,
        parentElem = document.getElementById('place'),
        button = document.getElementById('postButton');

    let newInput = document.createElement('input');
    newInput.setAttribute('type', 'file');
    newInput.setAttribute('name', newAttrName);
    newInput.setAttribute('accept', 'image/*');
    newInput.setAttribute('onchange', 'formBuild.newInput(this);');
    newInput.style.paddingTop = '5px';
    
    this.count--;

    if (this.count < 5) {
        
        if (input.value != '') {
            parentElem.appendChild(newInput);
            this.buttonChange(button);
        }
    } else if (this.count === 5) {
        alert("Вы прикрепили максимальное количество фотографий");
    }
    
    this.count++;
};

let formBuild = new FormBuild();
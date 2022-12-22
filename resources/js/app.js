import './bootstrap';

const myForm = document.getElementById("choice-list");

function addChoice() {

    const nef_wrapper = document.createElement("div");
    const nef = document.createElement("input");
    const btnAdd = document.createElement("button");
    const btnDel = document.createElement("button");

    nef_wrapper.classList.add("choices-input");

    btnAdd.type = "button";
    btnAdd.classList.add("btn-add-choice");
    btnAdd.innerText = "+";
    btnAdd.setAttribute("onclick", "addChoice()");

    btnDel.type = "button";
    btnDel.classList.add("btn-del-choice");
    btnDel.innerText = "-";

    nef.type = "choice";
    nef.name = "choice_field";
    nef.setAttribute("required", "");
    nef.classList.add("input-field");

    nef_wrapper.appendChild(nef);
    nef_wrapper.appendChild(btnAdd);
    nef_wrapper.appendChild(btnDel);

    myForm.appendChild(nef_wrapper);
    btnDel.addEventListener("click", removeChoice);
}

function removeChoice(el) {
    const field = el.target.parentElement;
    field.remove();
}

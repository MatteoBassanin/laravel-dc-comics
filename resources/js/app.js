import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


let deleting = document.querySelector('.delete_button');

function Doublecheck() {
    prompt("sei sicuro ?");
}

deleting.addEventListener(click, Doublecheck, false);
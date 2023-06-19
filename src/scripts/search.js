function onchange() {
    if (this.value) {
        submit.disabled = false;
    }
    else {
        submit.disabled = true;
    }
}

textbox.oninput = onchange;
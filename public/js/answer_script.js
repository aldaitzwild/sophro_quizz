const answerBtns = document.getElementsByClassName('answerBtn');

Array.prototype.forEach.call(answerBtns, function (btn) {
    btn.addEventListener('click', function () {
        this.classList.toggle('bg-white');
        this.classList.toggle('selectedBtn');
        
        this.children[0].value = this.children[0].value == "true" ? "false" : "true";
    });
});


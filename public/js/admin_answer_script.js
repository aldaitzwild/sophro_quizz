function changeBgParent(checkbox) {
    checkbox.parentNode.classList.toggle('bg-success');
}

const addAnswerBtn = document.getElementById('addAnswerBtn');
addAnswerBtn.addEventListener('click', function (e) {
    let answerCount = parseFloat(document.getElementById('answerCount').value) + 1;
    document.getElementById('answerCount').value = answerCount;

    const newAnswer = document.createElement('p');
    newAnswer.classList.add('answer');
    newAnswer.classList.add('d-flex');
    newAnswer.classList.add('gap-3');
    newAnswer.classList.add('p-3');
    newAnswer.classList.add('border');
    newAnswer.classList.add('rounded');
    newAnswer.classList.add('bg-secondary');
    newAnswer.innerHTML = '<input type="text" class="form-control" name="' + answerCount +'_anwser" id="' + answerCount +'_anwser"><input onchange="changeBgParent(this);" class="form-check-input" type="checkbox" name="' + answerCount +'_anwser_correct" id="' + answerCount +'_anwser_correct">';
    const answerContainer = document.getElementById('answerContainer');
    answerContainer.append(newAnswer);
    e.preventDefault();
});
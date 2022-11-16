function inputValue() {
    let user = document.querySelector(".user");
    let userValue = user.value;
    fetch(`index.php?name=${userValue}`)
        .then(response => response.text())
        .then(textResult => {
            let result = document.querySelector(".check")
            result.innerHTML = " Ваш результат: " + textResult
        })


}
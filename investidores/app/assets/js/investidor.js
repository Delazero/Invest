let btn = document.getElementById('btn-check');

btn.addEventListener('click', () => {
    let capital = document.getElementById('capital').value;
    if (capital !== '') {
        let capitalCortado = capital.split('');
        let i = capital.length - 1;

        if (capitalCortado.indexOf(',') >= 0 || capitalCortado.indexOf('.') >= 0) {
            capitalCortado[i - 3] % 2 == 0 ? window.alert("Capital investido e par!") : window.alert("Capital investido e impar!");
        } else {
            capitalCortado[i] % 2 == 0 ? window.alert("Capital investido e par!") : window.alert("Capital investido e impar!");
        }
    } else {
        window.alert("Capital possui um valor vazio!!");
    }
})
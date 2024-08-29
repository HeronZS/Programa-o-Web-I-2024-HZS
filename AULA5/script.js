function calcular() {
    var num1 = parseFloat(document.getElementById('numero1').value);
    var num2 = parseFloat(document.getElementById('numero2').value);
    var operacao = document.getElementById('operacao').value;
    var resultado;

    if (operacao === '+') {
        resultado = num1 + num2;
    } else if (operacao === '-') {
        resultado = num1 - num2;
    } else if (operacao === '*') {
        resultado = num1 * num2;
    } else if (operacao === '/') {
        resultado = num1 / num2;
    }

    var resultadoDiv = document.getElementById('resultado');

    if (resultado > 0) {
        resultadoDiv.className = 'resultado verde';
    } else if (resultado < 0) {
        resultadoDiv.className = 'resultado vermelho';
    } else {
        resultadoDiv.className = 'resultado cinza';
    }

    resultadoDiv.textContent = resultado;
}
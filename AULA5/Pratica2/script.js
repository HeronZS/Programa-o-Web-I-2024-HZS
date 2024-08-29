function adicionarLinhaTotalizadora() {
    const tabela = document.getElementById('tabela-notas');
    const linhas = tabela.rows;
    const numSemestres = 3;
    const numNotas = 3;

    const linhaMedia = tabela.insertRow(-1);
    const celulaMedia = linhaMedia.insertCell(0);
    celulaMedia.textContent = "Média";

    for (let i = 1; i <= numSemestres * numNotas; i++) {
        let soma = 0;
        let count = 0;
        for (let j = 1; j < linhas.length - 1; j++) {
            const nota = parseFloat(linhas[j].cells[i].textContent);
            if (!isNaN(nota)) {
                soma += nota;
                count++;
            }
        }
        const media = soma / count;
        const celulaMediaNota = linhaMedia.insertCell(i);
        celulaMediaNota.textContent = media ? media.toFixed(2) : '';
    }
}

function adicionarColunaTotalizadora() {
    const tabela = document.getElementById('tabela-notas');
    const linhas = tabela.rows;
    const numSemestres = 3;
    const numNotas = 3;

    const cabecalho = linhas[0];
    cabecalho.cells[0].colSpan += 1;
    const novaCelulaCabecalho = document.createElement('th');
    novaCelulaCabecalho.textContent = 'Média Final';
    linhas[1].appendChild(novaCelulaCabecalho);

    for (let i = 2; i < linhas.length; i++) {
        let soma = 0;
        let count = 0;
        for (let j = 1; j <= numSemestres * numNotas; j++) {
            const nota = parseFloat(linhas[i].cells[j].textContent);
            if (!isNaN(nota)) {
                soma += nota;
                count++;
            }
        }
        const mediaFinal = soma / count;
        const novaCelulaMedia = linhas[i].insertCell(-1);
        novaCelulaMedia.textContent = mediaFinal ? mediaFinal.toFixed(2) : '';
    }
}

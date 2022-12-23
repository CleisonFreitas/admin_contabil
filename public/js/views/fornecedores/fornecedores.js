import { FornecedorController } from "../../controllers/FornecedorController.js";
let address = $('#address-tab');
let geral = $('#geral-tab');
const changeGeral = () => {
    return (
        geral.classList.add('bg-navy'),
        address.classList.remove('bg-navy')
    );
}
const changeAddress = () => {
    return (
        address.classList.add('bg-navy'),
        geral.classList.remove('bg-navy')
    );
}

// Formulando tabela
let tableContent = $("#table-content");
let tableAvisoFornecedor = document.createElement('h5');
tableAvisoFornecedor.className = 'text-secondary text-center';
tableAvisoFornecedor.innerHTML = 'Nenhum fornecedor encontrado';
tableContent.appendChild(tableAvisoFornecedor);


const dados = await FornecedorController.getAll();

if(dados.length > 0) {
    tableContent.removeChild(tableAvisoFornecedor);
    dados.forEach(item => {
        console.log(item)
        let contentTR = document.createElement("tr");
        let contentBody = $("#tbody-content");
        let documento = `
            <td>${item.nm_fornecedor}</td>
            <td>${item.email}</td>
            <td>${item.telefone}</td>
            <td>${item.celular}</td>
        `;
        contentTR.innerHTML = documento;
        contentBody.appendChild(contentTR);
    })

}



const $ = document.querySelector.bind(document);
let tabela = $("#table-card");
let contentHide = $('#content-card');

let newRegistro = $("#novo-cadastro");



const AdicionarRegistro = () => {
    contentHide.classList.remove('card-invisible')
    tabela.classList.add('card-invisible')

};

const cancelarRegistro = () => {
    contentHide.classList.add('card-invisible')
    tabela.classList.remove('card-invisible')
}
newRegistro.addEventListener("click",AdicionarRegistro);


const $ = document.querySelector.bind(document);
let tabela = $("#table-card");
let contentHide = $('#content-card');
let newRegistro = $("#novo-cadastro");

const AdicionarRegistro = () => {
    contentHide.classList.toggle('card-invisible')
    tabela.classList.toggle('card-invisible')
    newRegistro.innerHTML =
        newRegistro.innerHTML == '<i class="fas fa-plus-circle mx-2"></i>Adicionar novo registro' ? `<i class="fas fa-list mx-2"></i> Listagem de registros` : `<i class="fas fa-plus-circle mx-2"></i>Adicionar novo registro`;

};

const cancelarRegistro = () => {
    contentHide.classList.add('card-invisible')
    tabela.classList.remove('card-invisible')
}
newRegistro.addEventListener("click", AdicionarRegistro);

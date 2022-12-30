const $ = document.querySelector.bind(document);
let tabela = $("#table-card");
let contentHide = $('#content-card');
let newRegistro = $("#novo-cadastro");

const AdicionarRegistro = () => {
    contentHide.classList.toggle('card-invisible')
    tabela.classList.toggle('card-invisible')
    newRegistro.innerHTML =
        newRegistro.innerHTML == '<i class="fas fa-plus-circle mx-2"></i>Adicionar novo registro' ? `<i class="fas fa-list mx-2"></i> Listagem de registros`: `<i class="fas fa-plus-circle mx-2"></i>Adicionar novo registro`;

};

const cancelarRegistro = () => {
    contentHide.classList.add('card-invisible')
    tabela.classList.remove('card-invisible')
}
newRegistro.addEventListener("click", AdicionarRegistro);

// Api para busca de CEPs

let logradouro = $("#logradouro");
let bairro = $("#bairro");
let cidade = $("#cidade");
let uf = $("#uf")
const BuscaCEP = async () => {
    let cep = $("#cep").value;
    return await fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => response.json())
        .then(result => {
            if (result.erro) {
                throw Error('Cep não encontrado! Por favor, verifique se foi digitado corretamente e se existe')
            }
            logradouro.value = result.logradouro;
            bairro.value = result.bairro;
            cidade.value = result.localidade;
            uf.value = result.uf;
        })
        .catch(erro => {
            alert(erro)
        });
}

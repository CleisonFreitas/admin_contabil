const $ = document.querySelector.bind(document);
let tabela = $("#table-card");
let contentHide = $('#content-card');

const adicionarRegistro = () => {
    contentHide.classList.remove('card-invisible')
    tabela.classList.add('card-invisible')

};

const cancelarRegistro = () => {
    contentHide.classList.add('card-invisible')
    tabela.classList.remove('card-invisible')
}

let pushMenu = $("[data-widget:pushmenu]");
console.log(pushMenu);

pushMenu.addEventListener("click", () => {
    let body = $(".sidebar-mini");
    body.classList.add("sidebar-open")
});

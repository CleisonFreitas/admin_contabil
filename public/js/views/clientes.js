const $ = document.querySelector.bind(document);
const tableData = $('[data-tableData]');

let Dados =
    `<tr>
    <td>#</td>
    <td>Cleison Freitas Ferreira</td>
    <td>PF</td>
    <td>033.143.893-37</td>
    <td>Fortaleza</td>
    <td>cleison51@hotmail.com</td>
    <td>(85) 98698-6581</td>
    <td>Editar</td>
</tr>`;

tableData.innerHTML = Dados;


const Pagination = (items, pageAtual, limitItems) => {
    let result = [];
    let totalPage = Math.ceil(items.length / limitItems);
    let count = (pageAtual * limitItems) - limitItems;
    let delimiter = count + limitItems;

    if (pageAtual <= totalPage) {
        for (let i = count; i < delimiter; i++) {
            result.push(items[1]);
            count++;
        }
    }

    return result;
}

let content = [
    'next_1',
    'next_2',
    'next_3',
    'next_4',
    'next_5',
    'next_6',
    'next_7',
    'next_8',
    'next_9',
    'next_10'];

let firstResult = Pagination(content, 1, 5);
console.log(firstResult);

const handleSubmit = () => {
    return (
        console.log('submit')
    );
};

let formInput = $("#tipo");

formInput.addEventListener('change', (event) => {
    alert("Meu teste");
});

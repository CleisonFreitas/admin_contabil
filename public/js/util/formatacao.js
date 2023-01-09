import { ApiData } from "../services/ApiData.js";

// Gerando mensagens de erro
const ResultReturn = (result,msg) => {
 //   return console.log(result)
    if (result.errors) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Um problema inesperado ocorreu. Verifique as informações e tente novamente!'
        })
        Object.keys(result.errors).forEach(key => {
            // nome do campo console.log(key);
            // array de erros console.log(result.errors[key]);
            let smallMsg = $(`.msg-erro--${key}`);
            result.errors[key].forEach(item => {
                smallMsg.innerHTML = `<b>*${item}*</b>`;
            })
        });

        return result;
    } else {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: msg,
            showConfirmButton: false,
            timer: 1500
        })

    }

}

/* Paginação */
const Pagination = (dados) => {
    let lastPage = dados.last_page
    let totalPage = $("#total_page");
    let current_page = dados.current_page;
    totalPage.innerHTML = ``;
    for (let i = 1; i <= lastPage; i++) {
        let pageOption = document.createElement('option');
            pageOption.className = `page-${i}`
            pageOption.innerHTML = i
            totalPage.appendChild(pageOption)

        if(pageOption.innerHTML == current_page) {
            let optionAttribute = $(`.page-${current_page}`);
            optionAttribute.setAttribute("selected", "selected");
        }
    }
}

/* Executando dados */
async function execData(url,dados) {
    if (dados.id !== "") {
        const result = await ApiData.UpdateData(url, dados, dados.id);
        return result
    } else {
        const result = await ApiData.CreateData(url, dados);
        return result
    }
}

export const Util = {
    ResultReturn,
    Pagination,
    execData
}

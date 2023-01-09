import { Util } from "../util/formatacao.js";

const FetchAllData = async (url) => {
    try {
        const data = await fetch(url);
        const response = await data.json();

        const dados = {
            data: response.data,
            current_page: response.current_page,
            page: response.page,
            last_item: response.last_item,
            per_page: response.per_page,
            prev_page_url: response.prev_page_url,
            next_page_url: response.next_page_url,
            last_page: response.last_page,
            total: response.total
        }
        return dados;
    } catch (erro) {
        return erro
    }
}

const FetchData = async(url,id) => {
    try{
        const data = await fetch(url+`/${id}`);
        const response = await data.json();

        return response;
    }catch(error) {
        console.log(error)
    }
}

const CreateData = async (url,dados) => {
    try {
        const data = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(dados),
        })
        const response = await data.json();

        let msg = 'Registro realizado com sucesso!'
        Util.ResultReturn(response,msg)

        return response;
    } catch (erros) {
        return erros
    }
}

const UpdateData = async(url,dados,id) => {
    try{
        const data = await fetch(url+`/${id}`, {
            method: 'PUT',
            headers: {
                "Content-type": "application/json"
            },
            body: JSON.stringify(dados)
        });
        const response = await data.json();

        let msg = 'Registro atualizado com sucesso!'
        Util.ResultReturn(response,msg)

        return response;
    }catch(error) {
        console.log(error)
    }
}

const DeleteData = async(url,id) => {
    try{
        const data = await fetch(url+`/${id}`, {
            method: 'DELETE'
        });
        const response = await data.json();
        return response;
    }catch(errors) {
        return errors
    }
}

export const ApiData = {
    FetchAllData,
    CreateData,
    FetchData,
    UpdateData,
    DeleteData
}

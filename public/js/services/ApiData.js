import { Util } from "../util/formatacao.js";

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
        const response = data.json();

        let msg = 'Registro realizado com sucesso!'
        Util.ResultReturn(response,msg)

        return response;
    } catch (e) {
        return e
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

export const ApiData = {
    CreateData,
    FetchData,
    UpdateData
}

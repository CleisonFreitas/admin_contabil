import { RouteApi } from "../routes/RouteApi.js";

const CreateData = async (dados) => {
    try {
        const data = await fetch(RouteApi.fornecedorURL, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(dados),
        })
        const response = data.json();
        return response;
    } catch (e) {
        return e
    }
}

export const ApiData = {
    CreateData
}

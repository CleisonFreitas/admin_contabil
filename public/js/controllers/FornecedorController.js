import { RouteApi } from "../routes/RouteApi.js";

const getAll = async() => {
    try{
        const data = await fetch(RouteApi.fornecedorURL);
        const response = await data.json();

        return response.data;
    }catch(error){
        console.log(error)
    }
}

export const FornecedorController = {
    getAll
}

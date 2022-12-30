import { RouteApi } from "../../routes/RouteApi.js";

let tableContent = $("#tbody-content");

tableContent.addEventListener("click", async(e) => {
    let edit = await EditFornecedor(e.target.value)
    console.log(edit)
})

const EditFornecedor = async(id) => {
    try{
        const data = await fetch(RouteApi.fornecedorURL+`/${id}`);
        const response = await data.json();

        return response;
    }catch(error) {
        console.log(error)
    }
}

import { RouteApi } from "../../routes/RouteApi.js";
import { ApiData } from "../../services/ApiData.js";

let tableContent = $("#tbody-content");

tableContent.addEventListener("click", async (e) => {
    let id = e.target.value;
    if (id !== undefined) {
        AdicionarRegistro()

        const dados = await ApiData.GetData(RouteApi.fornecedorURL, id);
        $("#id").value = await dados.data.id;
        $("#nome").value = await dados.data.nm_fornecedor;
        $("#email").value = await dados.data.email;
        $("#telefone").value = await dados.data.telefone;
        $("#celular").value = await dados.data.celular;
        $("#whatsapp").value = await dados.data.whatsapp;
        $("#cep").value = await dados.data.cep;
        $("#logradouro").value = await dados.data.logradouro;
        $("#numero").value = await dados.data.numero;
        $("#bairro").value = await dados.data.bairro;
        $("#cidade").value = await dados.data.cidade;
        $("#uf").value = await dados.data.uf;
        $("#nr_cpf").value = await dados.data.nr_cpf;
        $("#nr_cnpj").value = await dados.data.nr_cnpj;
        $("#ins_estadual").value = await dados.data.ins_estadual;
        $("#ins_municipal").value = await dados.data.ins_municipal;
        $("#observacao").value = await dados.data.observacao;
    }
})

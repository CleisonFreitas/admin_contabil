import { RouteApi } from "../../routes/RouteApi.js";
import { Util } from "../../util/formatacao.js";
import { ListPlanoContas } from "./ListPlanoContas.js";

let formulario = $("#form");

formulario.addEventListener("submit", async (e) => {
    e.preventDefault();

    const dados = {
        id: $("#id").value,
        nome: $("#nome").value,
        tipo: $("#tipo").value,
        modalidade: 'D',
        owner_id: $("#owner_id").value,
    }
    // Limpando Cache de mensagens de erro.

    const result = await Util.execData(RouteApi.planocontasURL,dados);
    if (!result.errors) {
        if ($("#id").value == "") {
            $("#id").value = result.data.id;
            await ListPlanoContas.UpdateData();
        } else {
            $(`[data-${result.data.id}-nome=nome]`).innerHTML = result.data.nome;
        //    $(`[data-${result.data.id}-tipo=tipo]`).innerHTML = result.data.tipo;
        //    $(`[data-${result.data.id}-owner=owner]`).innerHTML = result.data.owner.nome ?? "";
        }

    }



});






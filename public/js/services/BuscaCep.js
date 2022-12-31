// Api para busca de CEPs
const BuscaCEP = async () => {
    let cep = $("#cep").value;
    return await fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => response.json())
        .then(result => {
            if (result.erro) {
                throw Error('Cep não encontrado! Por favor, verifique se foi digitado corretamente e se existe')
            }
            $("#logradouro").value = result.logradouro;
            $("#bairro").value = result.bairro;
            $("#cidade").value = result.localidade;
            $("#uf").value = result.uf;
        })
        .catch(erro => {
            alert(erro)
        });
}

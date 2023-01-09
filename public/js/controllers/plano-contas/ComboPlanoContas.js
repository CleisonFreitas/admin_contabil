const urlCombo = window.location.origin+`/api/plano-contas/combo`;

let combo = $("#owner_id");

const LoadCombo = async() => {
    try{
        const data = await fetch(urlCombo);
        const response = data.json();

        return response;
    }catch(error){
        console.table(error)
    }
};

let comboOption = await LoadCombo();

comboOption.forEach(item => {
    let option = document.createElement('option');
    option.innerHTML = `${item.nome}`
    option.setAttribute('value',item.id);

    combo.appendChild(option);
});

(onload = async() => {
    await LoadCombo()
})

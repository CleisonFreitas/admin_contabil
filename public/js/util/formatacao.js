// Gerando mensagens de erro
const ResultReturn = (result) => {
    if (result.errors) {
        Object.keys(result.errors).forEach(key => {
            // nome do campo console.log(key);
            // array de erros console.log(result.errors[key]);
            let smallMsg = $(`.msg-erro--${key}`);
            result.errors[key].forEach(item => {
                smallMsg.innerHTML = `<b>*${item}*</b>`;
            })

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Um problema inesperado ocorreu. Verifique as informações e tente novamente!'
            })
        });
    } else {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Registro realizado com sucesso!',
            showConfirmButton: false,
            timer: 1500
        })

    }

}

export const Util = {
    ResultReturn
}


const GetData = async(url,id) => {
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
        return response;
    } catch (e) {
        return e
    }
}

const EditData = async(url,id) => {
    try{
        const data = await fetch(url+`/${id}`);
        const response = await data.json();

        return response;
    }catch(error) {
        console.log(error)
    }
}

export const ApiData = {
    CreateData,
    GetData
}

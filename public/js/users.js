class Pessoas {
    static async getAllUsers() {
        const queryParams = window.location.search;
        const urlParams = new URLSearchParams(queryParams);
        const userAuthToken = urlParams.get("code");

        try {
            const resp = await fetch("http://localhost:8000/api/users", {
                method: "GET",
                headers: {
                    Authorization: `Bearer ${userAuthToken}`,
                },
            }).then((resp) => resp.json());

            this.handleListUsers(resp);
        } catch (error) {}
    }

    static handleListUsers(respUsers) {
        const list = document.querySelector("#list__users");

        if (!respUsers) return;

        respUsers.forEach((user) => {
            const card = this.handleCreateCardUsers(user);
            list.insertAdjacentHTML("afterbegin", card);
        });
    }

    static handleCreateCardUsers(people) {
        const {
            nome,
            idade,
            cpf,
            rg,
            data_nasc,
            sexo,
            signo,
            mae,
            pai,
            email,
            cep,
            endereco,
            numero,
            bairro,
            cidade,
            estado,
            telefone_fixo,
            celular,
            altura,
            peso,
            tipo_sanguineo,
            cor,
        } = people;
        return `
        <li>
            <p>Nome: ${nome}</p>
            <p>Idade: ${idade}</p>
            <p>CPF: ${cpf}</p>
            <p>RG: ${rg}</p>
            <p>Data de Nascimeto: ${data_nasc}</p>
            <p>Sexo: ${sexo}</p>
            <p>Signo: ${signo}</p>
            <p>Mae: ${mae}</p>
            <p>Pai: ${pai}</p>
            <p>Email: ${email}</p>
            <p>Cep: ${cep}</p>
            <p>Endereco: ${endereco}</p>
            <p>Numero: ${numero}</p>
            <p>Bairro: ${bairro}</p>
            <p>cidade: ${cidade}</p>
            <p>estado: ${estado}</p>
            <p>telefone_fixo: ${telefone_fixo}</p>
            <p>celular: ${celular}</p>
            <p>altura: ${altura}</p>
            <p>peso: ${peso}</p>
            <p>tipo_sanguineo: ${tipo_sanguineo}</p>
            <p>cor: ${cor}</p>
        </li>
        `;
    }
}

Pessoas.getAllUsers();
Pessoas.handleListUsers();

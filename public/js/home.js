class Home {
    static async handleSubmitCsv() {
        const form = document.querySelector("#form");

        form.addEventListener("submit", async function (e) {
            e.preventDefault();
            const inputFile = document.querySelector("#input-file");
            const file = inputFile.files[0];
            const type = file.type.split("/")[1];
            if (type != "csv") {
                return window.alert("Deve ser um arquivo .csv");
            }

            const formData = new FormData();
            formData.append("file", file);

            try {
                const resp = await fetch(`http://localhost:8000/api/users`, {
                    method: "POST",
                    body: formData,
                });

                if (resp.ok) {
                    return window.alert("Pessoas cadastradas com sucesso!");
                } else {
                    return window.alert("OPPS! Ouve algum problema.");
                }
            } catch (error) {}
        });
    }
}

Home.handleSubmitCsv();

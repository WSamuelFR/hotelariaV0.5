document.addEventListener('DOMContentLoaded', () => {

    const form = document.getElementById('formNewCadastro');

    const radioHospede = document.getElementById('hospede');
    const radioEmpresa = document.getElementById('empresa');

    const pfFields = document.getElementById('pfFields');
    const pjFields = document.getElementById('pjFields');

    // Alternância PF / PJ
    function toggleTipoCadastro(tipo) {
        if (tipo === 'empresa') {
            pfFields.classList.add('d-none');
            pjFields.classList.remove('d-none');
        } else {
            pjFields.classList.add('d-none');
            pfFields.classList.remove('d-none');
        }
    }

    radioHospede.addEventListener('change', () => toggleTipoCadastro('hospede'));
    radioEmpresa.addEventListener('change', () => toggleTipoCadastro('empresa'));

    // Envio do formulário
    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const formData = new FormData(form);
        const data = {};

        // Coleta segura (InfinityFree friendly)
        formData.forEach((value, key) => {
            if (value !== null && value !== '') {
                data[key] = value.trim();
            }
        });

        // Garantia explícita de CPF ou CNPJ
        if (data.tipo === 'hospede') {
            delete data.cnpj;
        }

        if (data.tipo === 'empresa') {
            delete data.cpf;
            delete data.rg;
            delete data.gender;
            delete data.ethnicity;
            delete data.birth_date;
        }

        try {
            const response = await fetch('../controllers/cadastro_process.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            });

            const result = await response.json();

            if (result.success) {
                alert(result.message || 'Cadastro realizado com sucesso!');
                window.location.href = '../../public/index.php';
            } else {
                alert('Erro: ' + (result.message || 'Falha ao cadastrar'));
            }

        } catch (error) {
            console.error(error);
            alert('Falha na comunicação com o servidor.');
        }
    });

});

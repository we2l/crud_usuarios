$('.button-view').click(function(e) {
    e.preventDefault();
    var id = $(this).attr('id')
    var url = window.location.href + 'usuarios/' + id;
    console.log(url)
    $.ajax({
        type: 'GET',
        url: url,
        success: function(data) {
            if(data['status']) {
                var result = data['result'][0]
                var html = $('.result ul')[0]
                
                let dataUsario = result['data_nascimento'].split('T');
                dataUsario = dataUsario[0].split('-')
                dataUsario = dataUsario[2] + '/' + dataUsario[1] + '/' + dataUsario[0];
                const nome = document.createElement('li');
                const cpf = document.createElement('li');
                const data_nascimento = document.createElement('li');
                const email = document.createElement('li');
                const telefone = document.createElement('li');
                const cidade = document.createElement('li');
                const estado = document.createElement('li');
                const bairro = document.createElement('li');
                const numero = document.createElement('li');
                nome.innerHTML = 'Nome do usuário : ' + result['nome'];
                cpf.innerHTML = 'CPF do usuário : ' + result['cpf'];
                email.innerHTML = 'E-mail do usuário : ' + result['email'];
                telefone.innerHTML = 'Telefone do usuário : ' + result['telefone'];
                data_nascimento.innerHTML = 'Data de nascimento : ' + dataUsario;
                estado.innerHTML = 'Estado : ' + result['endereco']['estado'];
                cidade.innerHTML = 'Cidade : ' + result['endereco']['cidade'];
                bairro.innerHTML = 'Bairro : ' + result['endereco']['bairro'];
                numero.innerHTML = 'Numero : ' + result['endereco']['numero'];
                html.appendChild(nome)
                html.appendChild(cpf)
                html.appendChild(email)
                html.appendChild(telefone)
                html.appendChild(data_nascimento)
                html.appendChild(estado)
                html.appendChild(cidade)
                html.appendChild(bairro)
                html.appendChild(numero)

                const button = $('.modal-content .close span')
                $(button).click((e) => {
                    if(e.target.classList.contains('material-icons')) {
                        html.innerText = ''
                    }
                })
            }
        }
    })
})
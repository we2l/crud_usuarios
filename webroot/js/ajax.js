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
                console.log(html)
                const nome = document.createElement('li');
                const cpf = document.createElement('li');
                const data_nascimento = document.createElement('li');
                const email = document.createElement('li');
                const telefone = document.createElement('li');
                const endereco = document.createElement('li');
                const cidade = document.createElement('li');
                const estado = document.createElement('li');
                const bairro = document.createElement('li');
                const numero = document.createElement('li');
                nome.innerHTML = 'Nome do usuário :' + result['nome'];
                cpf.innerHTML = 'CPF do usuário :' + result['cpf'];
                email.innerHTML = 'E-mail do usuário :' + result['email'];
                telefone.innerHTML = 'Telefone do usuário :' + result['telefone'];
                data_nascimento.innerHTML = 'Data de nascimento :' + result['data_nascimento'];
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
                // for(let i in result) {
                //     const li = document.createElement('li');
                //     const text = document.createTextNode(i + ' - ' + result[i])
                //     console.log(i)  
                //     li.append(text);
                //     if(result[i] == result['endereco']) {
                //         for(let t in result['endereco']) {
                //             console.log(result['endereco'][t])
                //         }
                //     }
                    
                //     html.appendChild(li)
                // }

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
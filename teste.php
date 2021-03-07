<form class="form-cadastro" method="POST" action="/teste_bizut_cake/usuarios">

<div class="box-form flex">
    <div class="form-item">
        <label for="">Nome : </label>
        <input type="text" name="nome" placeholder="Insira seu nome" required>
    </div>

    <div class="form-item">
        <label for="">CPF : </label>
        <input type="text" name="cpf" placeholder="Insira seu cpf" required>
    </div>
</div>

<div class="box-form flex">
    <div class="form-item">
        <label for="">Email : </label>
        <input type="email" name="email" placeholder="Insira seu email" required>
    </div>

    <div class="form-item">
        <label for="">Telefone : </label>
        <input type="text" name="telefone" placeholder="Insira seu telefone" required>
    </div>
</div>
 
<div class="form-item">
        <label for="">Data de Nascimento : </label>
        <input type="date" name="data_nascimento" required>
</div>

<div class="box-form flex">
    <div class="form-item">
        <label for="">Cidade : </label>
        <input type="text" name="cidade" placeholder="Insira sua cidade" required>
    </div>

    <div class="form-item">
        <label for="">Estado : </label>
        <input type="text" name="estado" placeholder="Insira seu estado" required>
    </div>
</div>

<div class="box-form flex">
    <div class="form-item">
        <label for="">Bairro : </label>
        <input type="text" name="bairro" placeholder="Insira seu bairro" required>
    </div>

    <div class="form-item">
        <label for="">Numero : </label>
        <input type="int" name="numero" placeholder="Insira seu numero" required>
    </div>
</div>

<div class="form-item">
        <input type="submit" value="Enviar">
</div>

</form>
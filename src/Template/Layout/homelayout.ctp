<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <?= $this->Html->css('app.css') ?>
    <title>CRUD Usuários - <?= $this->fetch('title') ?></title>
    
</head>
<body>
    <header>
        <div class="container menu">
            <div class="logo">LOGO</div>
            <a class="button-create">Cadastrar Usuário</a>
            
                <div class="search">
                    <form action="">
                        <input type="text" placeholder="Buscar">
                    </form>
                </div>
            </div>
        </div>
    </header>
    <main>
        <h1>Listagem de usuários</h1>
        <div class="container intro">
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
        Desenvolvido por Weslley Araujo
    </footer>

    <?= $this->element('modal/modal') ?>
    
    <?= $this->html->script('app.js') ?>
</body>
</html>
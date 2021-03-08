<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <?= $this->Html->css('app.css') ?>
    <?= $this->html->script('jquery/jquery.min.js') ?>
    <?= $this->html->script('jquery/jquery.mask.min.js') ?>
    <title>CRUD Usuários - <?= $this->fetch('title') ?></title>
    
</head>
<body>
    <header>
        <div class="container menu">
            <div class="logo">
                <?= $this->Html->link('C . R . U . D ',
                    ['controller' => 'Usuarios', 'action' => 'index']) 
                ?>
            </div>
            <!-- <a class="button-create">Cadastrar Usuário</a> -->
            <?= $this->Html->link('Cadastrar Usuário', 
                ['controller' => 'Usuarios', 'action' => 'add'],
                ['class' => 'button-create']
            ) ?>
        </div>
    </header>
    <main>
        <h1 class="title"><?= $this->fetch('h1') ?></h1>
        <div class="container intro">
            <?= $this->fetch('content') ?>
            
        </div>
    </main>
    <footer>
        Desenvolvido por Weslley Araujo
    </footer>

    <?= $this->element('modal/modal') ?>
    <?= $this->html->script('ajax-del.js') ?>
    <?= $this->html->script('ajax-view.js') ?>
    <?= $this->html->script('app.js') ?>
    <?= $this->html->script('mask.js') ?>
</body>
</html>
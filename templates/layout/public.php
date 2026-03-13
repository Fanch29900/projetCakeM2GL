<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>Liste des Électeurs - ISEN</title>
    <?= $this->Html->css('public.css') ?>
</head>
<body class="public-body">
    <header class="public-header">
        <div class="container">
            <?= $this->Html->link(
                $this->Html->image('logo_isen.png', ['alt' => 'Logo ISEN', 'class' => 'logo-img']),
                ['controller' => 'Electeurs', 'action' => 'index'],
                ['escape' => false, 'class' => 'logo-link']
            ) ?>
            <h1>Espace Citoyen : Liste des Électeurs</h1>
        </div>
        <nav class="public-menu">
        <ul>
            <li><?= $this->Html->link('Public', ['controller' => 'Electeurs', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link('Admin', ['prefix' => 'Admin', 'controller' => 'Admin', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link('Statistiques', ['controller' => 'Stats', 'action' => 'index']) ?></li>
        </ul>
    </nav>
    </header>

    <main class="container">
        <?= $this->fetch('content') ?>
    </main>

    <footer class="public-footer">
        <p>&copy; <?= date('Y') ?> - ISEN Brest - François Mallejacq</p>
    </footer>
</body>
</html>
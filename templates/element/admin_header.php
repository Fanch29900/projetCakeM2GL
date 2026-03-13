<header class="admin-header">
    <div class="header-top">
        <?= $this->Html->link(
            $this->Html->image('logo_isen.png', ['alt' => 'Logo ISEN', 'class' => 'logo-img']),
            ['prefix' => 'Admin', 'controller' => 'Admin', 'action' => 'index'],
            ['escape' => false, 'class' => 'logo-link']
        ) ?>
        <h1>Panneau d'Administration</h1>
    </div>
    <nav class="admin-menu">
        <ul>
            <li><?= $this->Html->link('Public', ['prefix' => false,'controller' => 'Electeurs', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link('Tableau de Bord', ['prefix' => 'Admin', 'controller' => 'Admin', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link('Quartiers', ['prefix' => 'Admin', 'controller' => 'Quartier', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link('Bureaux de Vote', ['prefix' => 'Admin', 'controller' => 'BureauVote', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link('Électeurs', ['prefix' => 'Admin', 'controller' => 'Electeur', 'action' => 'index']) ?></li>
        </ul>
    </nav>
</header>

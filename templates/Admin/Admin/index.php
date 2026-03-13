<?php
$this->layout = 'admin';
?>

<div class="admin-dashboard">
    <div class="dashboard-header">
        <h2>Tableau de Bord Administration</h2>
        <p>Bienvenue dans l'interface de gestion du système de vote.</p>
    </div>

    <div class="dashboard-cards">
        <div class="card">
            <h3>Quartiers</h3>
            <p>Gérer les découpages géographiques.</p>
            <?= $this->Html->link('Gérer', ['controller' => 'Quartier', 'action' => 'index'], ['class' => 'button-admin']) ?>
        </div>

        <div class="card">
            <h3>Bureaux de Vote</h3>
            <p>Configuration des lieux de scrutin.</p>
            <?= $this->Html->link('Gérer', ['controller' => 'BureauVote', 'action' => 'index'], ['class' => 'button-admin']) ?>
        </div>

        <div class="card">
            <h3>Électeurs</h3>
            <p>Liste et inscription des votants.</p>
            <?= $this->Html->link('Gérer', ['controller' => 'Electeur', 'action' => 'index'], ['class' => 'button-admin']) ?>
        </div>
    </div>
</div>
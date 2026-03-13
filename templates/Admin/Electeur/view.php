<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Electeur $electeur
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Electeur'), ['action' => 'edit', $electeur->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Electeur'), ['action' => 'delete', $electeur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $electeur->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Electeur'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Electeur'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="electeur view content">
            <h3><?= h($electeur->nom) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($electeur->nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prenom') ?></th>
                    <td><?= h($electeur->prenom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($electeur->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Bureau') ?></th>
                    <td><?= $this->Number->format($electeur->id_bureau) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Naissance') ?></th>
                    <td><?= h($electeur->date_naissance) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
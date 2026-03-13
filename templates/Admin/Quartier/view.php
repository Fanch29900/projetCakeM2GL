<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quartier $quartier
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Quartier'), ['action' => 'edit', $quartier->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Quartier'), ['action' => 'delete', $quartier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quartier->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Quartier'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Quartier'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="quartier view content">
            <h3><?= h($quartier->nom_quartier) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom Quartier') ?></th>
                    <td><?= h($quartier->nom_quartier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($quartier->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nb Habitant') ?></th>
                    <td><?= $this->Number->format($quartier->nb_habitant) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
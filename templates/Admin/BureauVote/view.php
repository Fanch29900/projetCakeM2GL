<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BureauVote $bureauVote
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Bureau Vote'), ['action' => 'edit', $bureauVote->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bureau Vote'), ['action' => 'delete', $bureauVote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bureauVote->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bureau Vote'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bureau Vote'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="bureauVote view content">
            <h3><?= h($bureauVote->adr_bureau) ?></h3>
            <table>
                <tr>
                    <th><?= __('Adr Bureau') ?></th>
                    <td><?= h($bureauVote->adr_bureau) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($bureauVote->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nb Accesseur') ?></th>
                    <td><?= $this->Number->format($bureauVote->nb_accesseur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Quartier') ?></th>
                    <td><?= $this->Number->format($bureauVote->id_quartier) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
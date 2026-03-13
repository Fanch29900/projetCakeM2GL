<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Electeur> $electeur
 */
?>
<div class="electeur index content">
    <?= $this->Html->link(__('New Electeur'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Electeur') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nom') ?></th>
                    <th><?= $this->Paginator->sort('prenom') ?></th>
                    <th><?= $this->Paginator->sort('date_naissance') ?></th>
                    <th><?= $this->Paginator->sort('id_bureau') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($electeur as $electeur): ?>
                <tr>
                    <td><?= $this->Number->format($electeur->id) ?></td>
                    <td><?= h($electeur->nom) ?></td>
                    <td><?= h($electeur->prenom) ?></td>
                    <td><?= h($electeur->date_naissance) ?></td>
                    <td><?= $this->Number->format($electeur->id_bureau) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $electeur->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $electeur->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $electeur->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $electeur->id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
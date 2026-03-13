<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Quartier> $quartier
 */
?>
<div class="quartier index content">
    <?= $this->Html->link(__('New Quartier'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Quartier') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nom_quartier') ?></th>
                    <th><?= $this->Paginator->sort('nb_habitant') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($quartier as $quartier): ?>
                <tr>
                    <td><?= $this->Number->format($quartier->id) ?></td>
                    <td><?= h($quartier->nom_quartier) ?></td>
                    <td><?= $this->Number->format($quartier->nb_habitant) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $quartier->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quartier->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $quartier->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $quartier->id),
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
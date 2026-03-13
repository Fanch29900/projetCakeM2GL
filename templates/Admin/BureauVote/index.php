<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\BureauVote> $bureauVote
 */
?>
<div class="bureauVote index content">
    <?= $this->Html->link(__('New Bureau Vote'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bureau Vote') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('adr_bureau') ?></th>
                    <th><?= $this->Paginator->sort('nb_accesseur') ?></th>
                    <th><?= $this->Paginator->sort('id_quartier') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bureauVote as $bureauVote): ?>
                <tr>
                    <td><?= $this->Number->format($bureauVote->id) ?></td>
                    <td><?= h($bureauVote->adr_bureau) ?></td>
                    <td><?= $this->Number->format($bureauVote->nb_accesseur) ?></td>
                    <td><?= $this->Number->format($bureauVote->id_quartier) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $bureauVote->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bureauVote->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $bureauVote->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $bureauVote->id),
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
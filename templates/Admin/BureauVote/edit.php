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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bureauVote->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bureauVote->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Bureau Vote'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="bureauVote form content">
            <?= $this->Form->create($bureauVote) ?>
            <fieldset>
                <legend><?= __('Edit Bureau Vote') ?></legend>
                <?php
                    echo $this->Form->control('adr_bureau');
                    echo $this->Form->control('nb_accesseur');
                    echo $this->Form->control('id_quartier');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

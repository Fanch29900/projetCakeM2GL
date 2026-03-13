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
            <?= $this->Html->link(__('List Quartier'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="quartier form content">
            <?= $this->Form->create($quartier) ?>
            <fieldset>
                <legend><?= __('Add Quartier') ?></legend>
                <?php
                    echo $this->Form->control('nom_quartier');
                    echo $this->Form->control('nb_habitant');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

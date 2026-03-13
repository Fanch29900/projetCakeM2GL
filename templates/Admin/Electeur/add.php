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
            <?= $this->Html->link(__('List Electeur'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="electeur form content">
            <?= $this->Form->create($electeur) ?>
            <fieldset>
                <legend><?= __('Add Electeur') ?></legend>
                <?php
                    echo $this->Form->control('nom');
                    echo $this->Form->control('prenom');
                    echo $this->Form->control('date_naissance');
                    echo $this->Form->control('id_bureau');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

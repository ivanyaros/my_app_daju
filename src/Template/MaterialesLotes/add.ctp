<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Materiales Lotes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Materiales'), ['controller' => 'Materiales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materiale'), ['controller' => 'Materiales', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materialesLotes form large-9 medium-8 columns content">
    <?= $this->Form->create($materialesLote) ?>
    <fieldset>
        <legend><?= __('Add Materiales Lote') ?></legend>
        <?php
            echo $this->Form->control('lote');
            echo $this->Form->control('peso');
            echo $this->Form->control('metros');
            echo $this->Form->control('unidades');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

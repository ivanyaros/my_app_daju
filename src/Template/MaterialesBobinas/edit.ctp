<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $materialesBobina->materiale_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $materialesBobina->materiale_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Materiales Bobinas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Materiales'), ['controller' => 'Materiales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materiale'), ['controller' => 'Materiales', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materialesBobinas form large-9 medium-8 columns content">
    <?= $this->Form->create($materialesBobina) ?>
    <fieldset>
        <legend><?= __('Edit Materiales Bobina') ?></legend>
        <?php
            echo $this->Form->control('lote');
            echo $this->Form->control('numero');
            echo $this->Form->control('taras');
            echo $this->Form->control('metros_brutos');
            echo $this->Form->control('metros_netos');
            echo $this->Form->control('metros_actuales');
            echo $this->Form->control('en_uso');
            echo $this->Form->control('terminado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

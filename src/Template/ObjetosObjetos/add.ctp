<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Objetos Objetos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="objetosObjetos form large-9 medium-8 columns content">
    <?= $this->Form->create($objetosObjeto) ?>
    <fieldset>
        <legend><?= __('Add Objetos Objeto') ?></legend>
        <?php
            echo $this->Form->control('cantidad_producida');
            echo $this->Form->control('cantidad_gastada');
            echo $this->Form->control('scrap');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

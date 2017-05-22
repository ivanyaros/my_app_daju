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
                ['action' => 'delete', $ordensEstadosUsuario->ordens_estados_orden_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ordensEstadosUsuario->ordens_estados_orden_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ordens Estados Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ordens Estados'), ['controller' => 'OrdensEstados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ordens Estado'), ['controller' => 'OrdensEstados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordensEstadosUsuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($ordensEstadosUsuario) ?>
    <fieldset>
        <legend><?= __('Edit Ordens Estados Usuario') ?></legend>
        <?php
            echo $this->Form->control('parte');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

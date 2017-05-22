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
                ['action' => 'delete', $lote->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lote->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lotes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="lotes form large-9 medium-8 columns content">
    <?= $this->Form->create($lote) ?>
    <fieldset>
        <legend><?= __('Edit Lote') ?></legend>
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

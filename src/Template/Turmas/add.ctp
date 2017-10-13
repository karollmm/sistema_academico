<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Turmas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="turmas form large-9 medium-8 columns content">
    <?= $this->Form->create($turma) ?>
    <fieldset>
        <legend><?= __('Add Turma') ?></legend>
        <?php
            echo $this->Form->control('semestre');
            echo $this->Form->control('id_professor');
            echo $this->Form->control('id_disciplina');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

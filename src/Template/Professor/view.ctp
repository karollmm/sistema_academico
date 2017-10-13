<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Professor $professor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Professor'), ['action' => 'edit', $professor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Professor'), ['action' => 'delete', $professor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $professor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Professor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Professor'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="professor view large-9 medium-8 columns content">
    <h3><?= h($professor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($professor->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Siape') ?></th>
            <td><?= h($professor->siape) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($professor->id) ?></td>
        </tr>
    </table>
</div>

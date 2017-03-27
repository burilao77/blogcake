<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="posts view large-9 medium-8 columns content">
    <h3><?= h($post->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($post->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($post->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($post->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Dir') ?></th>
            <td><?= h($post->photo_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($post->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($post->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($post->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $post->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>

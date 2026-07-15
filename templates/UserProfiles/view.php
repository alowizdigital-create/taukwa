<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserProfile $userProfile
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User Profile'), ['action' => 'edit', $userProfile->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User Profile'), ['action' => 'delete', $userProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userProfile->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User Profiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User Profile'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="userProfiles view content">
            <h3><?= h($userProfile->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $userProfile->hasValue('user') ? $this->Html->link($userProfile->user->email, ['controller' => 'Users', 'action' => 'view', $userProfile->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($userProfile->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($userProfile->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($userProfile->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company Name') ?></th>
                    <td><?= h($userProfile->company_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Avatar') ?></th>
                    <td><?= h($userProfile->avatar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($userProfile->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($userProfile->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($userProfile->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($userProfile->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
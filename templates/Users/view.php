<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users view content">
            <h3><?= h($user->email) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($user->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related User Profiles') ?></h4>
                <?php if (!empty($user->user_profiles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Company Name') ?></th>
                            <th><?= __('Avatar') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->user_profiles as $userProfile) : ?>
                        <tr>
                            <td><?= h($userProfile->id) ?></td>
                            <td><?= h($userProfile->user_id) ?></td>
                            <td><?= h($userProfile->name) ?></td>
                            <td><?= h($userProfile->phone) ?></td>
                            <td><?= h($userProfile->email) ?></td>
                            <td><?= h($userProfile->company_name) ?></td>
                            <td><?= h($userProfile->avatar) ?></td>
                            <td><?= h($userProfile->created) ?></td>
                            <td><?= h($userProfile->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'UserProfiles', 'action' => 'view', $userProfile->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UserProfiles', 'action' => 'edit', $userProfile->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'UserProfiles', 'action' => 'delete', $userProfile->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $userProfile->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
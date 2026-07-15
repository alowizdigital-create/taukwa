<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\UserProfile> $userProfiles
 */
?>
<div class="userProfiles index content">
    <?= $this->Html->link(__('New User Profile'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User Profiles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('company_name') ?></th>
                    <th><?= $this->Paginator->sort('avatar') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('uuid') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userProfiles as $userProfile): ?>
                <tr>
                    <td><?= $this->Number->format($userProfile->id) ?></td>
                    <td><?= $userProfile->hasValue('user') ? $this->Html->link($userProfile->user->email, ['controller' => 'Users', 'action' => 'view', $userProfile->user->id]) : '' ?></td>
                    <td><?= h($userProfile->name) ?></td>
                    <td><?= h($userProfile->phone) ?></td>
                    <td><?= h($userProfile->email) ?></td>
                    <td><?= h($userProfile->company_name) ?></td>
                    <td><?= h($userProfile->avatar) ?></td>
                    <td><?= h($userProfile->created) ?></td>
                    <td><?= h($userProfile->modified) ?></td>
                    <td><?= h($userProfile->uuid) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userProfile->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userProfile->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $userProfile->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $userProfile->id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
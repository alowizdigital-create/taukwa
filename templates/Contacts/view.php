<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contacts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contact'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="contacts view content">
            <h3><?= h($contact->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($contact->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Firstname') ?></th>
                    <td><?= h($contact->firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($contact->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($contact->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($contact->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contact->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create Uid') ?></th>
                    <td><?= $this->Number->format($contact->create_uid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Write Uid') ?></th>
                    <td><?= $this->Number->format($contact->write_uid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($contact->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($contact->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Teams') ?></h4>
                <?php if (!empty($contact->teams)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Note') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Create Uid') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Write Uid') ?></th>
                            <th><?= __('Uuid') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($contact->teams as $team) : ?>
                        <tr>
                            <td><?= h($team->id) ?></td>
                            <td><?= h($team->name) ?></td>
                            <td><?= h($team->note) ?></td>
                            <td><?= h($team->created) ?></td>
                            <td><?= h($team->create_uid) ?></td>
                            <td><?= h($team->modified) ?></td>
                            <td><?= h($team->write_uid) ?></td>
                            <td><?= h($team->uuid) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Teams', 'action' => 'view', $team->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Teams', 'action' => 'edit', $team->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Teams', 'action' => 'delete', $team->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $team->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Messages') ?></h4>
                <?php if (!empty($contact->messages)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Receiver') ?></th>
                            <th><?= __('Content') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Create Uid') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Write Uid') ?></th>
                            <th><?= __('Uuid') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Sent Date') ?></th>
                            <th><?= __('Contact Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($contact->messages as $message) : ?>
                        <tr>
                            <td><?= h($message->id) ?></td>
                            <td><?= h($message->receiver) ?></td>
                            <td><?= h($message->content) ?></td>
                            <td><?= h($message->created) ?></td>
                            <td><?= h($message->create_uid) ?></td>
                            <td><?= h($message->modified) ?></td>
                            <td><?= h($message->write_uid) ?></td>
                            <td><?= h($message->uuid) ?></td>
                            <td><?= h($message->status) ?></td>
                            <td><?= h($message->sent_date) ?></td>
                            <td><?= h($message->contact_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Messages', 'action' => 'view', $message->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Messages', 'action' => 'edit', $message->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Messages', 'action' => 'delete', $message->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $message->id),
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
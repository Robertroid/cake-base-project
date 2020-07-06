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
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Slug') ?></th>
                    <td><?= h($user->slug) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($user->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($user->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($user->updated_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted At') ?></th>
                    <td><?= h($user->deleted_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Access') ?></th>
                    <td><?= h($user->last_access) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Superadmin') ?></th>
                    <td><?= $user->is_superadmin ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Users Roles') ?></h4>
                <?php if (!empty($user->users_roles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Role') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->users_roles as $usersRoles) : ?>
                        <tr>
                            <td><?= h($usersRoles->id) ?></td>
                            <td><?= h($usersRoles->user_id) ?></td>
                            <td><?= h($usersRoles->role) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'UsersRoles', 'action' => 'view', $usersRoles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UsersRoles', 'action' => 'edit', $usersRoles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UsersRoles', 'action' => 'delete', $usersRoles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersRoles->id)]) ?>
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

<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsersRoles extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change() : void
    {
        $table = $this->table('users_roles');
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('role', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);

        $table->addIndex([
            'user_id',
        ], [
            'name' => 'IDX_USER_ID',
        ]);
        $table->addIndex([
            'user_id', 'role',
        ], [
            'name' => 'IDX_USER_ID_ROLE',
            'unique' => true
        ]);
        $table->create();
    }
}

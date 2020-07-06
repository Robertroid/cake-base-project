<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('username', 'string', [
            'default' => null,
            'limit' => 150,
            'null' => false,
        ]);
        $table->addColumn('password', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('created_at', 'timestamp', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('updated_at', 'timestamp', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('deleted_at', 'timestamp', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('last_access', 'timestamp', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('is_superadmin', 'boolean', [
            'default' => false,
            'null' => false,
        ]);
        $table->addColumn('slug', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('role', 'string', [
            'limit' => 100,
            'default' => null,
            'null' => true
        ]);
        $table->addIndex([
            'username',
        ], [
            'name' => 'USERNAME_UNIQUE_IDX',
            'unique' => true,
        ]);
        $table->addIndex([
            'email',
        ], [
            'name' => 'EMAIL_UNIQUE_IDX',
            'unique' => true,
        ]);
        $table->addIndex([
            'slug',
        ], [
            'name' => 'IDX_UNIQUE_SLUG',
            'unique' => true,
        ]);
        $table->create();
    }
}

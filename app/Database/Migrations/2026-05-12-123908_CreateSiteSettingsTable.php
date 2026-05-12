<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSiteSettingsTable extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'key'        => ['type' => 'VARCHAR', 'constraint' => 100],
            'value'      => ['type' => 'TEXT', 'null' => true],
            'group'      => ['type' => 'VARCHAR', 'constraint' => 50, 'default' => 'general'],
            'label'      => ['type' => 'VARCHAR', 'constraint' => 150],
            'type'       => ['type' => 'VARCHAR', 'constraint' => 20, 'default' => 'text'],
            'sort_order' => ['type' => 'SMALLINT', 'unsigned' => true, 'default' => 0],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addUniqueKey('key');
        $this->forge->createTable('site_settings');
    }

    public function down(): void
    {
        $this->forge->dropTable('site_settings');
    }
}

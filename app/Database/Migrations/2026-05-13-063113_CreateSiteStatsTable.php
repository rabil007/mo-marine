<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSiteStatsTable extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'value'      => ['type' => 'VARCHAR', 'constraint' => 50],
            'label'      => ['type' => 'VARCHAR', 'constraint' => 150],
            'is_active'  => ['type' => 'TINYINT', 'constraint' => 1, 'default' => 1],
            'sort_order' => ['type' => 'SMALLINT', 'unsigned' => true, 'default' => 0],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('site_stats');
    }

    public function down(): void
    {
        $this->forge->dropTable('site_stats');
    }
}

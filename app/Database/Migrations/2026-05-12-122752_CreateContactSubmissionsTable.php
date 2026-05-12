<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContactSubmissionsTable extends Migration
{
    public function up(): void
    {
        $this->forge->addField([
            'id'               => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'vessel_name'      => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => true],
            'port_of_call'     => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'service_required' => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => true],
            'contact_number'   => ['type' => 'VARCHAR', 'constraint' => 50,  'null' => true],
            'email'            => ['type' => 'VARCHAR', 'constraint' => 150, 'null' => true],
            'message'          => ['type' => 'TEXT',    'null' => true],
            'urgency'          => ['type' => 'ENUM', 'constraint' => ['normal', 'critical'], 'default' => 'normal'],
            'status'           => ['type' => 'ENUM', 'constraint' => ['new', 'read', 'replied'], 'default' => 'new'],
            'created_at'       => ['type' => 'DATETIME', 'null' => true],
            'updated_at'       => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('contact_submissions');
    }

    public function down(): void
    {
        $this->forge->dropTable('contact_submissions');
    }
}

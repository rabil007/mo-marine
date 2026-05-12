<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $this->db->table('users')->insert([
            'name'       => 'Admin',
            'email'      => 'admin@mo-marine.com',
            'password'   => password_hash('admin1234', PASSWORD_BCRYPT),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}

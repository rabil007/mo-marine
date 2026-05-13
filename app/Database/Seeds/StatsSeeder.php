<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StatsSeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            ['value' => '22+',    'label' => 'Years Active',            'is_active' => 1, 'sort_order' => 1],
            ['value' => '450+',   'label' => 'Vessels Under Support',   'is_active' => 1, 'sort_order' => 2],
            ['value' => '50+',    'label' => 'Shipping Lines',          'is_active' => 1, 'sort_order' => 3],
            ['value' => '2,500+', 'label' => 'Nautical Charts',         'is_active' => 1, 'sort_order' => 4],
            ['value' => '24/7',   'label' => 'Emergency Support',       'is_active' => 1, 'sort_order' => 5],
        ];

        $this->db->table('site_stats')->insertBatch($rows);
    }
}

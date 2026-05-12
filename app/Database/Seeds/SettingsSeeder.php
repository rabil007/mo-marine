<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            // ── Contact ─────────────────────────────────────────────────────
            ['key' => 'phone_main',      'value' => '+963 17 2770040',       'group' => 'contact', 'label' => 'Main Office Phone',    'type' => 'tel',      'sort_order' => 1],
            ['key' => 'phone_hotline',   'value' => '+963 933 303041',       'group' => 'contact', 'label' => '24/7 Dispatch Hotline','type' => 'tel',      'sort_order' => 2],
            ['key' => 'phone_mobile',    'value' => '+963 933 093901',       'group' => 'contact', 'label' => 'Mobile / Sales',       'type' => 'tel',      'sort_order' => 3],
            ['key' => 'email_main',      'value' => 'hala@mo-marine.com',    'group' => 'contact', 'label' => 'Main Email',           'type' => 'email',    'sort_order' => 4],
            ['key' => 'address_line1',   'value' => 'KIA Motor Building 3rd floor, Nadim Hasan Street', 'group' => 'contact', 'label' => 'Address Line 1', 'type' => 'text', 'sort_order' => 5],
            ['key' => 'address_line2',   'value' => 'P.O. BOX 1808 Lattakia Syria', 'group' => 'contact', 'label' => 'Address Line 2', 'type' => 'text', 'sort_order' => 6],

            // ── Social Media ─────────────────────────────────────────────────
            ['key' => 'social_instagram', 'value' => 'https://www.instagram.com/momarineservices?igsh=MWMxcGlqYTd0dnE3Mw%3D%3D&utm_source=qr', 'group' => 'social', 'label' => 'Instagram', 'type' => 'url', 'sort_order' => 1],
            ['key' => 'social_facebook',  'value' => 'https://www.facebook.com/share/19BLcN5STF/?mibextid=wwXIfr', 'group' => 'social', 'label' => 'Facebook',  'type' => 'url', 'sort_order' => 2],
            ['key' => 'social_linkedin',  'value' => 'https://www.linkedin.com/company/mo-marine/', 'group' => 'social', 'label' => 'LinkedIn',  'type' => 'url', 'sort_order' => 3],
            ['key' => 'social_whatsapp',  'value' => '',                     'group' => 'social', 'label' => 'WhatsApp Number',      'type' => 'tel',      'sort_order' => 4],
            ['key' => 'social_twitter',   'value' => '',                     'group' => 'social', 'label' => 'X / Twitter',          'type' => 'url',      'sort_order' => 5],

            // ── Company ──────────────────────────────────────────────────────
            ['key' => 'company_name',     'value' => 'M&O Marine Services & Ship Supplies Ltd', 'group' => 'company', 'label' => 'Company Name',    'type' => 'text', 'sort_order' => 1],
            ['key' => 'company_tagline',  'value' => 'Your trusted partner for maritime services in Syria', 'group' => 'company', 'label' => 'Tagline / Slogan', 'type' => 'text', 'sort_order' => 2],
            ['key' => 'company_website',  'value' => 'https://mo-marine.com', 'group' => 'company', 'label' => 'Website URL',    'type' => 'url',  'sort_order' => 3],
        ];

        $this->db->table('site_settings')->insertBatch($rows);
    }
}

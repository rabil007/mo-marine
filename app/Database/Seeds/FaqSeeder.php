<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $now  = date('Y-m-d H:i:s');
        $faqs = [
            // General Operations
            ['category' => 'General Operations', 'sort_order' => 1,  'question' => 'Which ports do you actively service?',           'answer' => 'Our primary hubs are Lattakia and Tartous ports in Syria. We provide full-scale agency, technical, and supply services 24/7 across these terminals, with dispatch capabilities reaching all vessels within Syrian territorial waters.'],
            ['category' => 'General Operations', 'sort_order' => 2,  'question' => 'Are you ISSA and IMPA certified?',                'answer' => 'Yes. M&O is a certified member of both the International Shipsuppliers & Services Association (ISSA) — the first Syrian company to join in 2002 — and the International Marine Purchasing Association (IMPA), ensuring all provisions and stores meet global maritime standards.'],
            ['category' => 'General Operations', 'sort_order' => 3,  'question' => 'How many vessels are you currently serving?',     'answer' => 'Over our 22+ years of operation, we are serving more than 450 vessels belonging to over 50 international shipping companies, covering all vessel types from bulk carriers to tankers and passenger ships.'],
            // Supply & Provisions
            ['category' => 'Supply & Provisions', 'sort_order' => 4, 'question' => 'How quickly can you dispatch emergency provisions?','answer' => 'For emergency situations, our dispatch fleet can deliver fresh, frozen, and dry provisions to your vessel within hours of anchoring or berthing, utilizing our localized supply chain and cold-storage warehouses.'],
            ['category' => 'Supply & Provisions', 'sort_order' => 5, 'question' => 'Do you supply bonded stores?',                    'answer' => 'Yes. We supply a full range of bonded (tax-free) products directly to vessels, including cigarettes, tobacco, alcohol, beverages, perfumes, and electronics, in compliance with Syrian Customs Authority regulations.'],
            ['category' => 'Supply & Provisions', 'sort_order' => 6, 'question' => 'Can you supply nautical charts worldwide?',       'answer' => 'Absolutely. We maintain a stock of over 2,500 up-to-date Admiralty charts and can dispatch publications, digital charts (ARCS/ENC), and IMO signs worldwide. We are the first and only company in Syria offering this service.'],
            // Technical & Safety
            ['category' => 'Technical & Safety', 'sort_order' => 7,  'question' => 'Do you provide underwater inspection services?',  'answer' => 'Yes. We coordinate specialized marine engineering and underwater hull inspections utilizing certified diving teams equipped for technical repairs, hull cleaning, and condition surveys.'],
            ['category' => 'Technical & Safety', 'sort_order' => 8,  'question' => 'Can you service FFA and LSA equipment?',          'answer' => 'Yes. We provide full inspection, servicing, and replacement of Fire Fighting Apparatus (FFA) and Life Saving Apparatus (LSA) including fire extinguishers, life rafts, immersion suits, and pyrotechnics — all compliant with IMO and SOLAS regulations.'],
            ['category' => 'Technical & Safety', 'sort_order' => 9,  'question' => 'Do you handle spare parts logistics?',            'answer' => 'Yes. We collect spare parts from local or international suppliers, handle customs clearance and airport cargo processing, then deliver directly to the vessel or store them safely in our warehouse until the ship arrives.'],
        ];

        foreach ($faqs as $faq) {
            $this->db->table('faqs')->insert(array_merge($faq, [
                'is_active'  => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]));
        }
    }
}

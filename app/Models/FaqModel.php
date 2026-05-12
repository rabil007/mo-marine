<?php

namespace App\Models;

use CodeIgniter\Model;

class FaqModel extends Model
{
    protected $table      = 'faqs';
    protected $primaryKey = 'id';

    protected $allowedFields = ['question', 'answer', 'category', 'is_active', 'sort_order'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getActiveGrouped(): array
    {
        $rows = $this->where('is_active', 1)
                     ->orderBy('sort_order', 'ASC')
                     ->orderBy('created_at', 'ASC')
                     ->findAll();

        $grouped = [];
        foreach ($rows as $row) {
            $grouped[$row['category']][] = $row;
        }

        return $grouped;
    }
}

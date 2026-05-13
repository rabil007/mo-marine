<?php

namespace App\Models;

use CodeIgniter\Model;

class StatModel extends Model
{
    protected $table      = 'site_stats';
    protected $primaryKey = 'id';

    protected $allowedFields = ['value', 'label', 'sort_order'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getActive(): array
    {
        return $this->orderBy('sort_order', 'ASC')->findAll();
    }
}

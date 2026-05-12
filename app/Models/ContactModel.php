<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table      = 'contact_submissions';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'vessel_name', 'port_of_call', 'service_required',
        'contact_number', 'email', 'message', 'urgency', 'status',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function countByStatus(string $status): int
    {
        return $this->where('status', $status)->countAllResults();
    }
}

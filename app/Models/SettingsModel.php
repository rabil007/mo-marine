<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends Model
{
    protected $table      = 'site_settings';
    protected $primaryKey = 'id';

    protected $allowedFields = ['key', 'value', 'group', 'label', 'type', 'sort_order'];

    public function getAll(): array
    {
        $rows   = $this->orderBy('group')->orderBy('sort_order')->findAll();
        $result = [];

        foreach ($rows as $row) {
            $result[$row['key']] = $row['value'];
        }

        return $result;
    }

    public function getAllGrouped(): array
    {
        $rows   = $this->orderBy('group')->orderBy('sort_order')->findAll();
        $groups = [];

        foreach ($rows as $row) {
            $groups[$row['group']][] = $row;
        }

        return $groups;
    }

    public function get(string $key, string $default = ''): string
    {
        $row = $this->where('key', $key)->first();
        return $row ? (string) $row['value'] : $default;
    }

    public function saveSettings(array $data): void
    {
        foreach ($data as $key => $value) {
            $this->where('key', $key)->set(['value' => $value])->update();
        }
    }
}

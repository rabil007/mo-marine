<?php

if (! function_exists('setting')) {
    function setting(string $key, string $default = ''): string
    {
        static $cache = null;

        if ($cache === null) {
            try {
                $cache = (new \App\Models\SettingsModel())->getAll();
            } catch (\Throwable $e) {
                $cache = [];
            }
        }

        return isset($cache[$key]) ? (string) $cache[$key] : $default;
    }
}

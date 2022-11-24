<?php

use App\Models\Setting;
use App\Repositories\SettingRepository;
use App\Services\CacheService;
use Psr\SimpleCache\InvalidArgumentException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

if (! function_exists('isInCache')) {
    /**
     * Is in cache?
     *
     * @param $cache_name
     * @param $sub_name
     * @param $key_name
     * @param string $default
     * @return bool|int|mixed|string
     */
    function isInCache($cache_name, $sub_name, $key_name, $default = '')
    {
        $result = (new CacheService())->get($cache_name, $sub_name, $key_name);

        // There is no cache for item
        if ($result === null || $result === '') {
            return $default;
        }

        // Bool
        if ($result === 'true' || $result === 'false') {
            return boolean($result);
        }

        // Numeric
        if (is_numeric($result)) {
            return (int) $result;
        }

        return $result;
    }
}

if (! function_exists('setting')) {
    /**
     * Get Settings
     *
     * @param $name
     * @param string $default
     * @return bool|int|mixed|string
     */
    function setting($name, $default = '')
    {
        $setting_table = (new Setting())->getTable();
        return isInCache($setting_table, $setting_table, $name, $default);
    }
}

if (! function_exists('deleteCacheByName')) {
    /**
     * Delete Cache By Name
     *
     * @param string $name
     */
    function deleteCacheByName(string $name)
    {
        if ($name !== '' && Cache::has($name)) {
            try {
                Cache::forget($name);
            } catch (Exception $e) {
                Log::error('Error al eliminar cache', ['name' => $name, 'message' => $e->getMessage()]);
            }
        }
    }
}

if (! function_exists('deleteCacheByNames')) {
    /**
     * Delete Cache By Name
     *
     * @param array $names
     */
    function deleteCacheByNames(array $names = [])
    {
        if (is_array($names) && ! empty($names)) {
            foreach ($names as $name) {
                if (Cache::has($name)) {
                    try {
                        Cache::forget($name);
                    } catch (Exception $e) {
                        Log::error('Error al eliminar cache', ['name' => $name, 'message' => $e->getMessage()]);
                    }
                }
            }
        }
    }
}

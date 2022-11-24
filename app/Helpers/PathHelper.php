<?php
use Illuminate\Support\Str;

if (! function_exists('asset_front')) {
    /**
     * Return asset of front folder
     *
     * @param string $string
     * 
     * @return string
     */
    function asset_front(String $string='')
    {
        return asset('').'front/'.$string;
    }
}

if (!function_exists('asset_url')) {

    // @codingStandardsIgnoreLine
    function asset_url($path)
    {
        $path = $path;
        $storageUrl = $path;

        if (!Str::startsWith($storageUrl, 'http')) {
            return url($storageUrl);
        }

        return $storageUrl;
    }
}
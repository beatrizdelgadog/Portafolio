<?php

use Illuminate\Support\Facades\Storage;

if (! function_exists('viewExist')) {
    /**
     * Detect if view file exists
     *
     * @param string $name
     * @return bool
     */
    function viewExist(string $name = ''): bool
    {
        if (! view()->exists($name)) {
            abort(404, 'Vista no existe');
        }

        return true;
    }
}

if (! function_exists('folder_exists')) {
    /**
     * Check if folder exists
     *
     * @param $route
     * @param int $mode
     */
    function folder_exists($route, $mode = 0755): void
    {
        if (! File::exists($route)) {
            File::makeDirectory($route, $mode, true, true);
        }
    }
}

if (! function_exists('storage_exists')) {
    /**
     * Check if storage exists
     *
     * @param $name
     * @param $disk
     * @param int $mode
     */
    function storage_exists($name, $disk, $mode = 0755): void
    {
        if (! Storage::disk($disk)->exists($name)) {
            Storage::disk($disk)->makeDirectory($name, $mode, true, true);
        }
    }
}

if (! function_exists('get_templates')) {
    /**
     * Check if folder exists
     *
     * @param string $source
     * @return array
     */
    function get_templates($source = 'front'): array
    {
        $files      = File::allFiles(resource_path('views') . '/' . $source . '/templates');
        $templates  = [];

        foreach ($files as $file) {
            // Only templates, not subfolders
            if ($file->getRelativePath() === '') {
                $filename   = $file->getFilename();
                $bladeName  = '.blade.php';
                $templates  [] = explode($bladeName, $filename)[0];
            }
        }

        return $templates;
    }
}

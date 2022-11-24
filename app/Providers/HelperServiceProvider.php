<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $helperFolder = app_path('Helpers');

        // Check for Helpers
        if (File::exists($helperFolder)) {
            $helperFilesInFolder = File::files($helperFolder);

            // Register all helper files
            foreach ($helperFilesInFolder as $helper) {
                require_once($helper->getPathname());
            }
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

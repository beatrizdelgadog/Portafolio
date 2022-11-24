<?php

use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;
use Illuminate\Support\Collection;
use Jenssegers\Optimus\Optimus;

if (! function_exists('isDev')) {
    /**
     * Detect is development environment
     *
     * @return bool
     */
    function isDev(): bool
    {
        return App::environment('local') ? true : false;
    }
}

if (! function_exists('isProd')) {
    /**
     * Detect is production environment
     *
     * @return bool
     */
    function isProd(): bool
    {
        return App::environment('prod') ? true : false;
    }
}

if (! function_exists('isDeveloper')) {
    /**
     * Check is developer
     *
     * @return bool
     */
    function isDeveloper(): bool
    {
        return auth()->user()->is_developer;
    }
}

if (! function_exists('isRole')) {
    /**
     * Check if selected Role is
     *
     * @param string $name
     * @return bool
     */
    function isRole(string $name): bool
    {
        $user = auth()->user();

        if ($user === null) {
            return false;
        }

        $roles = $user->roles()->get();

        if ($roles->isEmpty()) {
            return false;
        }

        foreach ($roles as $role) {
            if (strtolower($role->title_system) === strtolower($name)) {
                return true;
            }
        }

        return false;
    }
}

if (! function_exists('areRoles')) {
    /**
     * Check if Role are
     *
     * @param array $name
     * @return bool
     */
    function areRoles(array $name): bool
    {
        $user = auth()->user();

        if ($user === null) {
            return false;
        }

        $roles = $user->roles()->get();

        if ($roles->isEmpty()) {
            return false;
        }

        foreach ($name as $item) {
            foreach ($roles as $role) {
                if (strtolower($role->title_system) === strtolower($item)) {
                    return true;
                }
            }
        }

        return false;
    }
}

if (! function_exists('optimus')) {
    /**
     * Optimus helper
     *
     * @return Optimus
     */
    function optimus(): Optimus
    {
        $prime      = 659721767;
        $inverse    = 1044382103;
        $random     = 123456734;

        try {
            return new Optimus($prime, $inverse, $random);
        } catch (Throwable $e) {
            // dd($e->getMessage());
        }
    }
}

if (! function_exists('environment')) {
    /**
     * Environment helper
     *
     * @return Collection
     */
    function environment(): Collection
    {
        return collect([
            ['name' => 'PHP version',       'value' => 'PHP/' . PHP_VERSION],
            ['name' => 'Laravel version',   'value' => app()->version()],
            ['name' => 'CGI',               'value' => PHP_SAPI],
            ['name' => 'Uname',             'value' => php_uname()],
            ['name' => 'Server',            'value' => Arr::get($_SERVER, 'SERVER_SOFTWARE')],

            ['name' => 'Cache driver',      'value' => config('cache.default')],
            ['name' => 'Session driver',    'value' => config('session.driver')],
            ['name' => 'Queue driver',      'value' => config('queue.default')],

            ['name' => 'Timezone',          'value' => config('app.timezone')],
            ['name' => 'Locale',            'value' => config('app.locale')],
            ['name' => 'Env',               'value' => config('app.env')],
            ['name' => 'URL',               'value' => config('app.url')]
        ]);
    }
}

if (! function_exists('encode')) {
    /**
     * Encode helper
     *
     * @param $data
     * @param int $level
     * @return string
     */
    function encode($data, $level = 9)
    {
        return rtrim(strtr(base64_encode(gzdeflate($data, $level)), '+/', '-_'), '=');
    }
}

if (! function_exists('decode')) {
    /**
     * Decode helper
     *
     * @param $data
     * @return false|string
     */
    function decode($data)
    {
        return gzinflate(base64_decode(strtr($data, '-_', '+/')));
    }
}

if (! function_exists('createNewRandomPassword')) {
    /**
     * Create New Password Helper
     *
     * @param $maxLength
     * @return string
     */
    function createNewRandomPassword($maxLength = null): string
    {
        $generator = new ComputerPasswordGenerator();
        $generator->setLength($maxLength ?? setting('password_min_length', 8))
            ->setNumbers(setting('password_needs_number', true))
            ->setUppercase(setting('password_needs_uppercase_letter', true))
            ->setSymbols(setting('password_needs_special_character', true));

        return $generator->generatePassword();
    }
}

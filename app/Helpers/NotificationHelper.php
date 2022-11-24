<?php

use Carbon\Carbon;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Support\Collection;

if (! function_exists('delay')) {
    /**
     * Delay time from settings
     *
     * @param int $default
     * @return Carbon
     */
    function delay(int $default = 60)
    {
        return now()->addSeconds(setting('notifications_delay', $default));
    }
}

if (! function_exists('notifyMe')) {
    /**
     * Notify messages
     *
     * @param string $type
     * @param string $message
     * @param string $title
     * @param string $model
     * @param string $icon
     */
    function notifyMe(string $type = 'success', string $message = '', string $title = '', string $model = 'toast2', string $icon = 'flaticon2-check-mark')
    {
        if ($title === '') {
            if ($type === 'success') {
                $title = trans('global.toasts.success');
            } elseif ($type === 'warning') {
                $title = trans('global.toasts.warning');
            } elseif ($type === 'info') {
                $title = trans('global.toasts.info');
            } elseif ($type === 'error') {
                $title = trans('global.toasts.error');
            }
        }

        notify()->flash($message, $type, $icon, $model, $title);
    }
}

if (! function_exists('toast')) {
    /**
     * Toast messages
     *
     * @param string $title
     * @param string $subtitle
     * @param string $body
     * @return Collection
     */
    function toast(string $title = '', string $subtitle = '', string $body = ''): Collection
    {
        return collect([
            'title'     => $title ?? trans('global.toasts.info'),
            'subtitle'  => $subtitle ?? '',
            'body'      => $body ?? ''
        ]);
    }
}

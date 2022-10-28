<?php

use Illuminate\Support\HtmlString;

if (! function_exists('vite_assets')) {
    /**
     * @return HtmlString
     * @throws Exception
     */
    function vite_assets(): HtmlString
    {
        $devServerIsRunning = false;

        if (app()->environment('local')) {
            try {
                $devServerIsRunning = file_get_contents(public_path('dev')) == 'dev';
            } catch (Exception) {}
        }

        if ($devServerIsRunning) {
            return new HtmlString(<<<HTML
            <script type="module" src="http://localhost:8000/@vite/client"></script>
            <link rel="stylesheet" href="http://localhost:8000/resources/css/app.css">
            <script type="module" src="http://localhost:8000/resources/js/app.js"></script>
            <script src="https://use.fontawesome.com/releases/vVERSION/js/all.js" data-auto-replace-svg="nest"></script>
        HTML);
        }
        $manifest = json_decode(file_get_contents(
            public_path('build/manifest.json')
        ), true);
        return new HtmlString(<<<HTML

        <link rel="stylesheet" href="build/{$manifest['resources/css/app.css']['file']}">
        <script type="module" src="build/{$manifest['resources/js/app.js']['file']}"></script>
    HTML);
    }
}

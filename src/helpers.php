<?php

if (!function_exists('language')) {
    /**
     * Get the language instance.
     *
     * @return \WovoSchool\Language\Language
     */
    function language()
    {
        return app('language');
    }
}

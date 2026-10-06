<?php

if (! function_exists('t_category')) {
    /**
     * Translate a CMS category slug/label, falling back to the original value.
     */
    function t_category(?string $category): string
    {
        if ($category === null || $category === '') {
            return '';
        }

        $key = 'categories.'.$category;

        return trans()->has($key) ? __($key) : $category;
    }
}

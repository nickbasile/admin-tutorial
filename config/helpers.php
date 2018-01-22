<?php

if (! function_exists('set_active')) {
    /**
     * Adds active class based on route
     *
     * @param $path
     * @param string $active
     * @return string
     */
    function set_active($path, $active = 'active')
    {

        return call_user_func_array('Request::is', (array)$path) ? $active : '';
    }

    //To use a wildcard just add an asterisk to the end of the route like so: home/page*

}
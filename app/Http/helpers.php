<?php
/**
 * Created by PhpStorm.
 * User: fakhar
 * Date: 13/01/2018
 * Time: 1:59 PM
 */


if (! function_exists('clients')) {

    function clients()
    {
        return \App\Client::all();
    }
}

if (! function_exists('cities')) {

    function cities()
    {
        return \App\City::pluck('name','id');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function firstPage()
    {
        $old = '';
        $key='DB_DATABASE';
        $value = "dddlllll";
        $path = base_path('.env');

    if(is_bool(env($key)))
    {
        $old = '';
    }

    if (file_exists($path)) {
        file_put_contents($path, str_replace(
            "$key=".$old, "$key=".$value, file_get_contents($path)
        ));
    }

    }
}

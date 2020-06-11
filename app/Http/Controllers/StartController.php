<?php

namespace App\Http\Controllers;
use Artisan;
use Schema;

use Illuminate\Http\Request;

class StartController extends Controller
{

    public function index()
    {
        if(\Schema::hasTable('users')){
           return redirect('login');
        }
        return view('index');
    }

    public function database_form(Request $request)
    {
        $old = '';
        $key = 'DB_DATABASE';
        $key2 = 'DB_USERNAME';
        $key3 = 'DB_PASSWORD';
        $value = $request['database'];
        $value2 = $request['username'];
        $value3 = $request['password'];
        $path = base_path('.env');

        if (is_bool(env($key))) {
            $old = '';
        }

        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                "$key=" . $old,
                "$key=" . $value,
                file_get_contents($path),
            ));
        }
        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                "$key2=" . $old,
                "$key2=" . $value2,
                file_get_contents($path),
            ));
        }
        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                "$key3=" . $old,
                "$key3=" . $value3,
                file_get_contents($path)
            ));
        }
        Artisan::call('migrate');
        return redirect('login');

    }
}

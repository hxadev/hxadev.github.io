<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Mixed_;

class CookieController extends Controller
{

    private $request;

    function __construct()
    {
        $this->request = new Request();
    }

    public function getCookie(String $name, Bool $isNative = false)
    {
        $cookie = null;
        if ($isNative) { // if the cookie was save by client side with js
            $cookie = isset($_COOKIE[$name]) ? $_COOKIE[$name] : NULL;
        } else {
            $cookie = $this->request->cookie($name);
        }
        return $cookie;
    }

    public function isValid($cookie)
    {
        return isset($cookie);
    }
}

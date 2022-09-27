<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CookieController;

define("PLUGIN_COLOR", "colorTheme");
define("PLUGIN_THEME", "typeTheme");

class PluginController extends Controller
{
    private $cookieController;

    public function __construct()
    {
        $this->cookieController = new CookieController();
    }

    public function getColorTheme()
    {
        $cookie = $this->cookieController->getCookie(PLUGIN_COLOR, true);
        $cookieString = "";

        if ($this->cookieController->isValid($cookie)) {
            $cookieColorsTheme = json_decode($cookie, true);
            foreach ($cookieColorsTheme as $property => $color) {
                $cookieString .= "{$property}:$color;";
            }
        }

        return $cookieString;
    }

    public function getTypeTheme()
    {
        $cookie = $this->cookieController->getCookie(PLUGIN_THEME, true);
        if ($this->cookieController->isValid($cookie)) {
            return strtolower($cookie);
        }
    }
}

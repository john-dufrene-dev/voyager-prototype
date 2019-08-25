<?php

namespace Modules\VoyagerBaseExtend\Support;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ThemeBuilder
{
    protected static $theme;
    protected static $primary;
    protected static $secondary;

    public function __construct()
    {
        self::$theme = $theme;
        self::$primary = $primary;
        self::$secondary = $secondary;
    }

    public static function get($theme = null)
    {
        self::$theme = ( isset($theme) ) ? $theme : config('themes.theme') ;

        return self::$theme;
    }

    public static function use($theme = null)
    {
        self::$theme = ( isset($theme) ) ? $theme : config('themes.theme') ;

        return 'themes.' . self::$theme . '.';
    }

    public static function primary($primary = null)
    {
        self::$primary = ( isset($primary) ) ? $primary : config('themes.colors.primary') ;

        return self::$primary;
    }

    public static function secondary($secondary = null)
    {
        self::$secondary = ( isset($secondary) ) ? $secondary : config('themes.colors.secondary') ;

        return self::$secondary;
    }
}

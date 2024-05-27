<?php
namespace App\Helper;

class TranslationHelper
{
    public static function translate($key)
    {

        $local = app()->getLocale();
        app()->setLocale($local);
        $lang_array = include(base_path('lang/en/reports.php'));
        $processed_key = ucfirst(str_replace('_', ' ', TranslationHelper::remove_invalid_charcaters($key)));

        if (!array_key_exists($key, $lang_array)) {
            $lang_array[$key] = $processed_key;
            $str = "<?php return " . var_export($lang_array, true) . ";";
            file_put_contents(base_path('lang/en/reports.php'), $str);
            $result = $processed_key;
        } else {
            $result = __('reports.' . $key);
        }

        $lang_array = include(base_path('lang/ar/reports.php'));
        $processed_key = ucfirst(str_replace('_', ' ', TranslationHelper::remove_invalid_charcaters($key)));

        if (!array_key_exists($key, $lang_array)) {
            $lang_array[$key] = $processed_key;
            $str = "<?php return " . var_export($lang_array, true) . ";";
            file_put_contents(base_path('lang/ar/reports.php'), $str);
            $result = $processed_key;
        } else {
            $result = __('reports.' . $key);
        }

        $result = __('reports.' . $key);
        return $result;
    }

    public static function remove_invalid_charcaters($str)
    {
        return str_ireplace(['\'', '"', ',', ';', '<', '>', '?'], ' ', $str);
    }


}

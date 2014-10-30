<?php

namespace Bic\Helpers;

/**
 * Helpers for strings
 *
 * @author bichotll
 */
class Strings {

    /**
     * Returns an slug from the string given
     * 
     * @param type $string
     * @return type
     */
    public static function slug($string) {
        $slug = strtolower(trim($string));
        $slug = str_replace(' ', '-', $slug);
        $slug = str_replace('/', '-', $slug);
        $slug = preg_replace('/[^\w-]+/', '', $slug);
        return $slug;
    }
    
    /**
     * Get YouTube code from YouTube link
     * @param string link
     * @return string|null YouTube code or false
     */
    public static function getYouTubeCode($link) {
        preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $link, $matches);
        return isset($matches[0]) ? $matches[0] : null;
    }

}

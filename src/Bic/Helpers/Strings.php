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

}

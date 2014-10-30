<?php

namespace Bic\Helpers;

/**
 * Helpers for strings
 *
 * @author bichotll
 */
class String {

    /**
     * Returns an slug from the string given
     * 
     * @param type $string
     * @return type
     */
    public static function slug($string) {
        $slug = $this->toLower($string);
        $slug = $this->replace(' ', '-', $slug);
        $slug = $this->replace('/', '-', $slug);
        $slug = $this->replaceRegex('/[^\w-]+/', '', $slug);
        return $slug;
    }
    
    /**
     * Converts characters to lowercase
     * @param string $string
     * @return string
     */
    public static function toLower($string) {
        return strtolower(trim($string));
    }
    
    
    /**
     * Replace in string
     * @param mixed $search
     * @param mixed $replace
     * @param mixed $subject
     * @return mixed 
     */
    public static function replace($search, $replace, $subject){
        return str_replace($search, $replace, $subject);
    }
    
    /**
     * Regex replace in string
     * @param mixed $regex
     * @param mixed $replace
     * @param mixed $subject
     * @return mixed
     */
    public static function replaceRegex($regex, $replace, $subject){
        return preg_replace($regex, $replace, $subject);
    }
    

}

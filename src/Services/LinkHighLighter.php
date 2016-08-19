<?php

namespace LinkEmailHighLighter\src\Services;

class LinkHighLighter {

    /**
     * 
     * @param string $content
     * @return string
     */
    public static function replaceWebLinks($content) {

        if (!empty($content)) {
            $processedString = preg_replace('/(^|[^"])(((f|ht){1}(tp|tps):\/\/)[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)/i', '\\1<a href="\\2" target="_blank">\\2</a>', $content);
            return $processedString;
        }
    }

}

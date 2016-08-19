<?php

namespace LinkEmailHighLighter\src\Services;

class MailToHighLighter {

    /**
     * 
     * @param string $content
     * @return string
     */
    public static function replaceMailTo($content) {

        if (!empty($content)) {
            $processedString = preg_replace(array('/([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4})/'), array('<a href="mailto:$1">$1</a>'), $content);
            return $processedString;
        }
    }

}

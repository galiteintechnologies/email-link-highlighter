<?php

namespace LinkEmailHighLighter\src\Services;

class LinkHighLighter {

    private $regex = '/(^|[^"])(((f|ht){1}(tp|tps):\/\/)[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)/i';
    private $replaceToString = '\\1<a href="\\2" target="_blank">\\2</a>';

    /**
     * 
     * @param string $content
     * @return string
     */
    public function replaceWebLinks($content) {

        if (!empty($content)) {
            $processedString = preg_replace($this->regex, $this->replaceToString, $content);
            return $processedString;
        }
    }

}

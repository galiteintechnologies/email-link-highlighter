<?php

namespace LinkEmailHighLighter\src\Services;

class MailToHighLighter {

    private $searchArray = array('/([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4})/');
    private $replaceArray = array('<a href="mailto:$1">$1</a>');

    /**
     * 
     * @param string $content
     * @return string
     */
    public function replaceMailTo($content) {

        if (!empty($content)) {
            $processedString = preg_replace($this->searchArray, $this->replaceArray, $content);
            return $processedString;
        }
    }

}

<?php

/*
 * This file is part of the Link/Email HighLighter Package
 *
 * (c) Nexuslink Services
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LinkEmailHighLighter;

use Symfony\Component\Yaml\Yaml;
use LinkEmailHighLighter\src\Services\LinkHighLighter;
use LinkEmailHighLighter\src\Services\MailToHighLighter;

class HighLighter {

    private $pathToYml;

    public function __construct($pathToYml = '') {

        if (!empty($pathToYml)) {
            $this->pathToYml = $pathToYml;
        } else {
            $this->pathToYml = __DIR__ . "\Resources\config\config.yml";
        }
    }

    /**
     * 
     * @param string $content
     * @return string
     */
    public function HighLight($content) {

        $configArray = Yaml::parse(file_get_contents($this->pathToYml));

        if ($configArray['highlighting_enabled']['link']) {
            $content = LinkHighlighter::replaceWebLinks($content);
        }
        if ($configArray['highlighting_enabled']['mail']) {
            $content = MailToHighlighter::replaceMailTo($content);
        }
        return $content;
    }
    
}

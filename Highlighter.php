<?php

/*
 * This file is part of the Link Highlighter Package
 *
 * (c) Nexuslink Services
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Highlighter;

use Symfony\Component\Yaml\Yaml;
use Highlighter\src\Services\LinkHighlighter;
use Highlighter\src\Services\MailToHighlighter;

class Highlighter {

    private $pathToYml;

    public function __construct($pathToYml = '') {

        if(!empty($pathToYml)){
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
    public function descriptionHighlighter($content) {

        if (!empty($this->pathToYml)) {
            
            $configArray = Yaml::parse(file_get_contents($this->pathToYml));
            
            if ($configArray['high_lighter']['link']) {
                $content = LinkHighlighter::replaceWebLinks($content);
            }
            if ($configArray['high_lighter']['mail']) {
                $content = MailToHighlighter::replaceMailTo($content);
            }
            return $content;
        }
    }

    /**
     * 
     * @return string
     */
    public function getPathToYml() {

        return $this->pathToYml;
    }

}

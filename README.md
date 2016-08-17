# HOW TO USE - GUIDE:

Define below described properties to highlight inside the file
and set their values to true/false as per your need


[![Latest Version](https://img.shields.io/packagist/v/nexuslinkservices/link-email-highlighter.svg?style=flat-square)](https://packagist.org/packages/nexuslinkservices/link-email-highlighter)
[![Software License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nexuslinkservices/email-link-highlighter/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/email-link-highlighter/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/nexuslinkservices/email-link-highlighter/badges/build.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/email-link-highlighter/build-status/master)

i.e.:  I want to highlight only links in my content, so I need to 
define following variables in my configuration yaml file.

```
highlighting_enabled:
    link: true
    mail: false
```

```
Note(s): 
1. If configuration yaml is not there in your project then the default configuration will be taken into consideration.
2. The bundle uses symfony yaml component to parse the yaml configuration.
```

Following is the reference code to make it working,

```
/**
 * CODE
 * create a new object of HighLighter class
 */

$highLighter = new HighLighter($pathToYaml);  //$pathToYaml is optional as mentioned earlier
$highLightedContent = $highLighter->HighLight($contentToBeHighlighted);
```

That's it with the bundle.

## CONTRIBUTING:

Pull requests are always welcome.
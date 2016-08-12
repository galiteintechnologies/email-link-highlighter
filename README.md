# HOW TO USE GUIDE:

Define below described properties to highlight inside the file
and set their values to 1(true)/0(false) as per your need

i.e.:  I want to highlight only links in my content, so I need to 
define following variables in my configuration yaml file.

`high_lighter:
    link: '1'
    mail: '0'`

Note(s): 
1. If configuration yaml is not there in your project then the default configuration will be taken into consideration.
2. The bundle uses symfony yaml component to parse the yaml configuration.

Following is the reference code to make it working,

first of all include the class according to the need,

`/**
 * CODE
 * create anew object of HighLighter class
 */$pathToYaml is optional as mentioned earlier

$highLighter = new HighLighter($pathToYaml);
$highLightedContent = $highLighter->descriptionHighlighter($contentToBeHighlighted);`


That's it with the bundle.

# CONTRIBUTING:

Pull requests are always welcome.
<?php
namespace Grav\Plugin;

require __DIR__ . '/vendor/autoload.php';

/**
 * Brings Httpful functions to Twig
 */
class HttpfullyTwigExtension extends \Twig_Extension
{
    /**
     * Return extension name
     * 
     * @return string
     */
    public function getName()
    {
        return 'HttpfullyExtension';
    }

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('httpfully_get_json', [$this, 'httpfullyGetJson'])
        ];
    }    

    /**
     * Callback for Twig
     * @ignore
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('httpfully_get_json', array($this, 'httpfullyGetJson')),
        ];
    }

    public function httpfullyGetJson($uri)
    {
      try {
        $response = \Httpful\Request::get($uri)->expectsJson()
          ->whenError(function($error) { /* Be silent */ })
          ->send();
        return $response->body;
      } catch (\Exception $e) {}
        return;
    }
}

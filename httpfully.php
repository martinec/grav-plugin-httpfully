<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;

/**
 * Class HttpfullyPlugin
 * @package Grav\Plugin
 */
class HttpfullyPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
           $this->active = false;
           return;
        }
        // Enable the main event we are interested in
        $this->enable([
            'onTwigExtensions' => ['onTwigExtensions', 0],
        ]);
    }
    public function onTwigExtensions()
    {
        require_once(__DIR__ . '/twig/HttpfullyTwigExtension.php');
        $this->grav['twig']->twig->addExtension(new HttpfullyTwigExtension());
    }
}

<?php

namespace CF\WordPress;

class PluginRoutes
{
    public static $routes = array(
        'account' => array(
            'class' => 'CF\WordPress\PluginActions',
            'methods' => array(
                'POST' => array(
                    'function' => 'loginWordPress',
                ),
            ),
        ),

        'plugin/:id/settings' => array(
            'class' => 'CF\WordPress\PluginActions',
            'methods' => array(
                'GET' => array(
                    'function' => 'getPluginSettings',
                ),
            ),
        ),

        'plugin/:id/settings/:human_readable_id' => array(
            'class' => 'CF\WordPress\PluginActions',
            'methods' => array(
                'PATCH' => array(
                    'function' => 'patchPluginSettings',
                ),
            ),
        ),
    );
}

<?php

namespace Toa\Bundle\BowerBundle\Composer;

use Composer\Script\Event;
use Sensio\Bundle\DistributionBundle\Composer\ScriptHandler as BaseScriptHandler;

/**
 * ScriptHandler
 *
 * @author Enrico Thies <enrico.thies@gmail.com>
 */
class ScriptHandler extends BaseScriptHandler
{
    /**
     * @param Event $event
     */
    public static function installBowerComponents(Event $event)
    {
        $consoleDir = static::getConsoleDir($event, 'install bower components');

        static::executeCommand($event, $consoleDir, 'toa:bower:components:install');
    }
}

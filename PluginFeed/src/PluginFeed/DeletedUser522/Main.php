<?php

namespace PluginFeed\DeletedUser522;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\utils\Config;


use PluginFeed\DeletedUser522\command\Feed;

class Main extends PluginBase
{
    public function onEnable()
    {

        $this->getLogger()->info("Le plugin fonctionne");
        $this->getServer()->getCommandMap()->register("feed", new Feed($this));


	}
    public function onDisable()
    {

        $this->getLogger()->info("§4Le plugin est éteint");

    }

}
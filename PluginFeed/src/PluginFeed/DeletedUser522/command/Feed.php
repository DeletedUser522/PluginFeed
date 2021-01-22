<?php

namespace PluginFeed\DeletedUser522\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

use PluginFeed\DeletedUser522\Main;

class Feed extends Command{

    private $plugin;

    public function __construct(Main $plugin)
    {
        $this->plugin = $plugin;

        parent::__construct("feed", "Permet de se rassasier");

        $this->setPermission("command.feed");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {

        if ($sender instanceof Player)
        {

            if ($sender->hasPermission("command.feed"))
            {

                $sender->setFood(20);
                $sender->setSaturation(20);
                $sender->sendMessage("Vous venez de vous rassasier avec succès.");

            } else {

                $sender->sendMessage("Vous n'avez pas la permission de faire cette commande.");

            }

        }
    }
}
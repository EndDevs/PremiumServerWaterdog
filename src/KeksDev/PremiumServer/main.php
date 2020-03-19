<?php

namespace KeksDev\PremiumServer;

use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;

use KeksDev\PremiumServer\API;

class main extends PluginBase implements Listener {

public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this , $this);
}

public function onPlayerJoin(PlayerJoinEvent $event) {

$player = $event->getPlayer();

if ($player->hasPermission("server.join"))
{
$player->sendMessage("§aWelcome to the Server!");
} else {
$player->sendMessage("§cYou don't have the permission to join to this Server!");
API::transfer($player, "lobby");
}



}



}

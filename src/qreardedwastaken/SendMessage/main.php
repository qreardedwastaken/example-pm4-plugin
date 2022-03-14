<?php

namespace qreardedwastaken\SendMessage;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class main extends PluginBase{
  
  public function onEnable(): void {
    $this->getLogger()->info("The plugin is active.");
  }
  public function onDisable(): void {
    $this->getLogger()->info("The plugin is disabled.");
  }
  public function onCommand(CommandSender $sender, Command $command, String $label, Array $args) : bool {
    
    if($command->getName() == "sendmessage") {
      $sender->sendMessage("Example plugin finished here");
    }
  return true;
  }
  
}

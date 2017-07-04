<?php

namespace Bajan\Rebirth;

use pocketmine\plugin\PluginBase;

use pocketmine\command\CommandSender;

use pocketmine\command\Command;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\utils\TextFormat as color;

class Main extends PluginBase{

  public function onEnable(){
      $this->getLogger()->notice(color::AQUA. "Rebirth has been enabled");
}

  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
       If(strtolower)($cmd->getName()) == "test"){

       if($sender->hasPermission("test")){
          $sender->sendMessage(color::AQUA. "[Rebirth Plugin]". color::RED. "This is a test command")

     $sender->setHealth(20.0);
   }elseif(!$sender->hasPermission("test")){
            $sender->sendMessage(color::RED. "sorry you do not have permission to use this");

}
}
}

public function onDisable(){
      $this->getLogger()->warning(color::DARK_RED."Rebirth has been disable");

     }
}
?>




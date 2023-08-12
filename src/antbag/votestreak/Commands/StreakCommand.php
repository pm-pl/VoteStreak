<?php

namespace antbag\votestreak\Commands;

use CortexPE\Commando\BaseCommand;

class Commands extends BaseCommand {
  
  public function onprepare(): void {
    $this->setPermission("");
    $this->registerSubCommand(new TopStreakSubCommand("top", "A commad to check The top player streak"));
  }
  
  public function onRun(CommandSender $sender, string $aliasUsed, array $args) : void {
    if($sender instanceof Player) {
      
    }
    if($sender->hasPermission("")) {
      $this->plugin->addStreak($sender);
    }
  }
}
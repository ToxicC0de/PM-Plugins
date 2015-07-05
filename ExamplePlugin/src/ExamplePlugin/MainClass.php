<?php

namespace ExamplePlugin;

use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class MainClass extends PluginBase implements Listener{

 public function onLoad(){
		$this->getLogger()->info(TextFormat::WHITE . " Plugin loaded.");
	}
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TextFormat::DARK_GREEN . "Plugin loaded successfully.");
    }
	public function onDisable(){
		$this->getLogger()->info(TextFormat::DARK_RED . "Plugin has been disabled.");
	}
}

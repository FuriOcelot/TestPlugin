<?php
declare(strict_types=1);

namespace furiocelot\testplugin;

use pocketmine\plugin\PluginBase, 
		pocketmine\utils\TextFormat as Color;

class TestPlugin extends PluginBase{
	public function onLoad() : void{
		$this->getLogger()->info(Color::WHITE . "I've been loaded!");
	}

	public function onEnable() : void{
		$this->getLogger()->info(Color::DARK_GREEN . "I've been enabled!");
	}

	public function onDisable() : void{
		$this->getLogger()->info(Color::DARK_RED . "I've been disabled!");
	}
}

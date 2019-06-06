<?php
declare(strict_types=1);

namespace furiocelot\testplugin;

use pocketmine\{
	plugin\PluginBase,
	utils\TextFormat as Color
};

class TestPlugin extends PluginBase{
	public function onLoad() : void{
		$this->getLogger()->info(Color::WHITE . "I've been loaded!");
		$data = [
			["a", "Apple"],
			["b", "Banana"],
			["c", "Carrot"]
		];
		foreach($data as [$alphabet, $word]){
			$this->getLogger()->info(Color::YELLOW . "$alphabet is $word");
		}
	}

	public function onEnable() : void{
		$this->getLogger()->info(Color::DARK_GREEN . "I've been enabled!");
	}

	public function onDisable() : void{
		$this->getLogger()->info(Color::DARK_RED . "I've been disabled!");
	}
}

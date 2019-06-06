<?php
declare(strict_types=1);

namespace furiocelot\testplugin;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class TestPlugin extends PluginBase{
	public function onLoad() : void{
		$this->getLogger()->info(TextFormat::WHITE . "I've been loaded!");
	}

	public function onEnable() : void{
		$this->getLogger()->info(TextFormat::DARK_GREEN . "I've been enabled!");
	}

	public function onDisable() : void{
		$this->getLogger()->info(TextFormat::DARK_RED . "I've been disabled!");
	}
}

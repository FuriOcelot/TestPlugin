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

		$a = "banana";
		$b = "apple";
		$this->getLogger()->info(Color::YELLOW . "\$a=>$a, \$b=>$b");
		$this->swap($a, $b);
		$this->getLogger()->info(Color::YELLOW . "\$a=>$a, \$b=>$b");
	}

	public function onEnable() : void{
		$this->getLogger()->info(Color::DARK_GREEN . "I've been enabled!");
	}

	public function onDisable() : void{
		$this->getLogger()->info(Color::DARK_RED . "I've been disabled!");
	}

	private function swap(&$a, &$b) : void{
		[$a, $b] = [$b, $a];
	}
}

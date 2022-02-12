<?php

namespace pmmp\mv;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase { 

    public function onEnable(): void{  
        $this->getLogger()->info("MultiVersion has been enabled!");
    }
  
    public function onDisable(): void{
      $this->getLogger()->info("MultiVerion has been disabled");
    }
  
    public function onLoad(): void{
      $this->getLogger()->info("MultiVersion is Loading..."); 
    }
}

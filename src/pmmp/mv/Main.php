<?php

namespace pmmp\mv;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase { 

    public function onEnable() {  
        $this->getLogger()->info("MultiVersion has been enabled!");
    }
  
    public function onDisable(){
      $this->getLogger()->info("MultiVerion has been disabled");
    }
  
    public function onLoad(){
      $this->getLogger()->info("MultiVersion is Loading..."); 
    }
}

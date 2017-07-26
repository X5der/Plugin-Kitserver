<?php

namespace: KitsMc;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as Color;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\inventory\InventoryBase;
use pocketmine\item\Item;
use pocketmine\permission\Permission;
use pocketmine\level\sound\GhostSound;
use pocketmine\level\particle\FlameParticle;

class Main extends PluginBase{
	
	
	public function onEnable(){
		$this->getServer())->getLogger()-                                                    >info(Color::GREEN."[Kits] Plugin Has Been Enabled");
	}
	
	 public function onDisable(){
		$this->getServer()->getLogger()-                                                    >info(Color::RED."[Kits] Plugin Has Been Disabled");
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		switch($cmd->getName()){
			case 'kit':
			
			if(isset([$args[0]])){
				switch($args[0]){
					
		 case 'vip':
		   if($sender->hasPermission("kits.kitvip")){
		      $sender-                                          sendMessage(Color::GREEN."Done...");
		   	$sender->sendMessage(Color::Blow."Following       me in instagrame : §bPluginer_Mc");
		   	$sender->getInventory()-                         >setHelmet(item::get(310,0,1));
		   	$sender->getInventory()-                        >setChesPlate(item::get(311,0,1));
		   	$sender->getInventory()-                        >setLeggins(item::get(312,0,1));
		   	$sender->getInventory()-                          >setBots(item::get(313,0,1));
		   	$sender->getInventory()-                          >additem(item::get(296,0,1)));
		   	$sender->getLevel()->addSound(new                 GhostSound($sender));
		   	$sender->getLevel(1)->addParticle(new             FlameParticle($sender));
		   	
		   	 }
		   	 }
		   	 }
		   	 }
		   	 }
		   	 }

		   
		   	

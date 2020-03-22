<?php

namespace Pads\Main;
use pocketmine\level\sound\FireworkLaunch;

public function onPlayerMoveEvent(PlayerMoveEvent $event) {
    
$b = $p->getLevel()->getBlock($p->floor()->subtract(0, 1));
if ($b->getId() === BlockIds::NOTE_BLOCK){
            $p->playSound('firework.launch');

            switch ($p->getDirection()){
                case 0:
                    $p->knockBack($p,0,2,0,2);
                    return true;
                    break;
                case 1:
                    $p->knockBack($p, 0, 0, 2,2);
                    return true;
                    break;
                case 2:
                    $p->knockBack($p, 0, -1, 0,2);
                    return true;
                    break;
                case 3:
                    $p->knockBack($p, 0, 0, -1,2);
                    return true;
                    break;
            }
        }
        return false;
    }
    }

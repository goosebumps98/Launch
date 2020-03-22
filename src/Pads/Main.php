<?php

namespace Pads\Main;

use pocketmine\level\sound\AnvilUseSound;
use pocketmine\math\Vector3;
use pocketmine\event\player\PlayerMoveEvent;

public function onPlayerMoveEvent(PlayerMoveEvent $event) {
 $p = $ev->getPlayer();
$b = $p->getLevel()->getBlock($p->floor()->subtract(0, 1));
if ($b->getId() === BlockIds::NOTE_BLOCK){
    $level = $event->getPlayer()->getLevel();
$x = $event->getPlayer()->getX();
$y = $event->getPlayer()->getY();
$z = $event->getPlayer()->getZ();
$pos = new Vector3($x, $y, $z);
            $level->addSound(new AnvilUseSound($pos));

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

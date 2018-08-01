<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Listener;

use Swoft\Bean\Annotation\Listener;
use Swoft\Event\EventHandlerInterface;
use Swoft\Event\EventInterface;
use Swoft\Task\Event\TaskEvent;

/**
 * Class LiveListener - event handler
 *
 * @Listener(TaskEvent::FINISH_TASK)
 * @package App\Listener
 */
class LiveListener implements EventHandlerInterface
{
    /**
     * @param EventInterface $event
     */
    public function handle(EventInterface $event)
    {
        var_dump('task finish! ', $event->getParams());
    }
}

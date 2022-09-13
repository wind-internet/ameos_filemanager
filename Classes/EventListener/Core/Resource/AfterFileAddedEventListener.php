<?php

namespace Ameos\AmeosFilemanager\EventListener\Core\Resource;

use Ameos\AmeosFilemanager\Utility\FileUtility;
use TYPO3\CMS\Core\Resource\Event\AfterFileAddedEvent;

class AfterFileAddedEventListener extends AbstractFileEventListener
{
    public function __invoke(AfterFileAddedEvent $event)
    {
        if (!is_null($event->getFile()->getProperty('folder_uid'))) {
            FileUtility::add($event->getFile(), $event->getFolder());
        }
    }
}

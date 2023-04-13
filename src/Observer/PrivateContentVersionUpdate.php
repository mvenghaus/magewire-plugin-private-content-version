<?php

declare(strict_types=1);

namespace MVenghaus\MagewirePluginPrivateContentVersion\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use MVenghaus\MagewirePluginPrivateContentVersion\Model\PrivateContentVersionUpdater;

class PrivateContentVersionUpdate implements ObserverInterface
{
    public function __construct(
        private readonly PrivateContentVersionUpdater $privateContentVersionUpdater
    ) {
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function execute(Observer $observer): void
    {
        $this->privateContentVersionUpdater->update();
    }
}

<?php

declare(strict_types=1);

namespace MVenghaus\MagewirePluginPrivateContentVersion\Plugin\Magento\Framework\App\PageCache;

use Magento\Framework\App\PageCache\Version as Subject;
use MVenghaus\MagewirePluginPrivateContentVersion\Helper\HttpRequestHelper;

class VersionPlugin
{
    public function __construct(
        private readonly HttpRequestHelper $httpRequestHelper
    ) {
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function aroundProcess(Subject $subject, callable $proceed): void
    {
        if ($this->httpRequestHelper->isMagewireRequest()) {
            return;
        }

        $proceed();
    }
}

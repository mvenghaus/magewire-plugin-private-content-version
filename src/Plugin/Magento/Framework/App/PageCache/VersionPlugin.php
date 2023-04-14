<?php

declare(strict_types=1);

namespace MVenghaus\MagewirePluginPrivateContentVersion\Plugin\Magento\Framework\App\PageCache;

use Magento\Framework\App\PageCache\Version as Subject;
use Magento\Framework\App\Request\Http as HttpRequest;
use MVenghaus\MagewirePluginPrivateContentVersion\Model\MagewireUrls;

class VersionPlugin
{
    public function __construct(
        private readonly HttpRequest $httpRequest,
        private readonly MagewireUrls $magewireUrls,
    ) {
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function aroundProcess(Subject $subject, callable $proceed): void
    {
        if ($this->magewireUrls->isValidRequest($this->httpRequest->getRequestUri())) {
            return;
        }

        $proceed();
    }
}

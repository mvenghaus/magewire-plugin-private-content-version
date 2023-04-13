<?php

declare(strict_types=1);

namespace MVenghaus\MagewirePluginPrivateContentVersion\Helper;

use Magento\Framework\App\Request\Http as HttpRequest;

class HttpRequestHelper
{
    public function __construct(
        private readonly HttpRequest $httpRequest
    ) {
    }

    public function isMagewireRequest(): bool
    {
        return (
            $this->httpRequest->isPost() &&
            str_starts_with($this->httpRequest->getRequestUri(), '/magewire/post/livewire')
        );
    }
}

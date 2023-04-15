<?php

declare(strict_types=1);

namespace MVenghaus\MagewirePluginPrivateContentVersion\Model;

class MagewireUrls
{
    public function __construct(
        private readonly array $urls = []
    ) {
    }

    public function isValidRequest(string $requestUrl): bool
    {
        foreach ($this->urls as $url) {
            if (str_starts_with($requestUrl, $url)) {
                return true;
            }
        }

        return false;
    }
}

<?php

declare(strict_types=1);

namespace MVenghaus\MagewirePluginPrivateContentVersion\Model;

use Magento\Framework\App\PageCache\Version;

class PrivateContentVersionUpdater extends Version
{
    public function update(): void
    {
        parent::process();
    }
}

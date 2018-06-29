<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\InventoryCatalogApi\Api;

/**
 * Perform bulk product inventory transfer
 *
 * @api
 */
interface BulkInventoryTransferInterface
{
    /**
     * Run bulk inventory transfer
     * @param string[] $skus
     * @param string $destinationSource
     * @param bool $defaultSourceOnly
     * @return bool
     * @throws \Magento\Framework\Validation\ValidationException
     */
    public function execute(array $skus, string $destinationSource, bool $defaultSourceOnly = false): bool;
}

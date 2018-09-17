<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\InventoryConfigurationAdminUi\Model\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\InventoryConfigurationApi\Api\Data\SourceItemConfigurationInterface;

class Backorders implements OptionSourceInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => SourceItemConfigurationInterface::BACKORDERS_NO,
                'label' => __('No Backorders')
            ],
            [
                'value' => SourceItemConfigurationInterface::BACKORDERS_YES_NONOTIFY,
                'label' => __('Allow Qty Below 0')
            ],
            [
                'value' => SourceItemConfigurationInterface::BACKORDERS_YES_NOTIFY,
                'label' => __('Allow Qty Below 0 and Notify Customer')
            ]
        ];
    }
}
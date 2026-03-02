<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\MerchantRelationshipWidget\Widget;

use Spryker\Yves\Kernel\Widget\AbstractWidget;

class MerchantRelationshipMenuItemWidget extends AbstractWidget
{
    /**
     * @var string
     */
    protected const PARAMETER_IS_ACTIVE_PAGE = 'isActivePage';

    /**
     * @var string
     */
    protected const PAGE_KEY_MERCHANT_RELATIONSHIPS = 'merchant-relationships';

    public function __construct(string $activePage)
    {
        $this->addIsActivePageParameter($activePage);
    }

    public static function getName(): string
    {
        return 'MerchantRelationshipMenuItemWidget';
    }

    public static function getTemplate(): string
    {
        return '@MerchantRelationshipWidget/views/merchant-relationship-menu-item/merchant-relationship-menu-item.twig';
    }

    protected function addIsActivePageParameter(string $activePage): void
    {
        $this->addParameter(static::PARAMETER_IS_ACTIVE_PAGE, $this->isMerchantRelationshipPageActive($activePage));
    }

    protected function isMerchantRelationshipPageActive(string $activePage): bool
    {
        return $activePage === static::PAGE_KEY_MERCHANT_RELATIONSHIPS;
    }
}

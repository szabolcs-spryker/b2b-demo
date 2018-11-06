<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\CustomerAccess\Business;

use Pyz\Zed\CustomerAccess\Business\CustomerAccess\CustomerAccessFilter;
use Pyz\Zed\CustomerAccess\Business\CustomerAccess\CustomerAccessFilterInterface;
use Spryker\Zed\CustomerAccess\Business\CustomerAccessBusinessFactory as SprykerCustomerAccessBusinessFactory;

/**
 * @method \Pyz\Zed\CustomerAccess\CustomerAccessConfig getConfig()
 * @method \Spryker\Zed\CustomerAccess\Persistence\CustomerAccessRepositoryInterface getRepository()
 * @method \Spryker\Zed\CustomerAccess\Persistence\CustomerAccessEntityManagerInterface getEntityManager()
 */
class CustomerAccessBusinessFactory extends SprykerCustomerAccessBusinessFactory
{
    /**
     * @return \Pyz\Zed\CustomerAccess\Business\CustomerAccess\CustomerAccessFilterInterface
     */
    public function createCustomerAccessFilter(): CustomerAccessFilterInterface
    {
        return new CustomerAccessFilter(
            $this->getConfig()
        );
    }
}

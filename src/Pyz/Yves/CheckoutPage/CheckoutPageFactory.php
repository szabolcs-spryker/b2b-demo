<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\CheckoutPage;

use Pyz\Yves\CheckoutPage\Form\FormFactory;
use Pyz\Yves\CheckoutPage\Form\Steps\DetailsForm;
use SprykerShop\Yves\CheckoutPage\CheckoutPageFactory as SprykerCheckoutPageFactory;
use Spryker\Yves\StepEngine\Dependency\Form\StepEngineFormDataProviderInterface;
use Spryker\Yves\StepEngine\Form\FormCollectionHandlerInterface;

class CheckoutPageFactory extends SprykerCheckoutPageFactory
{
    /**
     * @return \Pyz\Yves\CheckoutPage\Form\FormFactory
     */
    public function createPyzCheckoutFormFactory(): FormFactory
    {
        return new FormFactory();
    }

    /**
     * @return \Spryker\Yves\StepEngine\Form\FormCollectionHandlerInterface
     */
    public function createDetailsFormCollection(): FormCollectionHandlerInterface
    {
        return $this->createFormCollection($this->getDetailsFormTypes(), $this->getDetailsFormDataProviderPlugin());
    }

    /**
     * @return \Spryker\Yves\StepEngine\Dependency\Form\StepEngineFormDataProviderInterface
     */
    public function getDetailsFormDataProviderPlugin(): StepEngineFormDataProviderInterface
    {
        return $this->getProvidedDependency(CheckoutPageDependencyProvider::PLUGIN_DETAILS_FORM_DATA_PROVIDER);
    }

    /**
     * @return array<string>
     */
    public function getDetailsFormTypes(): array
    {
        return [
            $this->getDetailsForm(),
        ];
    }

    /**
     * @return string
     */
    public function getDetailsForm(): string
    {
        return DetailsForm::class;
    }
}

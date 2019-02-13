<?php
/**
 * Disable Product Comparison
 *
 * @copyright Copyright (c) 2019 Peter McWilliams (http://www.petemcw.com)
 * @license MIT License
 * @author Peter McWilliams <petemcw@gmail.com>
 */
namespace Prm\DisableCompare\Api;

/**
 * Service interface responsible for exposing configuration options.
 * @api
 */
interface ConfigInterface
{
    /**
     * Configuration constants.
     */
    const XML_PATH_ENABLED = 'disable_compare/general/enable';

    /**
     * Retrieves the module's enabled status.
     *
     * @param int|string|\Magento\Store\Model\Store $store
     * @return bool
     */
    public function isEnabled($store = null);
}

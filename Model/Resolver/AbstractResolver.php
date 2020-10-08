<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_QuickOrderGraphQl
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

declare(strict_types=1);

namespace Mageplaza\QuickOrderGraphQl\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Mageplaza\QuickOrder\Api\RequestsManagementInterface;
use Mageplaza\QuickOrder\Helper\Data;
use Mageplaza\QuickOrder\Model\RequestsFactory;
use Mageplaza\QuickOrder\Model\UpdateRequestsFactory;
use Mageplaza\QuickOrder\Model\ItemUpdateRequestFactory;


/**
 * Class AbstractResolver
 * @package Mageplaza\QuickOrderGraphQl\Model\Resolver
 */
abstract class AbstractResolver implements ResolverInterface
{
    /**
     * @var string[]
     */
    protected $specialType = [
        'customOptionValue',
        'options',
        'optionIds',
        'options_select_value',
        'options_select_value_id',
        'super_attribute',
        'customOptions',
        'childProduct',
        'bundleOption',
        'bundleProduct',
        'bundleSelectOption',
        'tier_price',
    ];

    /**
     * @var Data
     */
    protected $helperData;

    /**
     * @var RequestsManagementInterface
     */
    protected $requestManagement;

    /**
     * @var RequestsFactory
     */
    protected $requestsFactory;

    /**
     * @var UpdateRequestsFactory
     */
    protected $updateRequestFactory;

    /**
     * @var ItemUpdateRequestFactory
     */
    protected $itemUpdateFactory;

    /**
     * AbstractResolver constructor.
     *
     * @param Data $helperData
     * @param RequestsManagementInterface $requestManagement
     * @param RequestsFactory $requestsFactory
     * @param UpdateRequestsFactory $updateRequestFactory
     * @param ItemUpdateRequestFactory $itemUpdateFactory
     */
    public function __construct(
        Data $helperData,
        RequestsManagementInterface $requestManagement,
        RequestsFactory $requestsFactory,
        UpdateRequestsFactory $updateRequestFactory,
        ItemUpdateRequestFactory $itemUpdateFactory
    ) {
        $this->helperData           = $helperData;
        $this->requestManagement    = $requestManagement;
        $this->requestsFactory      = $requestsFactory;
        $this->updateRequestFactory = $updateRequestFactory;
        $this->itemUpdateFactory    = $itemUpdateFactory;
    }

    /**
     * @inheritdoc
     */
    public function resolve(Field $field, $context, ResolveInfo $info, array $value = null, array $args = null)
    {
        if (!$this->helperData->isEnabled()) {
            throw new LocalizedException(__('Module is disabled.'));
        }
    }

    /**
     * @param mixed $data
     *
     * @return mixed
     */
    public function formatData($data)
    {
        foreach ($data as $key => $item) {
            foreach ($this->specialType as $type) {
                $item[$type] = $item[$type] ? Data::jsonEncode($item[$type]) : '';
            }

            $data[$key] = $item;
        }

        return $data;
    }
}

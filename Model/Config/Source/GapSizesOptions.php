<?php
/**
 * Copyright © 2025 NortN. All rights reserved.
 */
declare (strict_types=1);

namespace NortN\PageBuilderAdvancedColumns\Model\Config\Source;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Data\OptionSourceInterface;
use Magento\Store\Model\ScopeInterface;

class GapSizesOptions implements OptionSourceInterface
{
    private $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function toOptionArray()
    {
        $configPath = 'nortn_pagebuilder/columns/gap_sizes';
        $configValue = $this->scopeConfig->getValue($configPath, ScopeInterface::SCOPE_STORE);

        if (!$configValue) {
            return [];
        }

        $options = [];

        $options[] = [
            'value' => '',
            'label' => __('--Select Grid Gap Size--'),
            'caption' => ''
        ];

        $values = array_map('trim', explode(',', $configValue));

        foreach ($values as $value) {
            if ($value !== '') {
                $options[] = ['value' => $value, 'label' => ucfirst($value)];
            }
        }

        return $options;
    }
}

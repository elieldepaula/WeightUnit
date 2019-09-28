<?php
namespace Webjump\WeightUnit\Model\Config\Source;

/**
 * Class WeightUnit
 * Adiciona unidade de peso "gramas" à plataforma.
 * s
 * @author Eliel de Paula <dev@elieldepaula.com.br>
 * @package Webjump\WeightUnit\Model\Config\Source
 */
class WeightUnit extends \Magento\Directory\Model\Config\Source\WeightUnit
{

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return [['value' => 'lbs', 'label' => __('lbs')], ['value' => 'kgs', 'label' => __('kgs')], ['value' => 'gms', 'label' => __('grams')]];
    }

}

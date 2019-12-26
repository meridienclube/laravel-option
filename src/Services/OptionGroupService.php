<?php

namespace ConfrariaWeb\Option\Services;

use ConfrariaWeb\Option\Models\OptionGroup;
use ConfrariaWeb\Option\Contracts\OptionGroupContract;
use ConfrariaWeb\Vendor\Traits\ServiceTrait;

class OptionGroupService
{

    use ServiceTrait;

    protected $obj;

    public function __construct(OptionGroupContract $gptiongroup)
    {
        $this->obj = $gptiongroup;
    }

    /**
     * Aqui formatamos os OptionGroups para serem salvos na tabela de relacionamento "OptionGroupgables"
     * Somente são enviados OptionGroups que estejam cadastrados no sistema
     * @param array $data
     * @param array $formattedOptionGroups
     * @return array
     */
    public function formatOptionGroupsForRelationships(array $data, array $formattedOptionGroups = [])
    {
        $OptionGroups = $this->encodeOptionGroups($data);
        if (isset($OptionGroups) && is_array($OptionGroups)) {
            foreach ($OptionGroups as $OptionGroup_key => $OptionGroup_value) {
                $OptionGroupService = $this->findBy('name', $OptionGroup_key);
                if (isset($OptionGroupService->id)) {
                    $formattedOptionGroups[$OptionGroupService->id]['content'] = is_array($OptionGroup_value) ? json_encode($OptionGroup_value) : $OptionGroup_value;
                }
            }
            return $formattedOptionGroups;
        }
    }

    /**
     * Aqui formatamos os OptionGroups com a chave(name) e o valor(content) para visualização
     * Aqui retornamos somente OptionGroups que estejam cadastrados no sistema
     * @param array $data
     * @return array|mixed
     */
    public function encodeOptionGroups(array $data)
    {
        $formattedOptionGroups = isset($data['OptionGroups']) && is_array($data['OptionGroups']) ? $data['OptionGroups'] : [];
        foreach ($data as $OptionGroup_key => $OptionGroup_value) {
            $OptionGroupFind = $this->findBy('name', $OptionGroup_key);
            if ($OptionGroupFind) {
                $formattedOptionGroups[$OptionGroupFind->name] = $OptionGroup_value;
            }
        }
        return $formattedOptionGroups;
    }

}

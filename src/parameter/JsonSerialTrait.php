<?php

namespace Liangal\Sansong\parameter;

trait JsonSerialTrait
{
    public function jsonSerialize(): array
    {
        $items = get_object_vars($this);
        unset($items['necessary']);
        foreach ($items as $key => $value) {
            if (is_object($value)) {
                $items[$key] = $value->jsonSerialize();
            }
        }
        return $items;
    }
}
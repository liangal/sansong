<?php

namespace Liangal\Sansong\Enums;

/**
 * 取消发起人枚举类
 */
class AbortTypeEnums
{
    const INT_1 = 1;
    const INT_3 = 3;
    const INT_10 = 10;

    /**
     * 枚举说明列表
     * @return string[]
     */
    public static function cases(): array
    {
        return [
            self::INT_1 => '客户发起取消',
            self::INT_3 => '闪送员发起取消',
            self::INT_10 => '系统自动发起取消',
        ];
    }

    /**
     * 枚举列表
     * @return string[]
     */
    public static function list(): array
    {
        $rs = [];
        foreach (self::cases() as $value => $name) {
            $rs[] = compact("name", "value");
        }
        return $rs;
    }
}
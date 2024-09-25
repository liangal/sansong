<?php

namespace Lxo\Sansong\Enums;

class GoodTypeEnums
{
    const INT_1 = 1;
    const INT_3 = 3;
    const INT_5 = 5;
    const INT_6 = 6;
    const INT_7 = 7;
    const INT_9 = 9;
    const INT_10 = 10;
    const INT_12 = 12;
    const INT_13 = 13;
    const INT_15 = 15;
    const INT_16 = 16;

    /**
     * 枚举说明列表
     * @return string[]
     */
    public static function cases(): array
    {
        return [
            self::INT_1 => '文件',
            self::INT_3 => '数码',
            self::INT_5 => '蛋糕 ',
            self::INT_6 => '餐饮',
            self::INT_7 => '鲜花',
            self::INT_9 => '汽配',
            self::INT_10 => '其他',
            self::INT_12 => '母婴',
            self::INT_13 => '医药健康',
            self::INT_15 => '商超',
            self::INT_16 => '水果',
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
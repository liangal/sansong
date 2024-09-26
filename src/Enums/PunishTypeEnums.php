<?php

namespace Liangal\Sansong\Enums;

/**
 * 取消责任人枚举类
 */
class PunishTypeEnums
{
    const INT_1 = 1;
    const INT_2 = 2;
    const INT_3 = 3;
    const INT_10 = 10;
    const INT_99 = 99;

    /**
     * 枚举说明列表
     * @return string[]
     */
    public static function cases(): array
    {
        return [
            self::INT_1 => '客户',
            self::INT_2 => '服务',
            self::INT_3 => '闪送员',
            self::INT_10 => '系统自动发起取消',
            self::INT_99 => '其它',
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
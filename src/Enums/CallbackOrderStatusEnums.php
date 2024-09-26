<?php

namespace Liangal\Sansong\Enums;

/**
 * 回调状态枚举
 */
class CallbackOrderStatusEnums
{
    const INT_20 = 20;
    const INT_30 = 30;
    const INT_40 = 40;
    const INT_50 = 50;
    const INT_60 = 60;

    const INT_20_SUB_1 = 1;
    const INT_20_SUB_2 = 2;

    const INT_30_SUB_1 = 1;
    const INT_30_SUB_2 = 2;

    const INT_40_SUB_1 = 1;
    const INT_40_SUB_2 = 2;
    const INT_40_SUB_3 = 3;
    const INT_40_SUB_4 = 4;

    const INT_50_SUB_1 = 1;
    const INT_50_SUB_2 = 2;

    public static function cases(): array
    {
        return  [
            self::INT_20 => '派单中',
            self::INT_30 => '待取货',
            self::INT_40 => '闪送中',
            self::INT_50 => '已完成',
            self::INT_60 => '已取消',
        ];
    }

    public static function getInt20(): array
    {
        return [
            self::INT_20_SUB_1 => '派单中',
            self::INT_20_SUB_2 => '转单改派中',
        ];
    }

    public static function getInt30(): array
    {
        return [
            self::INT_30_SUB_1 => '待取货',
            self::INT_30_SUB_2 => '已就位',
        ];
    }

    public static function getInt40(): array
    {
        return [
            self::INT_40_SUB_1 => '闪送中',
            self::INT_40_SUB_2 => '申请取消中',
            self::INT_40_SUB_3 => '物品送回中',
            self::INT_40_SUB_4 => '取消单客服介入中',
        ];
    }

    public static function getInt50(): array
    {
        return [
            self::INT_50_SUB_1 => '已完成',
            self::INT_50_SUB_2 => '已退款'
        ];
    }

    public static function getInt60(): string{
        return '已取消';
    }
}
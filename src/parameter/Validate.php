<?php

namespace Liangal\Sansong\parameter;

use Exception;

class Validate
{
    protected array $necessary = [];

    /**
     * 验证
     * @param array $params
     * @throws Exception
     */
    public function check(array $params)
    {
        if ($this->necessary) {
            foreach ($this->necessary as $key => $nec) {
                if (empty($params[$key])) {
                    throw new Exception($nec);
                }
            }
        }
        foreach ($params as $pk => $param) {
            $this->{$pk} = $param;
        }
    }

}
<?php
namespace BaseStone\Core;

class Response extends Singleton
{
    private $output;
    private $params = [];

    public function getParams(): array
    {
        return $this->params;
    }

    public function setParams(array $params)
    {
        $this->params = $params;
    }


}


<?php
namespace Pm\Vo;
class Repository{
    public function __toString(){
        return $this->url.'.git';
    }
}
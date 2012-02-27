<?php
namespace Pm\Crawler;
use Pm\Vo\Repository as RepositoryVO;
use Pm\Crawler\Download;
class Install{
    
    private function __construct(){}
    
    public static function getInstance(RepositoryVO $repository){
        return new Download($repository, REPOS_PATH);
    }
}
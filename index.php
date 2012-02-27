#!/usr/bin/env php
<?php
require_once 'bootstrap.php';

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

$console = new Application();

$console->register('readmeFirst')->setDefinition(
		array()
		)->setDescription("Pm readme")->setCode(function (InputInterface $input, OutputInterface $output) {
		    $output->writeln("<info>First, you need to see if the script can write in ".REPOS_PATH." folder</info>\n
		    <info>Then, just code ./pm help to see more options</info>\n
		    <question>PackageManager - Kinn Coelho Julião<kinncj@gmail.com> && Thiago Rigo <thiagophx@gmail.com></question>\n");
    });

$console->register('help')->setDescription("Pm help")->setCode(function (InputInterface $input, OutputInterface $output) {
        $output->writeln(sprintf("<comment>Usage:</comment>\n
         <info>./pm search packageName</info>\n
         <info>./pm download repository/packageName /your/app/vendor/folder/</info>\n
         <info>./pm install repository/packageName</info>\n
         <info>./pm includePath</info>\n"));
    });

$console->register('search')->setDefinition(
		array(new InputArgument("packagename",InputArgument::REQUIRED, 'packageName'))
		)->setDescription("Pm search")->setCode(function (InputInterface $input, OutputInterface $output) {
            $result = "";
            //search here
		    $output->writeln($result);
    });
    
$console->register('includePath')->setDefinition(
		array()
		)->setDescription("Pm includePath")->setCode(function (InputInterface $input, OutputInterface $output) {
		    $output->writeln("<info>The includePath is located at ".REPOS_PATH." </info>\n");
    });

$console->register('download')->setDefinition(
		array(new InputArgument("packagename",InputArgument::REQUIRED, 'repository/packageName'),
		      new InputArgument("destinyname",InputArgument::REQUIRED, '/your/app/vendor/folder/'))
		)->setDescription("Pm download")->setCode(function (InputInterface $input, OutputInterface $output) {
            $result = "";
            //download here
		    $output->writeln($result);
    });

$console->register('install')->setDefinition(
		array(new InputArgument("packagename",InputArgument::REQUIRED, 'repository/packageName'))
		)->setDescription("Pm install")->setCode(function (InputInterface $input, OutputInterface $output) {
            $result = "";
            //install here
		    $output->writeln($result);
    });
$console->run();
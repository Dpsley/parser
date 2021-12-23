<?php
/**
 * Created by PhpStorm.
 * User: Dudarev
 * Date: 23.12.2021
 * Time: 12:30
 */

namespace Parser;
require_once 'class/Log_Parse.php';
$argv = $_SERVER['argv'];

if (isset($argv[1]))//Есть наименование файла
{
    $parser = new Log_Parser($argv[1]);
    $parser->read_log_file();
    $output = $parser->print_results();
    print_r($output);
}
else
{
    print_r('Необходимо указать файл');
}

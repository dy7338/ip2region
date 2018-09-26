<?php
/**
 * Created by PhpStorm.
 * User: xiaole
 * Date: 18/9/26
 * Time: 下午2:37
 */

require_once __DIR__ . '/vendor/autoload.php';

//use ;
use Dy7338\Ip2Region;

$ip2 =new Ip2Region();

print_r ( $ip2->memorySearch('114.114.114.114'));
<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 19-Feb-17
 * Time: 12:42
 */

$baseCommand = [
    '40', // 0
    '04', // 1
    '07',
    '20',
    '00',
    'XX', // 5 - State/Mode
    'XX', // 6 - Temperature
    '01',
    'XX', // 8 - Swing/Fan
    '00',
    '00',
    '60',
    '06',
    'XX', // 13 - Powerful/Quiet
    '00',
    '01',
    '00',
    '60',
    'XX', // 18 - Checksum
];

$defaultState = [
    'state' => 'on',
    'mode' => 'heat',
    'temp' => '25',
    'fan' => 'auto',
    'swing' => '1',
    'modifiers' => 'off'
];

$state = [
    'on' => '8',
    'off' => '0'
];

$mode = [
    'auto' => '0',
    'heat' => '2',
    'cool' => 'C',
    'dry' => '4'
];

$temp = [
    '16' => '04',
    '17' => '44',
    '18' => '24',
    '19' => '64',
    '20' => '14',
    '21' => '51',
    '22' => '34',
    '23' => '74',
    '24' => '0C',
    '25' => '4C',
    '26' => '2C',
    '27' => '6C',
    '28' => '1C',
    '29' => '5C',
    '30' => '3C'
];

$fan = [
    'auto' => '5',
    '1' => 'C', // weakest
    '2' => '2',
    '3' => 'A',
    '4' => '6',
    '5' => 'E'
];

$swing = [
    'auto' => 'F',
    '1' => '8', // higher
    '2' => '4',
    '3' => 'C',
    '4' => '2',
    '5' => 'A' // lower
];

$modifiers = [
    'powerful' => '80',
    'quiet' => '04',
    'off' => '00'
];

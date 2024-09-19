<?php require '../vendor/autoload.php';

use Nabeghe\Hooker\Hooker;
use Nabeghe\Hooker\Filter;

$hooker = new Hooker();

$hooker->listen('your_custom_action_name', function (Filter $filter) {
    if ($filter->getValue() === null) {
        $filter->setValue($filter['default']);
    }
});

$hooker->listen('your_custom_action_name', function (Filter $filter) {
    $filter->setValue($filter->getValue() + 2);
});

$hooker->listen('your_custom_action_name', function (Filter $filter) {
    $filter->setValue($filter->getValue() + 3);
});

$value = $hooker->filter('your_custom_action_name', null, ['default' => 9]);
echo $value; // 13
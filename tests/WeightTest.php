<?php

use NothingWorks\WeightConversions\Weight;

it('can convert kilograms to pounds correctly', function () {
    $converter = new Weight();

    $pounds = $converter->kilograms(100)->toPounds();

    expect($pounds)->toBe(220.46);
});

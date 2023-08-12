<?php

use QualityTools\General\SimpleCalculator;

test('example', function () {
    expect(true)->toBeTrue();
});

test('summator', function () {
    $result = (new SimpleCalculator())->add(1,3);
    expect($result)->toBe(3);
});

test('summator1', function ($a) {
    $result = (new SimpleCalculator())->add($a,0);
    expect($result)->toBe(1);
})->with('numbers');


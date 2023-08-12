<?php

uses(\Codeception\Test\Unit::class);
test('example true', function () {
    expect(true)->toBeTrue();
});


test('example false', function () {
    expect(false)->toBeTrue();
});

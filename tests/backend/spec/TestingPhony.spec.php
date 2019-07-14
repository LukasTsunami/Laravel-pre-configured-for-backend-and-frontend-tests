<?php

use function Eloquent\Phony\Kahlan\mock;
use App\User;

describe('Phony', function () {
    it('integrates with Kahlan', function () {
        $handle = mock(User::class);
        $handle->methodA->with('argument')->returns('value');

        $mock = $handle->get();

        expect($mock->methodA('argument'))->toBe('value');
        $handle->methodA->calledWith('argument');
    });
});
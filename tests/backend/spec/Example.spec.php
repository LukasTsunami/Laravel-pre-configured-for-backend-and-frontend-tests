<?php

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

describe("Homepage", function() {
    it("loads successfully", function() {
        $response = $this->laravel->get('/');
        expect($response->getStatusCode())->toEqual(200);
    });
});
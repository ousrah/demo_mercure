<?php

// src/Mercure/MyTokenProvider.php
namespace App\Mercure;

use Symfony\Component\Mercure\Jwt\TokenProviderInterface;

final class MyTokenProvider implements TokenProviderInterface
{
    public function getJwt(): string
    {
        return 'eyJhbGciOiJIUzI1NiJ9.eyJtZXJjdXJlIjp7InB1Ymxpc2giOlsiKiJdfX0.PXwpfIGng6KObfZlcOXvcnWCJOWTFLtswGI5DZuWSK4';
    }
}
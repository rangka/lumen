<?php

namespace Laravel\Lumen\Testing;

use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

trait AuthenticateWithJWT
{
    /**
     * Get token from user.
     *
     * @param \PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject $user
     *
     * @return string
     */
    protected function authorizationBearerUsingJwt(JWTSubject $user): string
    {
        return 'Bearer '.JWTAuth::fromUser($user);
    }

    /**
     * Get token from user.
     *
     * @param \PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject $user
     *
     * @return string
     *
     * @deprecated v3.5.1
     */
    protected function authorizationBearerFromUser(JWTSubject $user): string
    {
        return $this->authorizationBearerUsingJwt($user);
    }
}

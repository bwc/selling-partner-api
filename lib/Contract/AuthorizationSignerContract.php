<?php

namespace SellingPartnerApiV5\Contract;

use DateTime;
use Psr\Http\Message\RequestInterface;
use SellingPartnerApiV5\Credentials;

interface AuthorizationSignerContract
{
    public function sign(RequestInterface $request, Credentials $credentials): RequestInterface;

    public function setRequestTime(?DateTime $datetime = null): void;

    public function formattedRequestTime(?bool $withTime = true): ?string;
}
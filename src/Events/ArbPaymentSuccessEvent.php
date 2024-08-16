<?php

namespace Alaa\Arb\Events;

use Alaa\Arb\Objects\Responses\SuccessPaymentResponse;
use Illuminate\Foundation\Events\Dispatchable;

class ArbPaymentSuccessEvent
{
    use Dispatchable;

    public function __construct(public SuccessPaymentResponse $response)
    {
    }
}

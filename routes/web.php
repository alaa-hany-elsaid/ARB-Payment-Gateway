<?php

use Alaa\Arb\Events\ArbPaymentFailedEvent;
use Alaa\Arb\Events\ArbPaymentSuccessEvent;
use Alaa\Arb\Facades\Arb;
use Alaa\Arb\Objects\Responses\SuccessPaymentResponse;

Route::post('/arb/response', function () {
    if (request()->has('trandata')) {
        $data = request()->trandata;
        $result = Arb::result($data);
        if ($result->success) {
            // payment success
            event(new ArbPaymentSuccessEvent(new SuccessPaymentResponse($result->data)));
        } else {
            // payment failed
            event(new ArbPaymentFailedEvent($result->data));
        }

    }
});

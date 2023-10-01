<?php

use Carbon\Carbon;

function set_token_coockie($token){
    $from = Carbon::now();
    $to = Carbon::now()->addMinutes(10);
    $min = $to->diffInMinutes($from);
    $token_c = cookie("AXRF-TOKEN", $token, $min, '/', null, null, false, true);
    return $token_c;
}

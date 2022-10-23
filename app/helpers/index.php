<?php

use Carbon\Carbon;

function waktu($waktu)
{
    return Carbon::createFromTimeStamp(strtotime($waktu))->diffForHumans();
}

<?php

function carbonDate($date): string
{
    return \Carbon\Carbon::parse($date)->format('d.m.Y');
}

function carbonDateWithTime($date): string
{
    return \Carbon\Carbon::parse($date)->format('d.m.Y H:i:s');
}

function carbonToTimestamp($date): int
{
    return \Carbon\Carbon::parse($date)->timestamp;
}

function navLinkName($route): string {
    return __(ucfirst(str_replace(['_','.'],' ',$route)));
}

function getImage(\Illuminate\Database\Eloquent\Model $model): string
{
    return asset($model->image && file_exists('storage/'.$model->image) ? 'storage/'.$model->image : 'storage/images/placeholder.jpg');
}
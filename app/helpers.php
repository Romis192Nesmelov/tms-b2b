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

function strBreak($string): string {
    if (strlen($string) > 60) {
        $stringParts = explode(" ", $string);
        $newString = '';
        foreach ($stringParts as $k => $part) {
            $newString .= $part;
            if ($k == round((count($stringParts) - 1) / 2)) $newString .= '<br />';
            elseif ($k < count($stringParts) - 1) $newString .= ' ';
        }
        return $newString;
    } else return $string;
}

function getImage(\Illuminate\Database\Eloquent\Model $model): string
{
    return asset($model->image && file_exists('storage/'.$model->image) ? 'storage/'.$model->image : 'storage/images/placeholder.jpg');
}

function generateFakeText(): string
{
    $text = '';
    for($i=0;$i<rand(5,10);$i++) {
        $text .= '<p>'.fake()->paragraph().'</p>';
    }
    return $text;
}

<?php

function presentPrice($price)
{
    return money_format('€%i', $price / 100);
}

function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}

function productImage($path)
{
    return file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/not-found.jpg');
}

// no public tag
// write files subsection with url in brackets under autoload in composer.json file
// "composer dumpautoload" in terminal to activate this file
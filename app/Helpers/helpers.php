<?php
namespace App\Helpers;
use Michelf\Markdown;

class helpers{
    public static function formattext($text)
    {
        $formattedText = Markdown::defaultTransform($text);
        return  ($formattedText);
    }
}



?>
<!-- function format($text)
    {
        $formattedText = Markdown::defaultTransform($text);
        return ($formattedText);
    } -->
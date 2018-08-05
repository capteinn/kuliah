<?php
    require_once('path/to/Emoji.php');
    //encode
    $text = '??,hi';
    echo Emoji::Encode($text);
    //decode
    $text='\ud83d\ude04,hi';
    echo Emoji::Decode($text);
?>
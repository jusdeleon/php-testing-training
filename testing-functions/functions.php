<?php

function link_me_to($url, $body, $parameters = null) {
    $attributes = '';

    if ($parameters) {
        foreach ($parameters as $attribute => $value) {
            $attributes .= " {$attribute}='{$value}'";
        }
    }

    return "<a href='http://:/{$url}'{$attributes}>{$body}</a>";
}

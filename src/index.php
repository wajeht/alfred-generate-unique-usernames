<?php

$adjectives = json_decode(file_get_contents(__DIR__ . '/data/adjectives.json'));
$nouns = json_decode(file_get_contents(__DIR__ . '/data/nouns.json'));
$verbs = json_decode(file_get_contents(__DIR__ . '/data/verbs.json'));

$adjectives = $adjectives[array_rand($adjectives, 1)];
$nouns = $nouns[array_rand($nouns, 1)];
$verbs = $verbs[array_rand($verbs, 1)];

$username = $adjectives . $nouns . $verbs;

echo $username;

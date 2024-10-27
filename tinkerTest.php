<?php

$lang = ['pl', 'en', 'de'];
$description = 'To jest przykładowy opis produktu.';

$service = new \App\Services\TranslateDescriptionService($lang, $description);

$response = $service->translate();

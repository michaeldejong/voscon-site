<?php

    function show($language) {
        $locale = getLocale();
        if ($locale === $language) {
            return true;
        }
        return $language === 'en';
    }

    function getLocale() {
        preg_match_all('/(([a-z]+)(-[A-Z]+)?(;q=[0-9]+.[0-9]+)?)(\\,([a-z]+(-[A-Z]+)?(;q=[0-9]+.[0-9]+)?))*/', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $result);
        return strtolower($result[1][0]);
    }

?>
<?php

namespace Reworck\FilamentSettings;

class FilamentSettings
{
    public static array $fields = [];
    public static  $afterSave;

    public static function setFormFields(array $fields): void
    {
        self::$fields = $fields;
    }
    public static function setAfterSave($function): void
    {
        self::$afterSave = $function;
    }
}

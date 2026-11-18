<?php

namespace SessionsAndCookies\Responder;

class ResponseObject
{
    public function __construct (
        private string $TemplatePath,
        private int $HttpResponseCode
    ) {}
    public function GetTemplate(): string{
        return $this->TemplatePath;
    }
    public function GetResponseCode(): int
    {
        return $this->HttpResponseCode;
    }
}
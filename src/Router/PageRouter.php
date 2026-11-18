<?php

namespace SessionsAndCookies\Router;

use SessionsAndCookies\Action\HomeAction;
use SessionsAndCookies\Responder\ResponseObject;

class PageRouter
{
    public function Navigate(){
        $Url = $this->getUrlInfo();
        return match (isset($Url)) {
            str_starts_with($Url, "/home") => new HomeAction()->RenderHomePage(),
            ($Url === "/Sessions") => new HomeAction()->RenderPage1(),
            ($Url === "/Cookies") => new HomeAction()->RenderPage2(),
            ($Url === "/Page3") => new HomeAction()->RenderPage3(),
            ($Url === "/Page4") => new HomeAction()->RenderPage4(),
            ($Url === "/Page5") => new HomeAction()->RenderPage5(),
            default => new HomeAction()->RenderHomePage(),
        };
    }
    public function RenderPage(ResponseObject $responseObject): void {
        require_once $responseObject->GetTemplate();
    }
    public function getUrlInfo(): string
    {
        $request = $_SERVER['REQUEST_URI'];
        $url = parse_url($request);

        if (isset($url["host"])) {
            return '';
        }

        return $url["path"];
    }
}
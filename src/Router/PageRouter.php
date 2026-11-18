<?php

namespace SessionsAndCookies\Router;

use SessionsAndCookies\Action\HomeAction;
use SessionsAndCookies\Responder\ResponseObject;
use SessionsAndCookies\config\Routes;

class PageRouter
{
    public function Navigate(){
        $Url = $this->getUrlInfo();
        return match (isset($Url)) {
            str_starts_with($Url, Routes::HOME) => new HomeAction()->RenderHomePage(),
            ($Url === Routes::SESSIONS) => new HomeAction()->RenderPage1(),
            ($Url === Routes::COOKIES) => new HomeAction()->RenderPage2(),
            ($Url === Routes::SIGMA) => new HomeAction()->RenderPage3(),
            ($Url === Routes::SIGMA2) => new HomeAction()->RenderPage4(),
            ($Url === Routes::ABOUT) => new HomeAction()->RenderPage5(),
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
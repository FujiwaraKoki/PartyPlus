<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        $content = $response->content();

        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);

        $response->setContent($content);
        return $response;

        //$data = [
        //    ['name'=>'taro', 'mail'=>'taro@yamada'],
        //    ['name'=>'hanako', 'mail'=>'hanako@flower'],
        //    ['name'=>'sachiko', 'mail'=>'sachiko@happy'],
        //];
        //$request->merge(['data'=>$data]);
        //return $next($request);
    }
}

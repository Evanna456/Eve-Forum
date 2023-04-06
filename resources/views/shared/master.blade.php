<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('header')
</head>

<body>
    <noscript>
        <div align="center" style="background-color:#000000;width:100%;padding: 5px 0px 5px 0px;">
            <p style="text-align:center;font-size: 20px;color: #ffffff;">Your browser does not support JavaScript!</p>
            <p style="text-align:center;font-size: 15px;color: #ffffff;">Your browsing experience might get affected.</p>
        </div>
    </noscript>
    @yield('content')
</body>

</html>
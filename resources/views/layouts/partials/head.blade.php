<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tree Apps">
    <title>@stack('title')</title>
    <link rel="stylesheet" href="{{URL('/backend/assets/css/dashlite.css')}}">
    <link rel="stylesheet" href="{{URL('/backend/assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{URL('/backend/assets/css/theme.css')}}">
    <link rel="stylesheet" href="{{URL('/backend/assets/css/libs/jstree.css')}}">
    <link rel="stylesheet" href="{{URL('/backend/assets/css/skins/theme-'.Session::get('theme.primary_skin').'.css')}}">
    @stack('head')
</head>

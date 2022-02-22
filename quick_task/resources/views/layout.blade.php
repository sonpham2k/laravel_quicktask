<html>
<head>
    <title>@lang('messages.list')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-bar w3-border w3-Teal">
        <a href="{{ route('languages','vi') }}" class="nav-link w3-right">Tiếng việt</a>
        <a href="{{ route('languages','en') }}" class="nav-link w3-right">English</a>
    </div>
    <div class="w3-sidebar w3-bar-block w3-Teal" style="width:15%">
        <h3 class="w3-bar-item">Menu</h3>
        <a href="{{ route('departments.index') }}" class="w3-bar-item w3-button w3-Green">@lang('messages.department') </a>
        <a href="{{ route('staffs.index') }}" class="w3-bar-item w3-button w3-Green">@lang('messages.staff')</a>
    </div>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>

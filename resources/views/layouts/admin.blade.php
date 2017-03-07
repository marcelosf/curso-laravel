<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        @if(Auth::check())
            <?php $menuConfig = [
                'name' => Auth::user()->name,
                'menus' => [
                    ['name' => 'Contas a pagar', 'url' => '/teste', 'dropdownId' => 'teste'],
                    [ 'name' => 'Contas a receber', 'url' => '/teste1']
                ],
                'menusDropDown' => [
                    [
                        'id' => 'teste',
                        'items' => [
                            ['name' => "Listar contas", 'url' => '/listar'],
                            ['name' => "Criar contas", 'url' => '/criar']
                        ]
                    ]
                ],
                'urlLogout' => env('URL_ADMIN_LOGOUT'),
                'csrfToken' => csrf_token()
            ];
            ?>
            <admin-menu :config="{{ json_encode($menuConfig) }}"></admin-menu>
        @endif


        @yield('content')
    </div>

    <!-- Scripts -->
    <script src=" {{ asset('build/admin.bundle.js') }}"></script>
</body>
</html>

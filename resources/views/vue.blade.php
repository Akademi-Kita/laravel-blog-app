<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeblog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div id="app">
        <header v-responsive.md.lg.xl class="border-b-2 px-10 lg:px-24 xl:px-64">
            <header-component />
        </header>
        <router-view class="px-10 lg:px-24 xl:px-64"></router-view>
        <footer-component class="px-10 lg:px-24 xl:px-64" />
    </div>
</body>

</html>

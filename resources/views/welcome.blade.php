<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <livewire:styles/>
</head>
<body>
<div class="container">
    <livewire:user-onboarding/>
    <livewire:scripts/>
</div>
</body>
</html>

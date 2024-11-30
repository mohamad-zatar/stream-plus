<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <style>
        body {
            background-color: #f8f9fa;
        }
        .success-page {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .success-icon {
            font-size: 4rem;
            color: #28a745;
        }
        .message {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="success-page">
        <div class="text-center">
            <div class="success-icon">
                <i class="bi bi-check-circle-fill"></i>
            </div>
            <h1 class="mt-4">{{__('registration.registration_complete')}}</h1>
            @if (session('success'))
                <p class="message text-muted">{{ session('success') }}</p>
            @endif
            <a href="{{ route('home') }}" class="btn btn-primary mt-4">{{__('registration.homepage')}}</a>
        </div>
    </div>
</div>
</body>
</html>

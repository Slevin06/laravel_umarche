<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<div class="font-sans text-gray-900 antialiased">
    <div class="font-sans text-gray-900 antialiased">
        <div
            class="bg-dark min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

            <div
                class="w-full sm:max-w-md mt-6 px-20 py-20 bg-white shadow-md overflow-hidden sm:rounded-lg">

                <!-- Session Status -->

                <!-- Validation Errors -->

                <div class="form-group row mt-2">
                    <div class="whitespace-nowrap">
                        <a href="/login/google" class="btn btn-outline-secondary w-full"
                           style="padding:10px 100px; min-width:300px; max-width: 400px"
                           role="button">
                            Google Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

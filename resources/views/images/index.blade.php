<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Images</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="csrf_token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="max-w-lg mx-auto mt-24">
    <h1 class="text-4-xl font-bold text-center">Images</h1>
    <div id="app"></div>
    </div>
    <script src="{{mix('js/app.js')}}"></script>
</html>
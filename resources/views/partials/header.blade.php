<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ $title !== "" ? $title : "Five.sec.ph" }}
    </title>

    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
<x-success_msg />
<x-danger_msg />
<x-warning_msg />


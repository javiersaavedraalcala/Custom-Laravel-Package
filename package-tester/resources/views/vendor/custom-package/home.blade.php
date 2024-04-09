<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- This line is added for load custom package styles -->
    <link rel="stylesheet" href="/vendor/custom-package/css/example.css">
    <!-- This line is added for load custom package scripts -->
    <script src="/vendor/custom-package/scripts/example.js"></script>
</head>
<body>
    <main>
        <h1>Home view</h1>
        <p>{{ $message }}</p>
        <h3>This a edit after publish vendor files (views)</h3>
        <p>Translations: {{ trans('custom-package::message.welcome') }}</p>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Vue PDF Viewer</title>
    {{-- @vite(['resources/js/app.js', 'resources/css/app.css']) --}}
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>    

    
    
    <div id="app">
        <pdf-viewer pdf="{{ asset('test.pdf') }}"></pdf-viewer>
    </div>
    {{-- <script type="module" src="{{ mix('js/app.js') }}"></script> --}}
</body>
</html>

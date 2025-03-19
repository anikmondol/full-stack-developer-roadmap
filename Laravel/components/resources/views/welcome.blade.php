<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>



    <x-alert type="danger">
        <x-slot:title class="font-bold">
            Heading Here {{ $component->link("Just Testing",'https://getbootstrap.com/docs/5.3/components/alerts/#examples') }}
        </x-slot>
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.  </p>
    </x-alert>

    {{-- <x-card/> --}}


    @php
        $componentName = 'alert';
    @endphp

    <x-dynamic-component :component="$componentName" class="m-4" />

    <x-form action="/somepage" method='PUT' id="firstform" class="myform">
        <input type="text" name="name">
        <button type="submit">save</button>
    </x-form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

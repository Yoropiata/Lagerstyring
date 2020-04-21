<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
        <link rel="stylesheet" href="/css/app.css">

        <title>Lageroversigt</title>
        <style>
            
        </style>
    </head>
    <body>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Navn</th>
                    <th>Mængde</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->count }}</td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                </tr>
            </tfoot>
        </table>
        <script src="/js/app.js"></script>
    </body>
    <script>

    </script>
</html>
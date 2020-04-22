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
    <body class="bg-light">
        @include('navbar')
        <div class="d-flex w-100 justify-content-center">
            <div class="m-5 container">
                <table class="table table-light table-striped">
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
                            <td>{{ $product->count }} stk.</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
        
    <script>

    </script>
</html>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
        <link rel="stylesheet" href="/css/app.css">

        <title>Ret i lager</title>
        <style>
            
        </style>
    </head>
    <body>
        <!-- <div class="col-4 d-flex justify-content-center"> -->
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Navn</th>
                        <th>Mængde</th>
                        <th>hurtig ret</th>
                        <th>ret</th>
                        <th>slet</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->count }}</td>
                        <td>+ & - knap</td>
                        <td><div class="btn btn-primary">Ret</div></td>
                        <td><div class="btn btn-danger">Delete</div></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                    </tr>
                </tfoot>
            </table>
        <!-- </div> -->
        <script src="/js/app.js"></script>
    </body>
    <script>

    </script>
</html>
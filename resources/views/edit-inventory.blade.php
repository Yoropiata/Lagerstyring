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
        <div class="d-flex justify-content-center bg-light">
            <div class="mt-5">
                <button class="btn btn-primary mb-1" data-toggle="modal" data-target="#product-add">
                    Tilføj
                </button>
                <table class="table table-light table-striped">
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
                        <tr data-id="{{ $product->id }}">
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->count }}</td>
                            <td>+ & - knap</td>
                            <td><button onclick="edit(this);" class="btn btn-primary" data-toggle="modal" data-target="#product-edit">Ret</div></td>
                            <td><button onclick="del(this);" class="btn btn-danger">Slet</button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div id="product-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="product-add-title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="/inventar/ret">
                        <div class="modal-header">
                            <h5 class="modal-title" id="product-add-title">Tilføj produkt</h5>
                            <button class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="add-product-name">Navn</label>
                                <input id="add-product-name" placeholder="produkt navn" class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="add-product-amount">Mængde</label>
                                <input id="add-product-amount" class="form-control" type="number" name="amount" min="0" placeholder="0">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-primary" type="submit" value="Opret" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="product-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="product-edit-title" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="POST" action="/inventar/ret">
                    {{ method_field('PUT') }}
                    @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="product-edit-title">Ret produkt</h5>
                            <button class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="edit-product-name">Navn</label>
                                <input id="edit-product-name" placeholder="produkt navn" class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="edit-product-amount">Mængde</label>
                                <input id="edit-product-amount" class="form-control" type="number" name="amount" min="0" placeholder="0">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input id="edit-product-id" type="hidden" name="id" value="-1">
                            <input class="btn btn-primary" type="submit" value="Gem" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <<form id="delete-form" method="post">
        @csrf
        @method('DELETE')         
        </form>

        <script src="/js/app.js"></script>
    </body>
    <script>
    function edit(editEl) {
        var datarow = $(editEl).parent().parent().children();
        var id = $(datarow[0]).html();
        var name = $(datarow[1]).html();
        var amount = $(datarow[2]).html();

        $("#edit-product-id").val(id);
        $("#edit-product-name").val(name);
        $("#edit-product-amount").val(amount);
    }
    function del(deleteEl) {
        if(confirm("ønsker du at slette dette produkt?")) {
            var datarow = $(deleteEl).parent().parent().children();
            var id = $(datarow[0]).html();

            var form = $("#delete-form");
            form.attr('action', '/inventar/ret/' + id);
            form.submit();
        }
    }
    </script>
</html>
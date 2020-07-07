<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>clothes</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">PRODUCTS</h1>
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">NOME ARTICOLO</th>
                          <th scope="col">DESCIZIONE</th>
                          <th scope="col">CODICE</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($all_product as $prodotto)
                              <tr>
                                <td> {{$prodotto->id}}</td>
                                <td>{{$prodotto->name}}</td>
                                <td>{{$prodotto->description}}</td>
                                <td>{{$prodotto->code}}</td>
                              </tr>
                          @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

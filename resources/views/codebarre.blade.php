<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="js/main.js"> </script>
    <title>Code Barre</title>
</head>
<body>
    <header class="p-3" style="background-color: #FF812D;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">

                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="" class="nav-link px-2 text-white">ITEMM</a></li>
                </ul>
                <div class="text-end">
                    <a href="./">

                    </a>
                </div>
            </div>
        </div>
    </header>


    <!-- Création du tableau -->
    <div class="container mt-5">
    <table id='RLN' class="table table-striped table-bordered dt-responsive" style="width:100%">
        <thead>
        <tr>
            <th style="display:none">ID</th>
            <th>&emsp; <input type='checkbox' name='selectall' id='selectall'/></th>
            <th>Nom</th>
            <th>description</th>
            <th>Référence</th>
            <th>Quantité</th>
            <th>codebarre</th>
        </tr>
        </thead>
            @foreach ($products as $product)
        <tr>
            <td style="display:none">{{$product->id}}</td>
            <td><input type='checkbox' name='select' id='select'/></td>
            <td>{{$product->nom}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->reference}}</td>
            <td>{{$product->quantite}}</td>
            <td>{!!DNS1D::getBarcodeHTML($product->id, 'C39'),($product->description);!!}</td>
        </tr>
        @endforeach
    </table>
    </a>
    </div>
    <a href="{{ route('download-pdf2') }}" class="btn btn-primary">Télécharger en PDF</a>
</body>
</html>

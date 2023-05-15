<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qrcode</title>
</head>
<body>

    <!-- Création du tableau -->

    <table style="width:100%">

            @foreach ($products as $product)

        <tr>
            <td><img src="data:image/png;base64, {{$product->description}}" ><br/> {{$product->nom}}</td>
        </tr>
        @endforeach
    </table>



</body>
</html>


<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Gvue</title>
     <!-- Fonts -->
     <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
     <!-- Bootstrap -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
    <body>

        <p>Votre formulaire a été envoyé avec succès !</p>
        <p>Nom : <?php echo e($numero); ?></p>
        <p>Prénom : <?php echo e($description); ?></p>
        <div class="visible-print text-center">
             <!-- on génere un qrcode a partir de $numero -->
            <?php echo QrCode::size(100)->generate($numero); ?>

            <p>Scan me </p>
        </div>

        <div>
             <!-- on génere un barcode a partir de numero -->
            <?php echo DNS1D::getBarcodeHTML($numero, 'C39'); ?>

             <!-- decription de barcode  -->
       <p><?php echo e($description); ?></p>
        </div>

    </body>
  </html>
<?php /**PATH /var/www/html/testdd/resources/views/vue.blade.php ENDPATH**/ ?>
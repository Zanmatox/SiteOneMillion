<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 Form Validation Example - positronx.io</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 550px;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
         
    <?php $validation = \Config\Services::validation(); ?>

    <form method="post" action="<?php echo base_url('/index.php/ContactController/form') ?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="Nom" class="form-control">

        <!-- Error -->
        <?php if($validation->getError('Nom')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('Nom'); ?>
            </div>
        <?php }?>
      </div>
       

      <div class="form-group">
        <label>Email</label>
        <input type="text" name="Email" class="form-control">

        <!-- Error -->
        <?php if($validation->getError('Email')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('Email'); ?>
            </div>
        <?php }?>
      </div>

      <div class="form-group">
        <label>Message</label>
        <input type="text" name="Message" class="form-control">

        <!-- Error -->
        <?php if($validation->getError('Message')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('Message'); ?>
            </div>
        <?php }?>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </div>
    </form>

  </div>
</body>

</html>
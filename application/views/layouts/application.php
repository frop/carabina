<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?= base_url('assets/css/stylish-portfolio.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/font-awesome-4.0.3/css/font-awesome.min.css') ?>" rel="stylesheet">

    <script type="text/javascript"> window.base_url = "<?= base_url() ?>" </script>

    <? load_css(@$css); ?>
  </head>

  <body>
    <?= $content ?>

    <? load_js(@$js); ?>
  </body>

</html>
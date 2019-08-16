<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf8">
  <meta name="viewport"content="width=devicewidth,initialscale=1">
  <meta httpequiv="XUACompatible"content="IE=edge">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="row mt-4">
        <div class="col-xs-12 col-sm-10 col-md-8 offset-sm-1 offset-md-2 mt-3">
          <h1 class="text-center">
            <a href="<?php echo esc_url(site_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/logo.png" width="360" height="100" alt="サイバーセキュリティを勉強していく漢"></a>
          </h1>
        </div>
      </div>
  </header>

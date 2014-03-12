<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title><?php echo $view['title']; ?></title>

    <!-- css -->
    <link rel="stylesheet" href="/app/static/css/app.css">

    <!-- js -->
    <script src="/app/static/js/jquery-2.0.3.min.js"></script>
<?php if (isset($view['extrajs'])): ?>
    <script src="/app/static/js/<?php echo $view['extrajs']; ?>"></script>
<?php endif; ?>
    <script src="/app/static/js/app.js"></script>
  </head>

  <body class="<?php echo $view['name']; ?>">

    <?php include 'app/templates/' . $view['name'] . '.php'; ?>

    <footer id="app-footer">
      <nav>
        <a href="/about">About</a>
        &bull;
        <a href="https://twitter.com/izolate">Made by izolate</a>
      </nav>
    </footer>

  </body>
</html>
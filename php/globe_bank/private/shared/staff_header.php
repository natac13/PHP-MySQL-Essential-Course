<?php 
  if (!isset($page_title)) {
    $page_title = 'Staff Area';
  }
?>
<!doctype html>


<html lang="en">
  <head>
    <title>GBI - <?php echo h($page_title) ; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/staff.css') ?>" media="all">
  </head>

  <body>
    <header class="">
      <h1>GBI Staff Area</h1>
    </header>
    <nav>
      <ul>
        <li><a href="<?php echo WWW_ROOT . '/staff/index.php'; ?>" class="link">Menu</a></li>
      </ul>
    </nav>
<?php
require_once __DIR__ . '/helpers.php';
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        name="viewport">
  <meta content="ie=edge"
        http-equiv="X-UA-Compatible">
    <?= vite('main.js') ?>
  <title>Culture Job -- Thank you</title>
</head>
<body>
<main>
  <section class="container">
    <h1>Спасибо за заказ! </h1>
    <p> Ваш заказ No <?= $_SESSION['uuid'] ?? '' ?> принят.</p>
    <a class="button"
       id="save-phone"
       data-phone="<?= $_SESSION['phone'] ?? '' ?>"
       href="/">На главную</a>
  </section>
</main>
</body>
</html>

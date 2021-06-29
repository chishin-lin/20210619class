<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php
$begin = 12;
$end = 18;
for ($i=$begin;$i <= $end; $i += 3) {
    ?>
    <p style="font-size: < ?php echo $i;?>pt">
      歡迎使用PHP網頁程式設計
      <?php
    print "</p>";
} ?>
  </body>
</html>

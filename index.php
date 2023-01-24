<?php
?>

<!DOCTYPE html>
<html lang=en>

<head>
<meta charset=“UTF-8”>
<meta http-equiv=“X-UA-Compatible” content="IE=edge">
<meta name=“viewport” content="width=device-width,initial-scale=1.0">

<title>2ちゃんねる風掲示板</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="title">PHPで掲示板アプリ</h1>
<hr>
<div class="boardWrapper">
  <section>
    <article>
    <div class="wrapper">
    <div class="nameArea">
        <span>名前</span>
        <p class="username">Shincode</p>
        <time>:2023/1/23</time>
</div>
        <p class="comment">手書きのコメントです</p
     </div>
   </article>
  </section>
<form class="formWrapper">
    <div>
        <input type="submit" value="書き込む">
        <label for="">名前</label>
        <input type="text" value="username">
    </div>
    <div>
        <textarea class="commentTextArea"></textarea>
    </div>
</form> 
</div>
</body>
</html>
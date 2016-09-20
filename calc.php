<!DOCTYPE html>
<html>

<head>
  <title>Калькулятор</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
      <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>Калькулятор школьника</h1>
      <!-- Заголовок -->
      <!-- Область основного контента -->
    <form action='#' method="post">
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <select name="operator">
        <option name="+">+</option>
        <option name="-">-</option>
        <option name="*">*</option>
        <option name="/">/</option>
        <option name="%">%</option>
      </select>
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form>
      <!-- Область основного контента -->
  </div>
  <div id="nav">
    <h2>Навигация по сайту</h2>
      <!-- Меню -->
    <ul>
      <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='about.php'>О нас</a>
      </li>
      <li><a href='contact.php'>Контакты</a>
      </li>
      <li><a href='table.php'>Таблица умножения</a>
      </li>
      <li><a href='calc.php'>Калькулятор</a>
      </li>
    </ul>
      <!-- Меню -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
      &copy; Супер Мега Веб-мастер, 2000 &ndash; 2015
      <!-- Нижняя часть страницы -->
  </div>
</body>

</html>
<?php

var_dump($_POST);

$num1 = $_POST['num1'];
$operator = $_POST['operator'];
$num2 = $_POST['num2'];

if($operator === '+') {
    echo $num1 + $num2;
}

elseif($operator === '-') {
    echo $num1 - $num2;
}

elseif($operator === '%') {
    echo $num1 % $num2;
}

elseif($operator === '*') {
    echo $num1 * $num2;
}

elseif($operator === '/') {
    echo $num1 / $num2;
}
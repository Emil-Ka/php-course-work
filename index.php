<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/index.css">
</head>
<body>
  <?php
    require './components/header.php';
  ?>
  <main class="main">
    <div class="main__container container">
      <h1 class="main__title">Области знаний</h1>
      <div class="main__blocks">
        <div class="knowledge-list">
          <div class="knowledge-list__header">
            <h2 class="knowledge-list__title">Области знаний</h2>
          </div>
          <ul>
            <li>
              <h3>Кулинария</h3>
            </li>
            <li>
              <h3>Кулинария</h3>
            </li>
            <li>
              <h3>Кулинария</h3>
            </li>
          </ul>
        </div>
        <div class="knowledge-form">
          <div class="knowledge-form__header">
            <h2 class="knowledge-form__title">Создать область знаний</h2>
          </div>
          <form action="add_knowledge.php" method="post">
            <label>
              <span class="knowledge-form__label">Название области знаний:</span>
              <input class="knowledge-form__input" name="name" type="text" placeholder="Спорт">
            </label>
            <label>
              <span class="knowledge-form__label">Описание области знаний:</span>
              <textarea class="knowledge-form__textarea" name="description" cols="30" rows="3" placeholder="Это область знаний про спорт..."></textarea>
            </label>
            <button class="knowledge-form__btn" type="submit">Создать</button>
          </form>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>New</title>
</head>
<body>
    <header>
        <div class="header">
            <!--<form action="" method="post">
                <select id="category" name="category">
                    <option value="News">Новости</option>
                    <option value="Opinion">Мнение</option>
                    <option value="Science">Наука</option>
                    <option value="Life">Жизнь</option>
                    <option value="Travel">Путешествия</option>
                    <option value="Moneys">Деньги</option>
                    <option value="Art_Design">Арт Дизайн</option>
                    <option value="Sports">Спорт</option>
                    <option value="People">Люди</option>
                    <option value="Health">Здоровье</option>
                    <option value="Education">Образование</option>
                </select>
            </form>-->
            <h3>Разделы</h3>
            <form>
                <input name="s" placeholder="Поиск" type="search" id="search" name="search">
                <button type="submit" id="submit">Найти</button>
            </form>
            <a href="Admin.php">Войти</a>
        </div>
    </header>
    <main>
        <div class="mainn">
            <h1>Пингвины</h1>
            
            <div class="pogoda">
                <h2>Вторник, 16 января, 2024</h2>
                <h3>- 23 °C</h3>
            </div>
        </div>
        <div class="main">
            <a href="#" value="News">Новости</a>
            <a href="#" value="Opinion">Мнение</a>
            <a href="#" value="Science">Наука</a>
            <a href="#" value="Life">Жизнь</a>
            <a href="#" value="Travel">Путешествия</a>
            <a href="#" value="Moneys">Деньги</a>
            <a href="#" value="Art_Design">Арт Дизайн</a>
            <a href="#" value="Sports">Спорт</a>
            <a href="#" value="People">Люди</a>
            <a href="#" value="Health">Здоровье</a>
            <a href="#" value="Education">Образование</a>
        </div>
    </main>
<form action="createNewValid.php" method="post" enctype="multipart/form-data" class="form1">
    <label for="NewsCateg">Категории:</label>
    <select id="NewsCateg" name="NewsCateg">
        <option value="News">Новости</option>
        <option value="Opinion">Мнение</option>
        <option value="Science">Наука</option>
        <option value="Life">Жизнь</option>
        <option value="Travel">Путешествия</option>
        <option value="Moneys">Деньги</option>
        <option value="Art_Design">Арт Дизайн</option>
        <option value="Sports">Спорт</option>
        <option value="People">Люди</option>
        <option value="Health">Здоровье</option>
        <option value="Education">Образование</option>
    </select>
    <label for="image">Изображение:</label>
    <input type="file" id="image" name="image" accept="image/*"><br><br>

    <label for="title">Заголовок:</label>
    <input type="text" id="title" name="title"><br><br>

    <label for="text">Текст:</label><br>
    <textarea id="text" name="text"></textarea><br><br>


    <input type="submit" value="Отправить" id="submit1">
</form>
</body>
</html>
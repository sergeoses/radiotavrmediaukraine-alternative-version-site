<!DOCTYPE html>
<html>
<head>
    <title>Ваш блог</title>
     <link rel="stylesheet" href="style.css">
    <!-- Підключіть ваші стилі CSS -->
</head>
<body>
    <!-- Ваша шапка сайту -->
    <header>
         <nav>
        <ul>
            <li><a href="HitFm.html">Перехід на радіостанцію Хіт ФМ</a></li>
            <li><a href="RadioRocks.html">Перехід на радіостанцію РадіоРокс</a>
         </ul>
        </nav>
        <!-- Меню та інші елементи шапки -->
    </header>

    <!-- Блок для написання дописів -->
    <section>
        <h2>Напишіть допис</h2>
        <form method="post" action="save_post.php">
            <input type="text" name="title" placeholder="Заголовок допису" required>
            <textarea name="content" placeholder="Текст допису" required></textarea>
            <button type="submit">Зберегти допис</button>
        </form>
    </section>

    <!-- Виведення дописів -->
    <section>
        <h2>Дописи</h2>
        <ul>
            <?php
            // Підключіть ваш код PHP для виведення дописів з бази даних або файлу
            // Наприклад, використовуючи цикл для перебору дописів
            // $posts - масив з дописами (заголовок, текст і т.д.)
            foreach ($posts as $post) {
                echo "<li><h3>" . $post['title'] . "</h3><p>" . $post['content'] . "</p></li>";
            }
            ?>
        </ul>
    </section>

    <!-- Ваш підвал сайту -->
    <footer>
        <!-- Елементи підвалу -->
    </footer>
</body>
</html>

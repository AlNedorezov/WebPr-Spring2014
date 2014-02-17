<!DOCTYPE html>
<title>HTML Template</title>
<header>
    <meta name="keywords" content="bla-bla-bla">
    <meta name="description" content="bla-bla-bla site">
    <meta http-equiv="Content-Type" content="text/html" charset="ANSI"/>
</header>
</body>
    <?php
        echo "<p>Text</p>";
    ?>
    <h1>Заголовок первого уровня</h1>
    <h2>Заголовок второго уровня</h2>
    <h3>Заголовок третьего уровня</h3>
    <h4>Заголовок четвёртого уровня</h4>
    <h5>Заголовок пятого уровня</h5>
    <h6>Заголовок шестого уровня</h6>
<p>абзац</p>
<br>
<hr>
<i>курсив</i>
<b>жирный</b>
<u>подчёркивание</u>
<s>зачёркивание</s>
<sub>подстрочный текст</sub>
<sup>надстрочный текст</sup>
<br>
<b><i><s>Пример форматирования <br>текста</s></i></b>
<br>
E=mc<sup>2</sup>
<br>
H<sub>2</sub>0
<br>
<h2>Списки</h2>
<br>
<ol>
    <li>first element</li>
    <li>second element
    <ul>
    <li>first element</li>
    <li>second element</li>
    <li>third element</li>
    </ul>
    </li>
    <li>third element</li>
</ol>
<br>
<img src="1.jpg" alt="image" title="Doctor is coming" width="" height="250">
<br>
<a href="http://twitter.com/AlNedorezov" title="Follow AlNedorezov on twitter">Follow me on twitter</a>
<br>
<table border="1">
    <tr><th>1</th><th>2</th></tr>
    <tr><td colspan="2"><div style="text-align: center">3</div></td></tr>
</table>

<p><img src="1.jpg" alt="image" title="Doctor is coming" width="" height="125" style="text-align: left; float: left">
 Тег img предназначен для отображения на веб-странице изображений в графическом формате GIF, JPEG или PNG. Адрес файла с картинкой задаётся через атрибут src. Если необходимо, то рисунок можно сделать ссылкой на другой файл, поместив тег <img> в контейнер <a>. При этом вокруг изображения отображается рамка, которую можно убрать, добавив атрибут border="0" в тег img.

Рисунки также могут применяться в качестве карт-изображений, когда картинка содержит активные области, выступающие в качестве ссылок. Такая карта по внешнему виду ничем не отличается от обычного изображения, но при этом оно может быть разбито на невидимые зоны разной формы, где каждая из областей служит ссылкой.
</p>
</body>
</html>
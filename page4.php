<!DOCTYPE html>
<title>HTML Template</title>
<header>
    <meta name="keywords" content="bla-bla-bla">
    <meta name="description" content="bla-bla-bla site">
    <meta http-equiv="Content-Type" content="text/html" charset="ANSI"/>
    <link type="text/css" rel="StyleSheet" href="styletable.css" />
</header>
</body>
    <?php
        echo "<p>«ан€тие є4</p>";
        for ($i=0; $i<=100; $i++) { echo "$i; "; }

        echo "<hr><br>";

        // rand(0, $x) - генераци€ случайного целого в заданном диапазоне
        $a="ABCDEFG";
        $len=5;
        for ($i=0; $i<$len; $i++)
        {
            $letter_number=rand(0, $i);
            print $a[$letter_number];
        }
        
        echo "<hr><br>";
        $array=array();
        for ($i=0; $i<1000; $i++)
        {
            $letter_number=rand(0, 9);
            $array[]=$letter_number;
        }
        for ($i=0; $i<1000; $i++)
        {
           if($array[$i]==5) { $u++; }
        }
        print $u;

        // —оздать массив со структурированной информацией дл€ таблицы ниже, циклом выводить таблицу книг из этого массива

    ?>
<br><hr><br>

<table border="1" style="width: 100%">
    <tr class="head"><th>ID</th><th>Title</th><th>Author</th><th>Description</th><th>ISBN</th><th>Price</th><th>Availability</th></tr>
    <tr class="odd">
        <td style="text-align: center">1</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center" class="green">Text</td>
    </tr>
    <tr class="even">
        <td style="text-align: center">2</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center" class="red">Text</td>
    </tr>
    <tr class="odd">
        <td style="text-align: center">3</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center" class="red">Text</td>
    </tr>
    <tr class="even">
        <td style="text-align: center">4</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center">Text</td>
        <td style="text-align: center" class="green">Text</td>
    </tr>
</table>
</body>
</html>
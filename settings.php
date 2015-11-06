<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Interview</title>
</head>
<body>
    <div class="wrapper" style="margin: 20px">
    <h1>Опрос студентов группы СП-7</h1><br/>
    <h2>Пожалуйста, если вам не безразличная учёба ответьте на всего один вопрос</h2><br/>
        по пунктам:

        <form action="result.php" method="post">
            Введите ваше имя: <input type="text" name="name" id="name" required="required"/> <br/>
            <input type="radio" value="1" name="answer" id="check1"/> <label for="check1">1) ещё 4 занятия по сетям</label> <br/>
            <input type="radio" value="2" name="answer" id="check2"/> <label for="check2">2) джава с Беляковым</label> <br/>
            <input type="radio" value="3" checked name="answer" id="check3"/> <label for="check3">3) проектирование и планирование, формирование ТЗ (классика и реальность),
                подход к работе с клиентами и командой <b> у Артамонова</b> </label><br/>
            <input type="submit" value="Посмотреть результаты"/>
        </form>

    </div>

</body>
</html>
hello
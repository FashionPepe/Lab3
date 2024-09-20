<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./auth.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <title>auth</title>
</head>
<body>
    <header>
        <p id="name">Долгов Дмитрий</p>
        <div id="links">
        <button <?php 
                $link = "./index.php";
                $name = 'Главная';
                $curentPage = true;
                
                if ($curentPage)
                    echo 'class="link" ';
                echo 'onclick="window.location.href =\''.$link.'\'"';

            ?>><?php 
                echo $name
            ?></button>
            <button class="link">Портфолио</button>
            <button class="link">О себе</button>
            <button <?php 
                $link = "./auth.php";
                $name = 'Авторизация';
                $curentPage = true;
                
                if ($curentPage)
                    echo 'class="link" ';
                echo 'onclick="window.location.href =\''.$link.'\'"';

            ?>><?php 
                echo $name
            ?></button>
            <button <?php 
                $link = "./appeal.php";
                $name = 'Обращение';
                $curentPage = true;
                
                if ($curentPage)
                    echo 'class="link" ';
                echo 'onclick="window.location.href =\''.$link.'\'"';

            ?>><?php 
                echo $name
            ?></button>
        </div>
        
    </header>
    <main>
        <form action="" class="form">
            <p id="head-name">Авторизация</p>
            <div class="warper">
                <input id="login" type="text" class="text-field" placeholder="Логин">
                <input id="pass" type="password" class="text-field" placeholder="Пароль">
                <div class="remember-warper">
                    <input id="remember" type="checkbox">
                    <label for="remember">Запомнить пароль</label>
                    
                </div>
            </div>
            <input type="submit" value="Войти" id="submit" onclick="alert('Авторизация')">
            
        </form>
    </main>
    <footer>
        <p id="email"><?php echo date("Сформированно d-m-Y в H:i:s"); ?></p>
    </footer>
    
</body>
</html>
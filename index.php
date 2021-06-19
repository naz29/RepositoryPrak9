<!DOCTYPE html>
<html lang="en">
<head>
    <title>GALLERY FOTO</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>
    <header>
        <img src="assets/image/picture.PNG" alt="IMG" id="gam">
        <h1 class="jumbotron">  </h1>
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php"class="active">Home</a> 
            </li>
            
            <li>
                <a href="index.php?page=Login">Login</a>
            </li>
            
            <li>
                <a href="index.php?page=edit.php"></a>
            </li>     
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main.php ";
        }
        ?>
    </section>
    <footer>
                Copyright &copy; PEMOGRAMAN BERBASIS WEB LANJUTAN oleh SYANIA ALDILA NAZRI ||  0702181092
    </footer>
    </main>
</body>
</html>
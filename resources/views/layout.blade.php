<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet"> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    
    <header>
        <nav>
            <div>
                Eben<span>.</span>  
            </div>
            <div>
                <img src="images/menu.png">
            </div>
        </nav>
        <nav>

        </nav>
    </header>

    <div class="toggle-nav">
        <h1><img src="images/cancel.png"></h1>
        <div>
            <h2>Eben Web Studio</h2>
            <ul>
                <li><span>01</span> Home</li>
                <li><span>02</span> About</li>
                <li><span>03</span> Services</li> 
                <li><span>04</span> Contact</li>
                <li><span>05</span> Projects</li>
            </ul>
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <footer>
        <div>
            <h2>Eben Web Studio</h2>
            My name is Akindele Ebenezer Oluwatobi. <br> I'm a Full Stack Developer. <br> My responsibility is to build and implement pleasant/responsive websites for businesses.
        </div>
        <div>
            <h2>Navigation</h2>
            <ul>
                <li>Home</li>
                <li>About</li>
                <li>Services</li> 
                <li>Contact</li>
                <li>Projects</li>
            </ul>
        </div>
        <div>
            <h2>Get in touch</h2>
            <ul>
                <li><a href='mailto:tobi.akindele@gmail.com' target='_blank'>Gmail</a></li>
                <li><a href='https://www.linkedin.com/in/akindele-ebenezer-566a16b8/' target='_blank'>Linkedin</a></li>
                <li><a href='https://www.facebook.com/akindele.ebenezer/' target='_blank'>Facebook</a></li>
                <li><a href='https://www.instagram.com/ebenezer__/?hl=en' target='_blank'>Instagram</a></li>
                <li><a href="https://api.whatsapp.com/send?phone=2349052757805/">Whatsapp</a></li>
            </ul>
        </div>
    </footer>
    <p>Copyright 2022: &copy;Eben Web Studio</p>
    <script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
    <script src="scripts/scripts.js"></script>
</body>
</html>
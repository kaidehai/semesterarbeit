<?php
/**
 * Plugin Name:       Mandatsverwaltung
 * Description:       Kundenverwaltung
 * Version:           1.1.1
 * Requires PHP:      7.2
 * Author:            Kai Fuchs
 * Author URI:        https://webdesignthurgau.ch
 */
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    ?>
    <!doctype html>
    <html>
        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <title>Snippet - BBBootstrap</title>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
            <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
            <script type='text/javascript' src=''></script>
            <style>@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

                :root {
                    --header-height: 3rem;
                    --nav-width: 68px;
                    --first-color: #4723D9;
                    --first-color-light: #AFA5D9;
                    --white-color: #F7F6FB;
                    --body-font: 'Nunito', sans-serif;
                    --normal-font-size: 1rem;
                    --z-fixed: 100
                }

                *,
                ::before,
                ::after {
                    box-sizing: border-box
                }

                body {
                    position: relative;
                    margin: var(--header-height) 0 0 0;
                    padding: 0 1rem;
                    font-family: var(--body-font);
                    font-size: var(--normal-font-size);
                    transition: .5s
                }

                a {
                    text-decoration: none
                }

                .header {
                    width: 100%;
                    height: var(--header-height);
                    position: fixed;
                    top: 0;
                    left: 0;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    padding: 0 1rem;
                    background-color: var(--white-color);
                    z-index: var(--z-fixed);
                    transition: .5s
                }

                .header_toggle {
                    color: var(--first-color);
                    font-size: 1.5rem;
                    cursor: pointer
                }

                .header_img {
                    width: 35px;
                    height: 35px;
                    display: flex;
                    justify-content: center;
                    border-radius: 50%;
                    overflow: hidden
                }

                .header_img img {
                    width: 40px
                }

                .l-navbar {
                    position: fixed;
                    top: 0;
                    left: -30%;
                    width: var(--nav-width);
                    height: 100vh;
                    background-color: var(--first-color);
                    padding: .5rem 1rem 0 0;
                    transition: .5s;
                    z-index: var(--z-fixed)
                }

                .nav {
                    height: 100%;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    overflow: hidden
                }

                .nav_logo,
                .nav_link {
                    display: grid;
                    grid-template-columns: max-content max-content;
                    align-items: center;
                    column-gap: 1rem;
                    padding: .5rem 0 .5rem 1.5rem
                }

                .nav_logo {
                    margin-bottom: 2rem
                }

                .nav_logo-icon {
                    font-size: 1.25rem;
                    color: var(--white-color)
                }

                .nav_logo-name {
                    color: var(--white-color);
                    font-weight: 700
                }

                .nav_link {
                    position: relative;
                    color: var(--first-color-light);
                    margin-bottom: 1.5rem;
                    transition: .3s
                }

                .nav_link:hover {
                    color: var(--white-color)
                }

                .nav_icon {
                    font-size: 1.25rem
                }

                .show {
                    left: 0
                }

                .body-pd {
                    padding-left: calc(var(--nav-width) + 1rem)
                }

                .active {
                    color: var(--white-color)
                }

                .active::before {
                    content: '';
                    position: absolute;
                    left: 0;
                    width: 2px;
                    height: 32px;
                    background-color: var(--white-color)
                }

                .height-100 {
                    height: 100vh
                }

                @media screen and (min-width: 768px) {
                    body {
                        margin: calc(var(--header-height) + 1rem) 0 0 0;
                        padding-left: calc(var(--nav-width) + 2rem)
                    }

                    .header {
                        height: calc(var(--header-height) + 1rem);
                        padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
                    }

                    .header_img {
                        width: 40px;
                        height: 40px
                    }

                    .header_img img {
                        width: 45px
                    }

                    .l-navbar {
                        left: 0;
                        padding: 1rem 1rem 0 0
                    }

                    .show {
                        width: calc(var(--nav-width) + 156px)
                    }

                    .body-pd {
                        padding-left: calc(var(--nav-width) + 188px)
                    }
                }</style>
        </head>
        <body oncontextmenu='return false' class='snippet-body'>
        <body id="body-pd"> 
            <header class="header" id="header">
                <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>

            </header>
            <div class="l-navbar" id="nav-bar">
                <nav class="nav">
                    <div> <a href="home.php" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Mandatsverwaltung</span> </a>
                        <a href="home.php" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                        <a href="customer.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Kunden</span> </a> 
                        <a href="notes.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Notizen</span> </a> 
                        <a href="fristen.php" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Fristen</span> </a> 
                        <div class="nav_list"> <a href="adduser.php" class="nav_link active"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Benutzer Hinzufügen</span>
                                <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Logout</span> </a>

                                </nav>
                        </div>


                        <!--Container Main start-->

                        <div class="height-100 bg-light">
                            <h4>Kunde hinzufügen</h4>
                            <table class="table table-bordered">
                                <br>
                                <thead>
                                </thead>


                                <head>
                                </head>
                                <body>
                                    <?php
                                    $sname = "localhost";
                                    $unmae = "wp_Admin";
                                    $password = "FYP2PFWSzS45dbS1";
                                    $db_name = "sa_wordpress";

                                    $conn = mysqli_connect($sname, $unmae, $password, $db_name);

                                    if (!$conn) {
                                        echo "Connection failed!";
                                    }


                                    if (isset($_POST['submit'])) {
                                        $kundenname = $_POST["kundenname"];
                                        $arbeiten = $_POST['arbeiten'];
                                        $Mitarbeiter = $_POST['Mitarbeiter'];
                                        $status = $_POST['status'];
                                        $note = $_POST['note'];


                                        echo $kundenname . $arbeiten . $Mitarbeiter . $status . $note;

                                        $sql = "INSERT INTO costumer (kundenname, arbeiten, Mitarbeiter, status, note) VALUES (?, ?, ?, ?, ?)";
                                        $stmt = mysqli_stmt_init($conn);
                                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                                            echo "<div class='form'>
                                            <h3>Versuchen Sie es noch einmal</h3><br/>
                                            <p class='link'>Klick hier <a href='adduser.php'>Kunde hinzufügen</a> um es nocheinmal zu versuchen.</p>
                                            </div>" . $sql;
                                        } else {
                                            mysqli_stmt_bind_param($stmt, 'sss', $kundenname, $arbeiten, $Mitarbeiter, $status, $note);
                                            mysqli_stmt_execute($stmt);
                                            echo "<div class='form'>
                                            <h3>Kunde wurde erfolgreich hinzugefügt</h3><br/>
                                            </div>";
                                        }
                                    } else {
                                        ?>
                                        <form class="form" action="" method="post">
                                            <input type="text" class="login-input" name="kundenname" placeholder="Kundenname" required>
                                            <br>
                                            <br>
                                            <input type="text" class="login-input" name="note" placeholder="Notiz">
                                            <br>
                                            <br>
                                            Aufgabenbereich: 

                                            <select>  
                                                <option name="arbeiten">Buchhaltung</option>}  
                                                <option name="arbeiten">Lohnbuchhaltung</option>  
                                                <option name="arbeiten">Beratung</option>  
                                                <option name="arbeiten">Steuern</option>  
                                            </select>   
                                            <br>
                                            <br>
                                            Mitarbeiter: 

                                            <select>  
                                                <option name="Mitarbeiter">Kai</option>}  
                                                <option name="Mitarbeiter">Herbert</option>  
                                                <option name="Mitarbeiter">Franz</option>  
                                                <option name="Mitarbeiter">Daniel</option>  
                                            </select>   

                                            <br>
                                            <br>
                                            Status: 

                                            <select>  
                                                <option name="status">Offen</option>}  
                                                <option name="status">In bearbeitung</option>  
                                                <option name="status">Erledigt</option>  
                                            </select>   

                                            <br>
                                            <br>
                                            <input type="submit" name="submit" value="Register" class="login-button">
                                        </form>
                                        <?php
                                    }
                                    ?>
                                </body>


                        </div>

                        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
                        <script type='text/javascript' src=''></script>
                        <script type='text/javascript' src=''></script>
                        <script type='text/Javascript'>document.addEventListener("DOMContentLoaded", function(event) {

                            const showNavbar = (toggleId, navId, bodyId, headerId) =>{
                            const toggle = document.getElementById(toggleId),
                            nav = document.getElementById(navId),
                            bodypd = document.getElementById(bodyId),
                            headerpd = document.getElementById(headerId)


                            if(toggle && nav && bodypd && headerpd){
                            toggle.addEventListener('click', ()=>{

                            nav.classList.toggle('show')

                            toggle.classList.toggle('bx-x')

                            bodypd.classList.toggle('body-pd')

                            headerpd.classList.toggle('body-pd')
                            })
                            }
                            }

                            showNavbar('header-toggle','nav-bar','body-pd','header')


                            const linkColor = document.querySelectorAll('.nav_link')

                            function colorLink(){
                            if(linkColor){
                            linkColor.forEach(l=> l.classList.remove('active'))
                            this.classList.add('active')
                            }
                            }
                            linkColor.forEach(l=> l.addEventListener('click', colorLink))

                            });</script>

                        </body>
                        </html>
                        <?php
                    } else {
                        header("Location: index.php");
                        exit();
                    }
                    ?>
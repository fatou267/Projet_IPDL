<div class="navbar">
    <div class="logo">
        <a href="/">
            <img src="/public/images/home/logo.gif" alt="">
        </a>
    </div>

    <nav>
        <ul>
            <li>
                <a href="/">Accueil</a>
            </li>
            <li>
                <a href="#about">A propos</a>
            </li>
            <li>
                <div class="dropdown">
                    <a href="#">Admission</a>
                    <div class="dropdown-menu">
                        <a href="/register">Inscription</a>
                        <a href="#">Réinscription</a>
                    </div>
                </div>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            <li>
                <?php
                    if (isset($_COOKIE['email'])) {
                        echo '
                        <a href="/logout" class="logout">Se déconnecter</a>
                        ';
                    }else{
                        echo '
                        <a href="/login" class="login">Se connecter</a>
                        ';
                    }
                    ?>
            </li>
        </ul>
    </nav>
</div>
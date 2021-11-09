<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/../../public/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/../../public/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/../../public/images/favicon/">
    <link rel="manifest" href="/site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="../../../../public/css/home.css" type="text/css">
    <link rel="stylesheet" href="../../../../public/css/navbar.css" type="text/css">

    <title>EDMI-Ecole Doctorale de Mathématiques et Informatique</title>
</head>

<body>
    <div class="content">
        <header class="header">
        <div class="navbar ">
        <div class="logo">
            <a href="/">
                <img src="/../../public/images/home/logo.gif" alt="">
            </a>
        </div>
    
        <nav>
            <ul>
                <li>
                    <a href="#">Accueil</a>
                </li>
                <li>
                    <a href="#about">A propos</a>
                </li>
                <li>
                    <div class="dropdown">
                        <a href="#adm">Admission</a>
                        <div class="dropdown-menu">
                            <a href="#">Inscription</a>
                            <a href="#">Réinscription</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
                <li>
                    <?php
                        if (isset($_COOKIE['email'])) {
                            echo '
                            <a href="/logout" class="logout">Se déconnecter</a>
                            ';
                        }else{
                            echo '
                            <a href="../connection/login.php" class="login">Se connecter</a>
                            ';
                        }
                        ?>
                </li>
            </ul>
        </nav>
    </div>
           
                <div class="title">

                    <h1>ECOLE DOCTORALE MATHÉMATIQUES-INFORMATIQUE</h1>
                    <h2>Université Cheikh Anta Diop de Dakar</h2>
                </div>
        </header>
        <section class="" id="about">
            <div class="container">
                <div class="d-flex justify-content-center">

                    <div class="card mb-3" style="max-width: 540px; margin-top: 15%;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/../../public/images/home/about.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body about-content">
                                    <h1 class=" card-title ">A PROPOS</h1>
                                    <p class="mt-4 ">L’école doctorale de Mathématiques et Informatique de l’Université Cheikh Anta Diop de Dakar a pour but de coordonner et d’organiser toutes les études doctorales en Mathématiques et Informatique à l’UCAD, aussi bien
                                        la formation à la recherche que la production scientifique en Mathématique, en Informatique ainsi que dans les domaines qui leur sont connexes. Son siège est au département de Mathématiques et Informatique de la
                                        Faculté des Sciences et Techniques. L’école doctorale comporte deux mentions : Mathématiques- Modélisation et Informatique-Télécommunications. Nous vous invitons à parcourir notre site et à découvrir les formations
                                        et la communauté dont chaque élève de EDMI bénéficie. Contactez-nous dès aujourd'hui pour planifier une visite, en apprendre plus sur les modalités d'inscription ou poser toute autre question.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="text-center" style="color: var(--primary); margin-top: 5%;">E.D.M.I</h2>
            <div class="row g-0 mx-4 mt-5">
                <div class="col 5 mx-4">
                    <div class="card h-100">
                        <img src="/../../public/images/home/presentation.png" class="card-img-top" alt="...">

                        <div class="card-body titre text-center">
                            <div class="m-5 p-5">
                                <h5 class="card-title">PRÉSENTATION </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mx-4">
                    <div class="card h-100">
                        <img src="/../../public/images/home/admission.jpg" class="card-img-top" alt="...">

                        <div class="card-body titre text-center">
                            <div class="m-5 p-5">
                                <h5 class="card-title">ADMISSIONS EXPLIQUÉES </h5>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mx-4">
                    <div class="card h-100">
                        <img src="/../../public/images/home/faculty.jpg" class="card-img-top" alt="...">
                        <div class="card-body titre text-center">
                            <div class="m-5 p-5">
                                <h5 class="card-title ">NOS FILLIERES</h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="bg-primary text-white quote mt-5 rounded-3">

                <p class="text-center p-5"><q>
                        Je crois au rationnel, pas au pouvoir magique de l’éducation.</q></p>
                <p class="text-center fw-bolder">Maria Edgeworth</p>

            </div>
        </section>

        <section id="adm">
            <h3 class="text-center text-primary my-5">ADMISSIONS ET INSCRIPTION</h3>
            <p class="text-primary mb-5 text-center admission">EDMI est fier(ère) d'ouvrir les admissions pour la prochaine année scolaire. Découvrez plus d'informations sur les modalités d'inscription, les prérequis, les frais et les aides financières ci-dessous. N'hésitez pas à nous contacter pour en
                savoir plus.</p>
            <div class="card-group mx-5 mt-5">

                <div class="mr-4 card">
                    <img src="/../../public/images/home/biblio.png" class="card-img-top" alt="...">
                    <div class="card-body admission-body bg-primary p-5 titre text-center">
                        <h5 class="card-title" style="margin-top: 10%;">Ce qu’il faut savoir sur l’inscription</h5>
                        <p class="card-text" style="margin-top: 10%;">Nous vous invitons à entamer les démarches d'inscription à EDMI en prenant rendez-vous pour une visite de notre établissement. Une visite guidée personnalisée vous aidera à vous faire une idée de ce à quoi pourrait ressembler votre
                            quotidien dans notre établissement. C'est également l'occasion pour nous de vous consacrer du temps, et de répondre à toutes vos questions.</p>
                        <div class="contact">
                            <button type="button" class="mt-5">Contact</button>

                        </div>
                    </div>
                </div>
                <div class="mr-4 card">
                    <img src="/../../public/images/home/header.jpg" class="card-img-top" alt="...">
                    <div class="card-body admission-body bg-primary p-5 titre text-center">
                        <h5 class="card-title" style="margin-top: 10%;">N'attendez pas plus longtemps</h5>
                        <p class="card-text" style="margin-top: 10%;">Bien que les bulletins de note soient un facteur important dans l'admission à EDMI, nous prenons en considération de nombreux autres éléments. Réussite sire ou extra-scolaire, expériences et qualités personnelles; ces éléments,
                            souvent sous-estimés sont pourtant les indicateurs précieux d'un accomplissement tant scolaire qu'individuel.
                        </p>
                        <div class="contact">
                            <button type="button" class="mt-5">Contact</button>

                        </div>
                    </div>
                </div>
                <div class="col mr-4 card">
                    <img src="/../../public/images/home/guarantee.jpg" class="card-img-top" alt="...">
                    <div class="card-body admission-body bg-primary p-5 titre text-center">
                        <h5 class="card-title" style="margin-top: 10%;">Talents recherchés</h5>
                        <p class="card-text" style="margin-top: 10%;">Les notes ne représentent qu'une partie de la vie d'un étudiant, elle sont souvent trop prises en compte par les bureaux d'inscriptions des établissements. EDMI sélectionne ses élèves à partir d'éléments indiquant leur potentiel
                            à venir. Ces caractéristiques incluent leur curiosité intellectuelle, leur persévérance face à l'adversité et leur créativité. Pour obtenir plus d'informations ou commencer votre inscription, veuillez contacter le bureau des
                            admissions.
                        </p>
                        <div class="contact">
                            <button type="button" class="mt-5 ">Contact</button>

                        </div>

                    </div>
                </div>
            </div>

        </section>

        <section id="contact">
            <div class="card border-0 mt-5">
                <img src="/../../public/images/home/guarantee.jpg" class="card-img" alt="...">
                <div class="card-img-overlay mx-auto m-5">
                    <div class="footer">
                        <div class="footer-content">
                            <div class="footer-section">
                                <div class="card titre">

                                    <div class="contact_header jumbotron text-center">
                                        <h1 class="display-4">NOUS CONTACTER</h1>
                                    </div>

                                    <div class=" container">
                                        <div class="row" style="margin-left: 15%;">
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <div class="row mt-2">
                                                        <div class="">
                                                            <div class="form-group">
                                                                <label>Nom*</label>

                                                                <input type="text" class="form-control" placeholder="Nom">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="">
                                                            <div class="form-group">
                                                                <label>Email*</label>

                                                                <input type="email" class="form-control" placeholder="Email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="">
                                                            <div class="form-group">
                                                                <label>Objet*</label>

                                                                <input type="text" class="form-control" placeholder="Message">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label>Message*</label>

                                                                <textarea class="form-control">
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center mt-2">
                                                        <div class="col-sm-12 contact">
                                                            <button class="w-25">Submit</button>
                                                            <br><br>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="card-footer text-center">
            <div class="footer-bottom">
                <small class="text-muted ">&copy;Copyright 2021 par EDMI</small>
                <br><br>
                <span class="icon-stack">
                    <i class="icon-check-empty icon-stack-base"></i>
                    <i class="icon-linkedin  icon-2x"></i>
                </span>
                <span class="icon-stack">
                    <i class="icon-check-empty icon-stack-base"></i>
                    <i class="icon-facebook  icon-2x"></i>
                </span>
                <span class="icon-stack">
                    <i class="icon-check-empty icon-stack-base"></i>
                    <i class="icon-twitter  icon-2x"></i>
                </span>
            </div>
        </footer>
    </div>
</body>

</html>
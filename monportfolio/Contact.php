<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link href="styles.css" rel="stylesheet" type="text/css"/>
    <a href="index.php"></a>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!--<a class="navbar-brand" href="#">Navbar</a>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li>
                        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="images/1453838625980.jpg" alt="profile">
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Bienvenue <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="MonExperience.php">Mon experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="MesCompetences.php">Mes compétences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="MesDiplomes.php">Mes diplômes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="MesProjets.php">Mes projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="MesLoisirs.php">Mes loisirs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact.php">Contact</a>
                    </li>
                    <a href="https://www.linkedin.com/in/r%C3%A9mi-marthe-f%C3%A9licie-723385157/" target="_blank">
                        <img class="img-fluid rounded mb-3 mb-md-0" border="0" border-radius="20px" src="images/téléchargement.png" alt="linkedin" align="absmiddle">
                    </a>
                </ul>
            </div>
        </nav>
        <div id="main">
            <h1>CONTACT</h1>
            <div class="container-fluid p-0">
                <!-- début de la page -->

                <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="Contact">
                    <div class="my-auto">
                        <p>N'hésitez pas à me contacter en m'envoyant un message via le formulaire ci-dessous.</p>
                        <ul class="fa-ul mb-0">
                            <div class="col-lg-8">
                                <div class="boxed-grey">
                                    <form id="contact-form" name="form1" method="post" action="Contact.php">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nom"><strong>Nom</strong></label>
                                                    <input type="text" class="form-control" name="nom" value="" id="nom" placeholder="Entrez votre nom" required="required">
                                                </div>
                                                <div class="form-group">
                                                    <label for="mail"><strong>Adresse mail</strong></label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control" name="mail" value="" id="mail" placeholder="Entrez votre email" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sujet"><strong>Sujet</strong></label>
                                                    <input type="text" class="form-control" name="subject" value="" id="subject" placeholder="Entrez votre sujet" required="required">
                                                </div>

                                                <!--<div class="g-recaptcha" data-sitekey="6LfFtDoUAAAAAJfxTmIoAKGzbpg69mo8N0mLNXGM"></div>
                                                                <div style="width: 304px; height: 78px;">
                                                                        <div>
                                                                                <iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LcrzAATAAAAAMCoPJYVqKuGy41szse1OH973BHo&amp;co=aHR0cHM6Ly95dmFuLWxhbW9uemllLm92aDo0NDM.&amp;hl=fr&amp;v=r20171115120512&amp;size=normal&amp;cb=7sb6f125n6r9" width="304" height="78" role="presentation" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox">
                                                                                </iframe>
                                                                        </div>
                                                                        <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; ">
                                                                        </textarea>
                                                                </div> -->	
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name"><strong>Message</strong></label>
                                                    <textarea name="message" class="form-control" id="message" rows="9" cols="25" required="required" placeholder="Entrez votre message"></textarea>
                                                </div>
                                                <!--<form method="post" action="">
                                                 Boite de vérification 
                                                        <div class="g-recaptcha" data-sitekey="6LfFtDoUAAAAAJfxTmIoAKGzbpg69mo8N0mLNXGM"></div>
                                                        <br/>
                                                <a href="https://www.google.com/recaptcha/api/siteverify?secret=6LfFtDoUAAAAALn-3pAi_-Cd2amUasYL3ZsASWZB&response=g-recaptcha-response&remoteip=user_ip_address">test</a>-->
                                            </div>
                                        </div>
                                        <center><input class="btn btn-primary send-button" type="submit" id="Envoyer" value="Envoyer"></center>					
                                    </form>
                                </div>
                            </div>
                        </ul>
                    </div>
            </div>

            </section>	

            <footer class="lead">
                <p class="float-right"><a href="#">Revenir en haut</a></p>
                <p>© 2018 Copyright, Rémi Marthe-Félicie | <a href="../Mentions/Index">Mentions légales</a></p>
                <!--Start Cookie Script-->
                <script type="text/javascript" charset="UTF-8" src="http://chs03.cookie-script.com/s/8179b388e157e71eb4f9ef74317c82bb.js"></script>
                <!--End Cookie Script-->
            </footer>

            <!-- fin de la page -->

            <!-- On inclue le bas.php --> 	

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
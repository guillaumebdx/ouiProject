<!DOCTYPE html>
<html class="no-js" lang="FR" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

    <title>Oui Project</title>
</head>

<body>
<header>
    <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
        <div class="title-bar-title">Menu</div>
    </div>

    <div class="top-bar" id="responsive-menu">
        <div class="top-bar-left ">
            <ul class="menu">
                <li class="menu-text">Oui Project</li>
                <li><a href="#" alt="notre mission">Notre mission</a></li>
                <li><a href="#" alt="financer son projet">Financer son projet</a></li>
                <li><a href="#" alt="soutenir un projet">Soutenir un projet</a></li>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li><input type="search" placeholder="Search"></li>
                <li><button type="button" class="button">Connexion</button></li>
                <li><button class="button" data-open="openModal">Inscription</button></li>
            </ul>

            <div class="reveal" id="openModal" data-reveal>
                <form data-abide novalidate method="post" action="/signin">
                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i>les informations entrées sont incorrectes</p>
                    </div>
                    <div class="form-icons">
                        <h4>inscription Oui-project</h4>

                        <div class="input-group"><span class="input-group-label"><i class="fa fa-user"></i></span>
                            <span class="form-error">pseudo requis</span>
                            <input class="input-group-field" type="text" name="pseudo" placeholder="pseudo" required
                                   pattern="[a-zA-Z]+"/>
                        </div>

                        <div class="input-group"><span class="input-group-label"><i class="fa fa-envelope"></i></span>
                            <input class="input-group-field" type="email" name="email"
                                   required pattern="^[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$"
                                   placeholder="email"/>
                            <span class="form-error"> email requis</span>
                        </div>

                        <div class="input-group"><span class="input-group-label"><i class="fa fa-key"></i></span>
                            <input class="input-group-field" required type="password" name="password"
                                   placeholder="mot de passe" id="password"/>
                        </div>

                        <div class="input-group"><span class="input-group-label"><i class="fa fa-key"></i></span>
                            <input class="input-group-field" data-equalto="password" type="password" required
                                   name="password_conf" placeholder="confirmation mot de passe">
                            <span class="form-error"> mot de passe incorrect</span>
                        </div>

                        <div class="input-group"><span class="input-group-label"><i class="fa fa-check"></i></span>
                            <input class="input-group-field" type="checkbox" value="1" name="cgu"/>
                            <p><a href="https://www.amazon.fr/gp/help/customer/display.html?nodeId=548524#GUID-602FA6E8-D724-4317-89F6-E78834F9BA58__SECTION_E43AAFC78C1543548F6B3D44AC4D5D20"
                                  target="_blank" >j'accepte les conditions générales d'utilisation</p></a>
                            <span class="form-error">veuillez validez les conditions</span>
                        </div>
                    </div>
                    <button class="button expanded">Valider</button>
                </form>

                <button class="close-button" data-close aria-label="Close modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    {% if error == true %}
    <div class="callout warning">
        <p><button class="button" data-open="openModal">{{ message }}</button></p>
    </div>
    {% endif %}

</header>
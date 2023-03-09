<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center" id="titre">
                Consultation
            </div>
        </div>
        <ul class="nav justify-content-center nav-pills" id="menu">
            <li class="nav-item dropdown">
                <a class="nav-link" href="?controller=home&action=home">Accueil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Livres
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="?controller=livre&action=all_livres">Tous les livres</a>
                    <a class="dropdown-item" href="?controller=livre&action=all_titres">Par titre</a>
                    <a class="dropdown-item" href="?controller=livre&action=all_auteurs">Par auteur</a>
                    <a class="dropdown-item" href="?controller=livre&action=all_editeurs">Par éditeur</a>
                </div>
            </li>
            <li>
                <div class="logout">
                    <a href="../?controller=home&action=home"><button>Deconnexion</button></a>
                </div>
            </li>
        </ul>
    </div>
</header>
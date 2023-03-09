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
                    <a class="dropdown-item" href="?controller=livre&action=insert_livre">Ajouter un livre</a>
                    <a class="dropdown-item" href="?controller=livre&action=all_titres">Par titre</a>
                    <a class="dropdown-item" href="?controller=livre&action=all_auteurs">Par auteur</a>
                    <a class="dropdown-item" href="?controller=livre&action=all_editeurs">Par éditeur</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Fournisseurs
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="?controller=fournisseur&action=all_fournisseurs">Tous les
                        fournisseurs</a>
                    <a class="dropdown-item" href="?controller=fournisseur&action=insert_fournisseur">Ajouter un
                        fournisseur</a>
                    <a class="dropdown-item" href="?controller=fournisseur&action=all_raison_sociale">Par raison
                        sociale</a>
                    <a class="dropdown-item" href="?controller=fournisseur&action=all_localite">Par localité</a>
                    <a class="dropdown-item" href="?controller=fournisseur&action=all_pays">Par pays</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Commandes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="?controller=commande&action=all_commandes">Toutes les commandes</a>
                    <a class="dropdown-item" href="?controller=commande&action=all_ctitre">Par titre</a>
                    <a class="dropdown-item" href="?controller=commande&action=all_nom_fournisseur">Par fournisseur</a>
                    <a class="dropdown-item" href="?controller=commande&action=all_date">Par date</a>
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
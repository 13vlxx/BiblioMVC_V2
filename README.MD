# Objectifs

## Back-End :

```
Dans cette version il faut :

1. Utiliser l’architecture MVC

2. Ajouter une table pour les Commande (voir document MPD)

3. Ajouter les relations entre la table Commande et les tables Client et Fournisseur

4. Ajouter l’onglet Commandes (comme livres et fournisseurs) pour faire les actions suivantes :

 a. Lister les commandes

 b. Insérer une commande

 c. Lister les commandes en fonction de : i. Titre du livre ii. Nom du fournisseur iii.

Date L’affiche des commandes doivent afficher les champs suivants : Numéro_Commande ISBN_Livre Titre_Livre Auteur_Livre Raison_Sociale_Fournisseur Date_Achat Prix_Achat Nombre_Exemplaires

Ajouter, dans la table Users, un champ de rôle qui prend 2 valeurs (Admin et user). Si l’utilisateur est un Admin, il doit avoir accès à tout. Si l’utilisateur est un user, il a accès à la consultation et non à l’ajout, la modification et la suppression (livre et fournisseur).

```

## Front-End :

```
Maquettage

Vous devez créer les maquettes responsives des pages de votre application en adoptant une approche "Mobile First".

Les maquettes devront au minimum prendre en compte l'affichage sur mobile et desktop. Un plus serait de prendre en compte les tablettes.

Intégration

Vous devrez ensuite passer à l'intégration de vos maquettes.

Votre HTML devra être valide (W3C) et faire usage des balises sémantiques (pas de balises table pour la mise en forme de vos formulaires, elles sont spécifiquement dédiées à l'affichage de données).
Pour la partie CSS, vous pouvez écrire votre propre CSS et / ou utiliser une librairie de votre choix, c'est l'occasion pour vous d'explorer et de découvrir.
Javascript

Vous devrez implémenter une validation front des formulaires de saisie de votre application, à la fois au niveau du HTML et du Javascript.
Utilisez les types et les attributs HTML pertinents pour les inputs.
Ajoutez une validation javascript interdisant la soumission du formulaire si les contraintes ne sont pas satisfaites.
Les inputs suivants ne peuvent pas être vides, doivent avoir une longueur minimum de 2 caractères et une longueur max de 30 caractères :

prénom user
nom user
titre livre
prénom auteur
nom auteur
L'email de l'utilisateur ne peut pas être vide et doit respecter le format email.

Le mot de passe doit avoir une longueur minimum de 8 caractères.

```

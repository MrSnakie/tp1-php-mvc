<h3 align="center">Training Exercise - Personnal work n°1</h3>
<h1 align="center">« Model View Controller »</h1>


<p align="center">
    <a href="https://github.com/MrSnakie">
        <img src="https://img.shields.io/github/followers/MrSnakie.svg?style=social&label=Follow" alt="GitHub Follow" />
    </a>
    <a href="https://twitter.com/MrSnakie">
        <img src="https://img.shields.io/twitter/follow/MrSnakie.svg?style=social&label=Follow" alt="Twitter Follow" />
    </a>
</p>

<p align="center">
    <a href="https://github.com/MrSnakie/tp1-php-mvc/graphs/contributors">
        <img src="https://img.shields.io/github/contributors/MrSnakie/tp1-php-mvc.svg" alt="GitHub Contributors" />
    </a>
    <a href="https://raw.githubusercontent.com/MrSnakie/tp1-php-mvc/master/LICENSE">
        <img src="https://img.shields.io/badge/license-Unlicense-blue.svg" alt="GitHub Licence" />
    </a>
</p>

---
</br>

<h2>:information_source: DESCRIPTION</h2>

**Personal work** for a web development course. The purpose of this personal work is to familiarize with the « _Model View Controller_ » in POO PHP.  
With this personal work, we can display users with their data and filter them by service.
In the back-end, you can add, modify and delete a user.

<h2>:clipboard: EXERCICE INSTRUCTIONS (:fr:)</h2>

1. Créer une base avec une table `users` permettant d'enregistrer un utilisateur. Un utilisateur est défini comme tel :
    - Nom - _50 caractères max_
    - Prénom - _50 caractères max_
    - Date de naissance - _Date_
    - Adresse - _Texte_
    - Code Postal - _5 caractères max_
    - Numéro de téléphone - _10 caractères max_
    - Service - _entier_

2. Créer une table `Service` :
    - Nom du service - _50 caractères max_
    - Description - _100 caractères max_

3. Remplir la table `Service` avec ces informations :

Nom du service   |   Description
------           |    ---
Maintenance      |   Les spécialistes du Hardware
Web Developer    |   Pour eux tout est code
Web Designer     |   Y a que le CSS dans la vie
Reférenceur      |   Regarde les Serps Google du matin au soir et du soir au matin

4. Faire une page `index` permettant de lister les utilisateurs en affichant ces données :
    - Son nom et son prénom
    - Son âge
    - Son adresse complète
    - Son numéro de téléphone
    - Son service

> Sur cette page on doit pouvoir filtrer les services via une liste déroulante et donc n'afficher que ceux choisi.  
> On doit aussi pourvoir supprimer un utilisateur via un bouton.  

5. Faire une autre page permettant d'ajouter un utilisateur. On doit s'assurer que les données saisies par l'utilisateur sont celle attendues.

<h2>:busts_in_silhouette: CONTRIBUTING</h2>

It is a personal work that I develop myself but if you want to correct errors in my code, you can. :wink:

<h2>:copyright: LICENSE</h2>

This project is licensed under Unlicensed license, see the [License File](https://github.com/MrSnakie/tp1-php-mvc/blob/master/LICENSE) file for details.

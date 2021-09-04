<h1 align="center">
  🪐 Titan Project
</h1>
<p align="center">
  Faites parti des premiers touristes de Titan.
</p>

<p align="center">
  <img src ="/Jupiter/images/titan.jpg">
</p>

## 📋 informations

Il s'agit d'un formulaire dont il faut assurer la **validation en PHP**, ainsi que l'**enregistrement des données** en base de données **MySQL**.


## 🛠 set-up

1. Installation des prérequis.

- [XAMPP](https://www.apachefriends.org/index.html) - XAMPP est un environnement de développement PHP.
- [VS Code](https://code.visualstudio.com/) - Editeur pour écrire nos codes HTML, CSS, PHP.

2. Warning.

- Le dossier Jupiter doit se trouver dans le répertoire suivant :

  ```sh
  C:\Program Files\xampp\htdocs
  ```

- Utiliser XAMPP en mode administrateur. Le mode invité ou utilisateur bloque certaines fonctionnalités.

- Si vous avez déjà installer MySQL sur votre machine, il faut changer le port MySQL dans XAMPP

   ```sh
    C:\Program Files\xampp\mysql\bin\my.ini
   ```
Changer le port 3306 en 3307 comme suit :

  ```sh
  port=3307
  socket="C:/Program Files/xampp/mysql/mysql.sock"
  ```

et ici :

  ```sh
  default-character-set=utf8mb4
  [mysqld]
  port=3307
  ```



## 🚀 build and run for production

1. Generate a full static production build

   ```sh
   npm run build
   ```



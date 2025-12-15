# 🐳 MonBlog Docker — CI/CD

![CI](https://github.com/Manaroh/monblog-docker/actions/workflows/ci.yml/badge.svg)

## 📌 Description
MonBlog est une application **PHP MVC** exécutée dans des conteneurs **Docker**,
connectée à une base de données **MySQL**.
Un pipeline **CI/CD** automatisé est mis en place via **GitHub Actions**.

---

## 🏗️ Architecture technique
- PHP 8.2 + Apache
- MySQL 8
- Docker & Docker Compose
- GitHub Actions (CI/CD)

---

## 🔄 Pipeline CI/CD
À chaque **push** ou **pull request** sur la branche `main`, le pipeline exécute :

1. 🔍 **Lint PHP**
   - Vérification syntaxique des fichiers PHP (`php -l`)
2. 🐳 **Build Docker**
   - Construction automatique de l’image Docker
3. 🗄️ **Tests MySQL**
   - Démarrage d’un service MySQL
   - Initialisation du schéma
   - Test de requêtes SQL (`SELECT`) via PDO

---

## ▶️ Lancer le projet en local

```bash
docker-compose up --build

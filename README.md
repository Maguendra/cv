# CV - Portfolio personnel

Site CV développé en HTML, CSS et PHP avec connexion à une base de données distante.

## 🚀 Installation

### Prérequis
- XAMPP (Apache + MySQL + PHP)
- Compte AlwaysData avec une base de données MySQL

### Configuration sur un nouvel ordinateur

1. **Cloner le projet**
   ```bash
   cd /opt/lampp/htdocs/
   git clone https://github.com/Maguendra/cv.git
   cd cv
   ```

2. **Créer le fichier de configuration**
   ```bash
   cp config.example.php config.php
   ```

3. **Modifier le fichier `config.php`**
   - Ouvrez `config.php` dans votre éditeur
   - Remplacez les valeurs par vos vrais paramètres AlwaysData :
     - `MYSQL_HOST` : votre hôte MySQL AlwaysData (ex: `mysql-moncompte.alwaysdata.net`)
     - `MYSQL_NAME` : nom de votre base de données
     - `MYSQL_USER` : votre nom d'utilisateur
     - `MYSQL_PASSWORD` : votre mot de passe
   
4. **Trouver vos paramètres AlwaysData**
   - Connectez-vous sur https://admin.alwaysdata.com/
   - Menu **Bases de données** > **MySQL**
   - Notez tous les paramètres de connexion
   - Vérifiez que les **connexions distantes sont autorisées**

5. **Tester la connexion**
   - Démarrez XAMPP : `sudo /opt/lampp/lampp start`
   - Ouvrez dans votre navigateur : http://localhost/cv/test_connection.php
   - Vous devriez voir "✅ Connexion réussie !"

## 📁 Structure du projet

```
cv/
├── index.html              # CV en HTML5 simple
├── cv_en_forme.html        # CV avec CSS
├── cv_en_forme tailwind.html  # CV responsive avec Tailwind
├── config.example.php      # Template de configuration (à copier)
├── config.php              # Configuration réelle (ignoré par Git)
├── databaseconnect.php     # Connexion à la base de données
├── test_connection.php     # Test de connexion DB
├── submit_comment_form.php # Formulaire de commentaires
└── styles/                 # Fichiers CSS
```

## 🔒 Sécurité

- ⚠️ Le fichier `config.php` contient vos mots de passe
- ✅ Il est dans `.gitignore` et ne sera jamais envoyé sur GitHub
- ✅ Chaque développeur doit créer son propre `config.php` localement
- ✅ Ne partagez jamais vos identifiants de base de données

## 🌐 Accès au site

- **Local** : http://localhost/cv/
- **Production** : (À définir sur AlwaysData)

## 🛠️ Développement

### Commandes utiles

```bash
# Démarrer XAMPP
sudo /opt/lampp/lampp start

# Arrêter XAMPP
sudo /opt/lampp/lampp stop

# Vérifier le statut
sudo /opt/lampp/lampp status

# Rechercher dans les fichiers
grep -rn "texte" /opt/lampp/htdocs/cv/
```

## 📝 Notes

- Le site est développé pour XAMPP sous Linux
- La base de données est hébergée sur AlwaysData
- Possibilité de basculer sur une base locale pour le développement

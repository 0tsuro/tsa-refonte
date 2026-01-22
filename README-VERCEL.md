# TSA - Transport Saint Arnould | Version de déploiement Vercel

Bienvenue dans la version de déploiement statique de TSA pour Vercel. Cette version contient les fichiers HTML pré-générés à partir du projet PHP original.

## 📋 Structure

- **`/fr/`** - Pages en français (index.html, contact.html)
- **`/en/`** - Pages en anglais (index.html, contact.html)
- **`/css/`** - Feuilles de style
- **`/js/`** - Fichiers JavaScript
- **`/assets/`** - Images et ressources
- **`vercel.json`** - Configuration Vercel
- **`index.html`** - Page de redirection à la racine

## 🚀 Déploiement sur Vercel

### Première connexion

1. Allez sur [Vercel.com](https://vercel.com)
2. Connectez-vous avec votre compte GitHub
3. Importez ce projet

### Redéploiement

Chaque push sur votre branche `main` redéploiera automatiquement le site.

## 📝 Notes importantes

- **Formulaire de contact** : La version actuelle est statique. Le formulaire est désactivé sur les pages de contact.
- **Langage** : Le site détecte automatiquement la langue du navigateur et redirige vers `/fr/` ou `/en/`.
- **Assets** : Tous les chemins d'images et CSS sont en chemins absolus (`/assets/`, `/css/`, `/js/`)
- **PHP** : Les fichiers PHP originaux ne sont pas nécessaires pour cette version statique.

## 🔄 Comment générer les fichiers HTML à partir du PHP

Si vous devez mettre à jour les fichiers HTML à partir des fichiers PHP originaux :

1. Exécutez le serveur PHP local
2. Compilez les pages PHP et copiez le HTML généré dans les fichiers `.html`
3. Assurez-vous que les URL relative sont correctes
4. Testez en local avant de pusher

## 📱 Langues supportées

- **Français (FR)** : `/fr/index.html`
- **English (EN)** : `/en/index.html`

## 📧 Contact

Pour toute question, consultez le formulaire de contact sur :

- Français : https://votre-domaine.com/fr/contact.html
- English : https://votre-domaine.com/en/contact.html

Ou appelez directement : **+33 (0)3 21 38 72 00**

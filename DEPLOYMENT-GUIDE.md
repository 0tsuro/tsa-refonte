# 📖 Guide de Déploiement TSA sur Vercel

## 🎯 Objectif
Déployer le site TSA (Transport Saint Arnould) en tant que site statique HTML sur Vercel, sans nécessité de serveur PHP.

## ✅ Ce qui a été fait

### 1. Conversion PHP → HTML
- ✓ Création de `/fr/index.html` (page d'accueil FR)
- ✓ Création de `/fr/contact.html` (page contact FR)
- ✓ Création de `/en/index.html` (page d'accueil EN)
- ✓ Création de `/en/contact.html` (page contact EN)
- ✓ Création de `/index.html` (redirection automatique basée sur la langue du navigateur)

### 2. Configuration Vercel
- ✓ Création de `vercel.json` avec configuration optimale
- ✓ Création de `.vercelignore` pour ignorer les fichiers PHP
- ✓ Headers de cache optimisés pour performance

### 3. Assets et ressources
Tous les fichiers statiques restent dans :
- `/css/` - Feuilles de style
- `/js/` - Scripts JavaScript
- `/assets/` - Images et ressources

## 🚀 Déploiement

### Préalables
1. Avoir un compte [Vercel](https://vercel.com)
2. Avoir votre code sur GitHub

### Étapes de déploiement

#### Option 1 : Import initial depuis GitHub
```bash
# 1. Committez vos changements
git add -A
git commit -m 'feat: Convert to static HTML for Vercel deployment'

# 2. Pushez sur GitHub
git push origin main

# 3. Allez sur https://vercel.com
# 4. Cliquez "Add New" → "Project"
# 5. Sélectionnez votre repo GitHub
# 6. Cliquez "Deploy"
```

#### Option 2 : Utiliser Vercel CLI
```bash
# 1. Installez Vercel CLI
npm i -g vercel

# 2. Allez dans le dossier du projet
cd /Users/ots/Documents/BGSO/TSA

# 3. Déployez
vercel

# 4. Suivez les instructions
```

### Vérification du déploiement
1. Allez sur votre URL Vercel
2. Testez les redirections :
   - `https://votre-projet.vercel.app/` → devrait rediriger vers `/fr/` ou `/en/`
   - `https://votre-projet.vercel.app/fr/index.html` → page d'accueil FR
   - `https://votre-projet.vercel.app/en/index.html` → page d'accueil EN

## 📝 Notes importantes

### Formulaire de contact
**Statut actuel :** Désactivé (affichage uniquement)

Pour activer le formulaire, vous devrez :
1. Rendre le formulaire fonctionnel (serverless functions sur Vercel)
2. Ou utiliser un service tiers (Formspree, Basin, etc.)

### Chemins d'URL
Tous les chemins dans le HTML utilisent des chemins absolus :
- `<img src="/assets/img/logo.svg">`
- `<link href="/css/style.css">`
- `<script src="/js/navbar.js"></script>`

**Important** : Garder les chemins absolus (/chemin/au/fichier) plutôt que relatifs (../chemin/au/fichier)

### Cache et performances
- **CSS, JS, images** : Cachées 1 an (max-age=31536000)
- **HTML** : Cachées 1 heure (max-age=3600) pour les mises à jour rapides

## 🔄 Mise à jour future

Si vous devez mettre à jour le site HTML à partir des fichiers PHP :

1. Générez les fichiers HTML depuis les pages PHP
2. Remplacez les fichiers `.html` correspondants
3. Testez localement
4. Commitez et pushez

```bash
git add fr/index.html fr/contact.html en/index.html en/contact.html
git commit -m 'Update: Sync HTML with PHP changes'
git push
```

Vercel redéploiera automatiquement.

## 📊 Structure finale

```
TSA/
├── index.html                 # Redirection racine
├── vercel.json                # Config Vercel
├── .vercelignore              # Fichiers à ignorer
├── deploy-check.sh            # Script de vérification
├── README-VERCEL.md           # Doc de déploiement
├── DEPLOYMENT-GUIDE.md        # Ce fichier
├── fr/
│   ├── index.html            # Accueil FR
│   └── contact.html          # Contact FR
├── en/
│   ├── index.html            # Accueil EN
│   └── contact.html          # Contact EN
├── css/                       # Feuilles de style
├── js/                        # Scripts
└── assets/                    # Images et ressources
```

## 🔗 Ressources utiles

- **Vercel Docs** : https://vercel.com/docs
- **Vercel CLI** : https://vercel.com/cli
- **Configuration HTML** : Tous les fichiers HTML incluent les balises meta et Open Graph

## 💡 Astuce

Pour tester localement avant le déploiement :
```bash
# Avec Python 3
cd /Users/ots/Documents/BGSO/TSA
python3 -m http.server 8000

# Puis ouvrez http://localhost:8000
```

## ❓ Besoin d'aide ?

- Consultez `README-VERCEL.md` pour les questions générales
- Exécutez `./deploy-check.sh` pour vérifier l'état du déploiement
- Contactez le support Vercel : https://vercel.com/support

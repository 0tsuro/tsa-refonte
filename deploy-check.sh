#!/bin/bash

# Script de déploiement - TSA to Vercel
# Ce script aide à préparer le projet pour Vercel

echo "🚀 TSA - Préparation pour Vercel"
echo "================================"

# Vérifier les fichiers HTML
echo ""
echo "✅ Vérification des fichiers HTML..."
for file in fr/index.html fr/contact.html en/index.html en/contact.html index.html; do
  if [ -f "$file" ]; then
    echo "  ✓ $file"
  else
    echo "  ✗ MANQUANT: $file"
  fi
done

# Vérifier les fichiers de configuration
echo ""
echo "✅ Vérification de la configuration..."
for file in vercel.json .vercelignore; do
  if [ -f "$file" ]; then
    echo "  ✓ $file"
  else
    echo "  ✗ MANQUANT: $file"
  fi
done

# Vérifier les assets
echo ""
echo "✅ Vérification des assets..."
for dir in css js assets; do
  if [ -d "$dir" ]; then
    count=$(find "$dir" -type f | wc -l)
    echo "  ✓ $dir ($count fichiers)"
  else
    echo "  ✗ MANQUANT: $dir"
  fi
done

echo ""
echo "✅ Prêt pour le déploiement!"
echo ""
echo "📝 Prochaines étapes:"
echo "  1. Commitez les changements: git add -A && git commit -m 'Deploy: Convert PHP to static HTML'"
echo "  2. Pushez sur GitHub: git push"
echo "  3. Vercel va redéployer automatiquement"
echo ""
echo "🌐 URLs:"
echo "  - FR: https://votre-domaine.vercel.app/fr/index.html"
echo "  - EN: https://votre-domaine.vercel.app/en/index.html"

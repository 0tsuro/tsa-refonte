#!/bin/bash

# 🚀 QUICK START - Déployer TSA sur Vercel en 5 minutes
# Exécutez ce script pour préparer et déployer votre site

set -e

echo "🚀 TSA - Quick Deploy to Vercel"
echo "================================"
echo ""

# Étape 1: Vérification
echo "1️⃣  Vérification des fichiers..."
./deploy-check.sh > /dev/null 2>&1 || {
  echo "❌ Erreur: Exécutez deploy-check.sh d'abord"
  exit 1
}
echo "✅ Tous les fichiers sont présents"
echo ""

# Étape 2: Git
echo "2️⃣  Préparation Git..."
echo "   - Ajout des fichiers..."
git add -A

echo "   - Création du commit..."
git commit -m "Deploy: Convert PHP to static HTML for Vercel" || echo "   ℹ️  Pas de changements à committer"

echo "   - Envoi vers GitHub..."
git push origin main || git push

echo "✅ Changements poussés sur GitHub"
echo ""

# Étape 3: Déploiement
echo "3️⃣  Configuration Vercel..."
echo ""
echo "   Allez sur https://vercel.com et :"
echo "   1. Cliquez 'Add New' → 'Project'"
echo "   2. Sélectionnez le repo GitHub 'TSA'"
echo "   3. Cliquez 'Deploy'"
echo ""
echo "   OU utiliser Vercel CLI :"
echo "   $ vercel"
echo ""

# Étape 4: Vérification
echo "4️⃣  Vérification du déploiement..."
echo "   Une fois déployé, testez :"
echo "   - https://votre-projet.vercel.app/"
echo "   - https://votre-projet.vercel.app/fr/index.html"
echo "   - https://votre-projet.vercel.app/en/index.html"
echo ""

echo "✅ Prêt pour le déploiement!"
echo ""
echo "📚 Pour plus d'infos :"
echo "   - DEPLOYMENT-GUIDE.md"
echo "   - DEPLOY-SUMMARY.md"
echo "   - README-VERCEL.md"

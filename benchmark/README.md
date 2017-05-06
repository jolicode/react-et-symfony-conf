# But

Comparer la vitesse d'exécution du code JS avec un navigateur / node.js / V8Js / un serveur node externe.

 # Utilisation
 
 Lancer le serveur node :
 `node server.js`
 
Run le script php (de préférence sur un serveur) :
 `php bench.php`
 
 Tester dans le browser : ouvrir le fichier test.html dans un navigateur puis ouvrir la console.

# Résultats

## Environnement utilisé

* PHP : v7.1
* node.js : v7.2
* V8Js
* Navigateur : Chrome 58.0.3029.110 (64-bit)

## Valeurs (en secondes)

| PHP          | ~0.72s |
| V8JS         | ~0.13s |
| node.js      | ~0.18s |
| Serveur node | ~0.05s |
| Navigateur   | ~0.12s |

# TODO

Faire la même chose avec du code React pour avoir des valeurs plus pertinentes.


# Demo

Utilisation de React dans Symfony avec :
- Une version directement dans Twig (pour montrer que c'est dégueu et voir les appels qui sont faits à React et ReactDOM pour le rendu)
- Une version en rendu serveur avec LimeniusReactBundle

Pour une démo plus poussée sur Limenius (formulaires, utilisation de Redux, etc.) voir [limenius/symfony-react-sandbox](https://github.com/Limenius/symfony-react-sandbox).

## Usage

`cd demo`

Sf : `bin/console server:run`

Build React (using webpack):
- client side : `webpack --config webpack.config.js`
- server side : `webpack --config webpack.config.serverside.js`

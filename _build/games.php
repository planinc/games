<?php
// Attogram Games Website Configuration

// <title> - text only, no HTML
$title = 'Attogram Games';

// <h1> - text and/or HTML
$headline = 'Attogram Games';

// The Ordered List of Games
$games = [
    'hextris-lite' => [
        'name'    => 'Hextris',
        'tag'     => 'hexagonal tetris',
        'git'     => 'https://github.com/attogram/hextris-lite.git',
        'mobile'  => true,
        'desktop' => true,
    ],
    'pond' => [
        'name'    => 'The Pond',
        'tag'     => 'eat, swim, love',
        'git'     => 'https://github.com/attogram/pond-lite.git',
        'mobile'  => true,
        'desktop' => true,
        // @TODO - use local copy of kik cards.js
    ],
    '2048-lite' => [
        'name'    => '2048',
        'tag'     => '2, 4, 8, swipe',
        'git'     => 'https://github.com/attogram/2048-lite.git',
        'mobile'  => true,
        'desktop' => true,
    ],
    'taptaptap' => [
        'name'    => 'Tap Tap Tap',
        'tag'     => 'tap the blue',
        'git'     => 'https://github.com/MahdiF/taptaptap.git',
        'index'   => 'play/',
        'mobile'  => true,
        'desktop' => true,
        // @TODO - need clean repo fork - rm google analytics and tags
    ],
    'klotski' => [
        'name'    => 'Klotski',
        'tag'     => 'free the block',
        'git'     => 'https://github.com/SimonHung/Klotski.git',
        'index'   => 'klotski.puzzle.html',
        'mobile'  => true,
        'desktop' => true,
    ],
    'particle-clicker' => [
        'name'    => 'Particle Clicker',
        'tag'     => 'be like CERN',
        'git'     => 'https://github.com/particle-clicker/particle-clicker.git',
        'mobile'  => true,
        'desktop' => true,
        // @TODO - need clean repo fork - rm google analytics
    ],
    'life' => [
        'name'    => 'Life',
        'tag'     => 'conway\'s game',
        'git'     => 'https://github.com/copy/life.git',
        'mobile'  => true,
        'desktop' => true,
    ],
    'tower' => [
        'name'    => 'Tower',
        'tag'     => 'build up',
        'git'     => 'https://github.com/iamkun/tower_game.git',
        'mobile'  => true,
        'desktop' => true,
        // @TODO - need clean repo fork - rm google analytics
    ],
    'EightQueens' => [
        'name'    => 'Eight Queens',
        'tag'     => 'chess puzzle',
        'git'     => 'https://github.com/attogram/EightQueens.git',
        'branch'  => 'gh-pages',
        'mobile'  => true,
        'desktop' => true,
    ],
    'chess' => [
        'name'    => 'Chess',
        'tag'     => 'e2 to e4',
        'git'     => 'https://github.com/attogram/chess.git',
        'mobile'  => true,
        'desktop' => true,
    ],
    'hexgl-lite' => [
        'name'    => 'HexGL',
        'tag'     => 'racing pod',
        'git'     => 'https://github.com/attogram/HexGL-lite.git',
        'mobile'  => false,
        'desktop' => true,
        // @TODO - need clean repo fork - rm google analytics, use local favicons
    ],
    'html5-asteroids' => [
        'name'    => 'Asteroids',
        'tag'     => 'retro asteroids',
        'git'     => 'https://github.com/dmcinnes/HTML5-Asteroids.git',
        'mobile'  => false,
        'desktop' => true,
    ],
    'wolf3d' => [
        'name'    => 'Wolf3d',
        'tag'     => 'classic FPS',
        'git'     => 'https://github.com/jseidelin/wolf3d.git',
        'mobile'  => false,
        'desktop' => true,
    ],
    '3d.city' => [
        'name'    => '3d.city',
        'tag'     => 'be the mayor',
        'git'     => 'https://github.com/lo-th/3d.city.git',
        'mobile'  => false,
        'desktop' => true,
    ],
    'clumsy-bird' => [
        'name'    => 'Clumsy Bird',
        'tag'     => 'flappy happy',
        'git'     => 'https://github.com/ellisonleao/clumsy-bird.git',
        'mobile'  => true,
        'desktop' => true,
    ],
    'fire-n-ice' => [
        'name'    => 'Fire \'n Ice',
        'tag'     => 'move the ice',
        'git'     => 'https://github.com/eugenioenko/fire-n-ice.git',
        'mobile'  => true,
        'desktop' => true,
    ],
    'paint-run' => [
        'name'    => 'Paint Run',
        'tag'     => 'paint it all blue',
        'git'     => 'https://github.com/ahl389/paint-run2.git',
        'branch'  => 'gh-pages',
        'mobile'  => false,
        'desktop' => true,
    ],
    'hyperspace-garbage-collection' => [
        'name'    => 'Hyperspace G',
        'tag'     => 'collect garbage',
        'git'     => 'https://github.com/razh/game-off-2013',
        'mobile'  => true,
        'desktop' => true,
    ],
    'pacman-lite' => [
        'name'    => 'pacman',
        'tag'     => 'another pacman',
        'git'     => 'https://github.com/attogram/pacman-lite.git',
        'mobile'  => true,
        'desktop' => true,
    ],
    'dead-valley' => [
        'name'    => 'Dead Valley',
        'tag'     => 'survival',
        'git'     => 'https://github.com/dmcinnes/dead-valley.git',
        'mobile'  => false,
        'desktop' => true,
    ],
    'classic-pool' => [
        'name'    => 'Pool',
        'tag'     => 'classic 8-ball',
        'git'     => 'https://github.com/henshmi/Classic-Pool-Game.git',
        'mobile'  => false,
        'desktop' => true,
    ],
    'twisty-polyhedra' => [
        'name'    => 'Twisty P',
        'tag'     => 'polyhedra turning',
        'git'     => 'https://github.com/aditya-r-m/twisty-polyhedra.git',
        'mobile'  => false,
        'desktop' => true,
    ],
    'loderunner_totalrecall' => [
        'name'    => 'Lode Runner',
        'tag'     => 'run, dig, old style',
        'git'     => 'https://github.com/SimonHung/LodeRunner_TotalRecall.git',
        'index'   => 'lodeRunner.html',
        'mobile'  => false,
        'desktop' => true,
    ],
    'raging-gardens' => [
        'name'    => 'Raging Gardens',
        'tag'     => 'farting ninja rabbits',
        'git'     => 'https://github.com/alunix/RagingGardensFB.git',
        'mobile'  => false,
        'desktop' => true,
        // @TODO - need clean repo - rm facebook calls
    ],
        'underrun' => [
        'name'    => 'Underrun',
        'tag'     => 'run &amp; fight',
        'git'     => 'https://github.com/phoboslab/underrun.git',
        'index'   => 'index-debug.html',
        'mobile'  => false,
        'desktop' => true,
    ],
    'snakisms' => [
        'name'    => 'Snakisms',
        'tag'     => 'philosophy snake',
        'git'     => 'https://github.com/pippinbarr/SNAKISMS.git',
        'branch'  => 'clean',
        'mobile'  => true,
        'desktop' => true,
    ],
    'phaser-cat' => [
        'name'    => 'Phaser Cat',
        'tag'     => 'fighting feline',
        'git'     => 'https://github.com/DaxChen/phaser-cat.git',
        'require' => ['yarn'],
        'build'   => ['yarn install', 'yarn run deploy'],
        'mobile'  => false,
        'desktop' => true,
    ],
    'html5-hearts' => [
        'name'    => 'Hearts',
        'tag'     => 'card game',
        'git'     => 'https://github.com/yyjhao/html5-hearts.git',
        'mobile'  => false,
        'desktop' => true,
        // @TODO - need clean repo fork - rm google analytics
    ],
    'mah-jongg' => [
        'name'    => 'Mah-jongg',
        'tag'     => 'Tianjin 天津麻将',
        'git'     => 'https://github.com/tiansh/tjmj.git',
        'mobile'  => false,
        'desktop' => true,
    ],
    'missile-game' => [
        'name'    => 'Missile Game',
        'tag'     => 'fly thru it',
        'git'     => 'https://github.com/bwhmather/missile-game.git',
        'mobile'  => true,
        'desktop' => true,
    ],
    'ns-shaft' => [
        'name'    => 'NS-Shaft',
        'tag'     => 'fall safely',
        'git'     => 'https://github.com/iPel/NS-SHAFT.git',
        'mobile'  => false,
        'desktop' => true,
    ],
    'javascript-piano' => [
        'name'    => 'Piano J',
        'tag'     => 'synthy javascript',
        'git'     => 'https://github.com/mrcoles/javascript-piano.git',
        'mobile'  => true,
        'desktop' => true,
        // @TODO - need clean repo fork - rm twitter codes
    ],
    'virtual-piano' => [
        'name'    => 'Piano V',
        'tag'     => 'virtually classic',
        'git'     => 'https://github.com/otanim/virtual-piano.git',
        'mobile'  => true,
        'desktop' => true,
    ],
    'chordomatic' => [
        'name'    => 'Chordomatic',
        'tag'     => 'guitar strumming',
        'git'     => 'https://github.com/kiprobinson/chordomatic.git',
        'index'   => 'app/chord-player.html',
        'mobile'  => true,
        'desktop' => true,
    ],
];

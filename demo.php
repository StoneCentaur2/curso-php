<?php 
$name = 'Micheal'; 
$Age = 22;

define('URL_LOGO', 'https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg');

$output = "Hola mundo \$ \" <br />$name " . $Age;

const NAME = 'Miguel';

$outputAge = match(true){ # matches same as ifelse, but better
    $Age <= 5 => 'Baby',
    $Age <= 20 => 'Teen',
    $Age <= 30 => 'Twenty',
    $Age <= 40 => 'Thirty',
    default => 'Old'
};

$Lenguages = ['PHP', 'Js', 'Java', 'C#'];
$Lenguages[] = 'Python';

$person = [ # dictionaries
    'name' => ['Miguel'],
    'age' => 22,
    'languages' => ['PHP', 'Js', 'Java', 'C#']
];
$person['name'][] = 'Orlando'. ' Jose';
$person['name'][] = 'Luis';

?>

<h2>
    <?= $outputAge ?> <br> 
</h2>

<ul>
    <?php foreach ($Lenguages as $key => $lenguage):?>
        <li><?= $lenguage?></li>
    <?php endforeach;?>
</ul>

<ul>
    <?php foreach ($person['name'] as $key => $languages):?>
        <li><?= $languages?></li>
    <?php endforeach;?>
</ul>

<img src="<?= URL_LOGO; ?>" alt="PHP logo" width="200">
<h1>
    <?= 
    $output;
    ?>
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>
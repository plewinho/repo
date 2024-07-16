<?php
require_once 'vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$products = [
    ['name' => 'Samsung Galaxy S21', 'price' => 3500],
    ['name' => 'Apple iPhone 13', 'price' => 4200],
    ['name' => 'Sony WH-1000XM4', 'price' => 1500],
    ['name' => 'Dell XPS 13', 'price' => 6000],
    ['name' => 'Apple MacBook Pro', 'price' => 8500],
    ['name' => 'Asus ROG Strix', 'price' => 4500],
    ['name' => 'Harry Potter and the Philosopher\'s Stone', 'price' => 40],
    ['name' => 'The Lord of the Rings', 'price' => 80],
    ['name' => 'Philips Airfryer', 'price' => 800],
    ['name' => 'Dyson V11 Vacuum Cleaner', 'price' => 2500],
];

echo $twig->render('products.twig', ['products' => $products]);
?>

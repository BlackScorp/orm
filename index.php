<?php

use BlackScorp\ORM\Entity\User;

$container = require_once __DIR__.'/depdency.php';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = $container[\Doctrine\ORM\EntityManagerInterface::class]();

/** @var \BlackScorp\ORM\Entity\User $user */
$user = $entityManager->find(User::class,1);
/** @var \BlackScorp\ORM\Entity\CartProducts $cartProduct */
foreach ($user->getCartProducts()->getIterator() as $cartProduct){
    var_dump($cartProduct->getQuantity());
    var_dump($cartProduct->getProduct()->getTitle());
    var_dump($cartProduct->getProduct()->getPrice());

    $cartProduct->setQuantity($cartProduct->getQuantity()+1);
    $product = $cartProduct->getProduct();
    $product->setPrice($_POST);
    $entityManager->persist($product);
}

$entityManager->flush();
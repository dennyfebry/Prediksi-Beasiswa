<?php
// require_once __DIR__ . '/vendor/autoload.php';
use Classification\NaiveBayes;

$samples = [[5, 1, 1], [1, 5, 1], [1, 1, 5]];
$labels = ['a', 'b', 'c'];

$classifier = new NaiveBayes();
$classifier->train($samples, $labels);

$classifier->predict([3, 1, 1]);
// return 'a'

$classifier->predict([[3, 1, 1], [1, 4, 1]]);
echo $classifier;

// return ['a', 'b']

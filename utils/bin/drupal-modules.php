<?php

use Symfony\Component\Finder;
use Symfony\Component\Yaml\Yaml;
use Drupal\Modules\Docs\MakeFileParser;

$appRoot = __DIR__ . '/..';

if (file_exists($appRoot . '/' . 'vendor/autoload.php')) {
  include_once $appRoot . '/' . 'vendor/autoload.php';
}
else {
  echo 'autoload.php wasn\'t found' . PHP_EOL;
  exit(1);
}

$filesDirectories = array(
  $appRoot . '/' . '../drupal 8.x',
);

$finder = new Finder\Finder();
$files = $finder->in($filesDirectories)->name('*.make.yml')->files();

if (!empty($files)) {
  $parsed_as_markdown = '';

  /**
   * @var string $path
   * @var \SplFileInfo $file
   */
  foreach ($files as $path => $file) {
    $yaml = Yaml::parse(file_get_contents($file->getPathname()));
    $parsed_as_markdown .= ((new MakeFileParser($yaml, $file->getFilename()))->asMarkdown());
  }

  $filename = __DIR__ . '/../../drupal 8.x/README.md';
  file_put_contents($filename, $parsed_as_markdown);
}


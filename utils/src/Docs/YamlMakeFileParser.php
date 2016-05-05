<?php
/**
 * Created by PhpStorm.
 * User: gumanist
 * Date: 4/27/16
 * Time: 10:04 AM
 */

namespace Drupal\Modules\Docs;


class YamlMakeFileParser {
  /** @var array $yaml */
  private $yaml;

  private $api = 2;

  private $description = '';

  public function __construct($fileName) {
    return $this->parse($fileName);
  }

  public function parse($fileName) {
    $this->yaml = Yaml::parse(file_get_contents($fileName));

    return $this->yaml;
  }
  
}

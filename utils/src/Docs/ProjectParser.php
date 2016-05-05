<?php
/**
 * Created by PhpStorm.
 * User: gumanist
 * Date: 4/27/16
 * Time: 10:08 AM
 */

namespace Drupal\Modules\Docs;


class ProjectParser implements SectionParserInterface {
  /** @var string $title */
  private $title;

  /** @var string $version */
  private $version = '~';

  /** @var string $folder */
  private $folder = '';

  /** @var string $description */
  private $description = '';

  /** @var array $patches */
  private $patches;
  
  
  private $project;
  
  
  public function __construct($project, $title) {
    $defaults = array(
      'type' => 'module',
      'version' => '~',
      'description' => '',
    );

    $this->title = $title;
    $this->project = $project + $defaults;

    return $this;
  }
  
  public function asMarkdown() {
    return <<<MARKUP
###{$this->title}
- **version**: {$this->project['version']}
- **description**: {$this->project['description']}
MARKUP;

  }

  /**
   * @return string
   */
  public function getName() {
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName($name) {
    $this->name = $name;
  }

  /**
   * @return string
   */
  public function getVersion() {
    return $this->version;
  }

  /**
   * @param string $version
   */
  public function setVersion($version) {
    $this->version = $version;
  }

  /**
   * @return string
   */
  public function getFolder() {
    return $this->folder;
  }

  /**
   * @param string $folder
   */
  public function setFolder($folder) {
    $this->folder = $folder;
  }

  /**
   * @return string
   */
  public function getDescription() {
    return $this->description;
  }

  /**
   * @param string $description
   */
  public function setDescription($description) {
    $this->description = $description;
  }

  /**
   * @return mixed
   */
  public function getPatches() {
    return $this->patches;
  }

  /**
   * @param mixed $patches
   */
  public function setPatches($patches) {
    $this->patches = $patches;
  }
}

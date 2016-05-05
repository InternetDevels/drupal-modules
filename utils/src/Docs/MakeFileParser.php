<?php
/**
 * Created by PhpStorm.
 * User: gumanist
 * Date: 4/27/16
 * Time: 10:35 AM
 */

namespace Drupal\Modules\Docs;


class MakeFileParser implements SectionParserInterface {
  /** @var array $yaml */
  private $yaml = array();

  /** @var string $name */
  private $title = '';

  /**
   * {@inheritdoc}
   */
  public function __construct($yaml, $title) {
    $defaults = array(
      'description' => '',
      'api' => '2',
    );

    $this->yaml = $yaml + $defaults;
    $this->title = $title;
    return $this;
  }

  public function asMarkdown() {
    $result = <<<MARKDOWN
##{$this->title}
{$this->yaml['description']}

MARKDOWN;
    if (!empty($this->yaml['projects'])) {
      foreach ($this->yaml['projects'] as $name => $project) {
        $result .= (new ProjectParser($project, $name))->asMarkdown();
      }
    }
    else {
      $result .= <<<MARKDOWN

There are no projects in the yaml.

MARKDOWN;

    }

    // Add horizontal line at the end.
    $result .= <<<MARKDOWN

***

MARKDOWN;

    return $result;
  }
}

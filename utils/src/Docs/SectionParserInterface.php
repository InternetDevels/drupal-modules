<?php
/**
 * Created by PhpStorm.
 * User: gumanist
 * Date: 4/27/16
 * Time: 10:31 AM
 */

namespace Drupal\Modules\Docs;


interface SectionParserInterface {
  /**
   * MakeFileSectionParserInterface constructor.
   *
   * @param array $yaml
   * @param string $title
   */
  public function __construct($yaml, $title);

  /**
   * Return formatted section
   *
   * @return string
   */
  public function asMarkdown();
}

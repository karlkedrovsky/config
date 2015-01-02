<?php
/**
 * @file
 * Contains \SiteAudit\Check\Content\ContentTypes.
 */

class SiteAuditCheckContentContentTypes extends SiteAuditCheckAbstract {
  /**
   * Implements \SiteAudit\Check\Abstract\getLabel().
   */
  public function getLabel() {
    return dt('Content types');
  }

  /**
   * Implements \SiteAudit\Check\Abstract\getDescription().
   */
  public function getDescription() {
    return dt('Available content types and counts');
  }

  /**
   * Implements \SiteAudit\Check\Abstract\getResultFail().
   */
  public function getResultFail() {}

  /**
   * Implements \SiteAudit\Check\Abstract\getResultInfo().
   */
  public function getResultInfo() {
    if (empty($this->registry['content_type_counts'])) {
      if (drush_get_option('detail')) {
        return dt('No nodes exist.');
      }
      return '';
    }
    $ret_val = '';
    if (drush_get_option('html') == TRUE) {
      $ret_val .= '<table class="table table-condensed">';
      $ret_val .= "<thead><tr><th>Content Type</th><th>Node Count</th></tr></thead>";
      foreach ($this->registry['content_type_counts'] as $content_type => $count) {
        $ret_val .= "<tr><td>$content_type</td><td>$count</td></tr>";
      }
      $ret_val .= '</table>';
    }
    else {
      $ret_val  = 'Content Type: Count' . PHP_EOL;
      if (!drush_get_option('json')) {
        $ret_val .= str_repeat(' ', 4);
      }
      $ret_val .= '-------------------';
      foreach ($this->registry['content_type_counts'] as $content_type => $count) {
        $ret_val .= PHP_EOL;
        if (!drush_get_option('json')) {
          $ret_val .= str_repeat(' ', 4);
        }
        $ret_val .= $content_type . ': ' . $count;
      }
    }
    return $ret_val;
  }

  /**
   * Implements \SiteAudit\Check\Abstract\getResultPass().
   */
  public function getResultPass() {}

  /**
   * Implements \SiteAudit\Check\Abstract\getResultWarn().
   */
  public function getResultWarn() {
    return $this->getResultInfo();
  }

  /**
   * Implements \SiteAudit\Check\Abstract\getAction().
   */
  public function getAction() {}

  /**
   * Implements \SiteAudit\Check\Abstract\calculateScore().
   */
  public function calculateScore() {
    $sql_query  = 'SELECT COUNT(nid) AS count, type ';
    $sql_query .= 'FROM {node} ';
    $sql_query .= 'GROUP BY type ';
    $sql_query .= 'ORDER BY count DESC ';

    $result = db_query($sql_query);

    $this->registry['content_type_counts'] = $this->registry['content_types_unused'] = array();

    foreach ($result as $row) {
      if ($row->count == 0) {
        $this->registry['content_types_unused'][] = $row->type;
      }
      elseif (!drush_get_option('detail')) {
        continue;
      }
      $this->registry['content_type_counts'][$row->type] = $row->count;
    }

    return SiteAuditCheckAbstract::AUDIT_CHECK_SCORE_INFO;
  }
}

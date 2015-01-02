<?php
/**
 * @file
 * Contains \SiteAudit\Report\Status.
 */

class SiteAuditReportStatus extends SiteAuditReportAbstract {
  /**
   * Implements \SiteAudit\Report\Abstract\getLabel().
   */
  public function getLabel() {
    return dt('Status');
  }

  /**
   * Implements \SiteAudit\Report\Abstract\getCheckNames().
   */
  public function getCheckNames() {
    return array(
      'System',
    );
  }
}

<?php

namespace Drupal\custom_graphql_mutation;

/**
 * Interface definition for a page.
 *
 * Used for GraphQL queries and mutations.
 */
interface PageInterface {

  /**
   * Retrieve a list of pages.
   *
   * @return mixed
   *   The list of pages.
   */
  public function getPages();

  /**
   * Add a page.
   *
   * @param array $page
   *   The pages properties.
   * @param int $nid
   *   The parking nid.
   *
   * @return int
   *   The nid of the page.
   */
  public function addPage($page, $nid = NULL);


  /**
   * Add a page.
   *
   * @param array $page
   *   The pages properties.
   * @param int $nid
   *   The parking nid.
   *
   * @return int
   *   The nid of the page.
   */
  public function updatePage(array $page, $nid = NULL);


  /**
   * Get page.
   *
   * @param int $nid
   *   The node id
   *
   * @return array
   *   The page definition.
   */
  public function getPage($nid);

  /**
   * Remove a page.
   *
   * @param int $nid
   *   The parking nid.
   *
   * @return array
   *   The removed page.
   */
  public function removePage($nid);

}

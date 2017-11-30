<?php


namespace Drupal\custom_graphql_mutation;


/**
 * Page implementation.
 *
 * Implementation of a complete service definition.
 *
 * ToDo: Fill these out
 */
class Page implements PageInterface {

  /**
   * {@inheritdoc}
   */
  public function getPages(){
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function addPage(array $page, $nid = NULL){
    return NULL;
  }


  /**
   * {@inheritdoc}
   */
  public function updatePage(array $page, $nid = NULL){
    return NULL;
  }


  /**
   * {@inheritdoc}
   */
  public function getPage($nid){
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function removePage($nid){
    return [];
  }

}

<?php


namespace Drupal\custom_graphql_mutation;

use Drupal\node\Entity\Node;

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
  public function addPage($page, $nid = NULL){
    //return $page;

    $node = Node::create(array(
      'type' => 'page',
      'title' => $page['title'],
      'langcode' => 'en',
      'uid' => '1',
      'status' => '1',
      'body' => $page['body'],
    ));
    $node->save();

    $page['nid'] = (Int)$node->id();

    return $page;

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

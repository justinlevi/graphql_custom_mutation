<?php

namespace Drupal\custom_graphql_mutation\Plugin\GraphQL\Mutations;


use Drupal\graphql\Annotation\GraphQLMutation;
use Drupal\graphql\Plugin\GraphQL\InputTypes\InputTypePluginBase;
use Drupal\graphql_core\Plugin\GraphQL\Mutations\Entity\CreateEntityBase;


/**
 *  A Simple PageNode mutation.
 *
 * @GraphQLMutation(
 *   id = "add_page",
 *   entity_type = "node",
 *   entity_bundle = "page",
 *   secure = true,
 *   name = "page",
 *   type = "EntityCrudOutput",
 *   arguments = {
 *      "input" = "BasicPageInput"
 *   }
 * )
 */
class AddPage extends CreateEntityBase {

  /**
   * {@inheritdoc}
   */
  protected function extractEntityInput(array $inputArgs, InputTypePluginBase $inputType) {

    return [
      'title' => $inputArgs['title'] . ' : ' . date('Y-m-d H:ia'),
      'body' => $inputArgs['body']
    ];
  }

}
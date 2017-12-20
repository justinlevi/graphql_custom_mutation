<?php

namespace Drupal\custom_graphql_mutation\Plugin\GraphQL\Mutations;


use Drupal\graphql\Annotation\GraphQLMutation;
use Drupal\graphql\Plugin\GraphQL\InputTypes\InputTypePluginBase;
use Drupal\graphql_core\Plugin\GraphQL\Mutations\Entity\UpdateEntityBase;


/**
 *  A Simple PageNode mutation.
 *
 * @GraphQLMutation(
 *   id = "update_page",
 *   entity_type = "node",
 *   entity_bundle = "page",
 *   secure = true,
 *   name = "updatePage",
 *   type = "EntityCrudOutput",
 *   arguments = {
 *     "id" = "Int",
 *     "input" = "BasicPageInput"
 *   }
 * )
 */
class UpdatePage extends UpdateEntityBase {

  /**
   * {@inheritdoc}
   */
  protected function extractEntityInput(array $inputArgs, InputTypePluginBase $inputType) {

    return [
      'title' => $inputArgs['title'],
      'body' => $inputArgs['body']
    ];
  }

}
<?php

namespace Drupal\custom_graphql_mutation\Plugin\GraphQL\Mutations;


use Drupal\graphql\Annotation\GraphQLMutation;
use Drupal\graphql\GraphQL\Type\InputObjectType;
use Drupal\graphql\Plugin\GraphQL\InputTypes\InputTypePluginBase;
use Drupal\graphql_core\Plugin\GraphQL\Mutations\Entity\CreateEntityBase;
use Youshido\GraphQL\Execution\ResolveInfo;


/**
 *  A Simple PageNode mutation.
 *
 * @GraphQLMutation(
 *   id = "add_page",
 *   entity_type = "node",
 *   entity_bundle = "page",
 *   secure = true,
 *   name = "addPage",
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
  protected function extractEntityInput(array $inputArgs, InputObjectType $inputType, ResolveInfo $info) {
    return [
      'title' => $inputArgs['title'],
      'body' => $inputArgs['body']
    ];
  }
}
<?php

namespace Drupal\custom_graphql_mutation\Plugin\GraphQL\Mutations;


use Drupal\graphql\Annotation\GraphQLMutation;
use Drupal\graphql\Plugin\GraphQL\InputTypes\InputTypePluginBase;
use Drupal\graphql_core\Plugin\GraphQL\Mutations\Entity\DeleteEntityBase;


/**
 *  A Simple PageNode mutation.
 *
 * @GraphQLMutation(
 *   id = "delete_page",
 *   entity_type = "node",
 *   entity_bundle = "page",
 *   secure = true,
 *   name = "deletePage",
 *   type = "EntityCrudOutput",
 *   arguments = {
 *     "id" = "Int"
 *   }
 * )
 */
class DeletePage extends DeleteEntityBase {

}
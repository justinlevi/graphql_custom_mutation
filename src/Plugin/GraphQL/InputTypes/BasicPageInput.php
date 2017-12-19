<?php

namespace Drupal\custom_graphql_mutation\Plugin\GraphQL\InputTypes;

use Drupal\graphql\Plugin\GraphQL\InputTypes\InputTypePluginBase;

/**
 * BasicPage input type.
 *
 * @GraphQLInputType(
 *   id = "basic_page_input",
 *   name = "BasicPageInput",
 *   fields = {
 *     "nid" = "Int",
 *     "title" = "String",
 *     "body" = "String"
 *   }
 * )
 */
class BasicPageInput extends InputTypePluginBase {

}

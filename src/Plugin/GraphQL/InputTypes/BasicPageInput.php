<?php

namespace Drupal\custom_graphql_mutation\Plugin\GraphQL\InputTypes;

use Drupal\graphql\Plugin\GraphQL\InputTypes\InputTypePluginBase;

/**
 * Page input type.
 *
 * @GraphQLInputType(
 *   id = "basic_page_input",
 *   name = "BasicPageInput",
 *   fields = {
 *     "title" = "String"
 *   }
 * )
 */
class BasicPageInput extends InputTypePluginBase {

}

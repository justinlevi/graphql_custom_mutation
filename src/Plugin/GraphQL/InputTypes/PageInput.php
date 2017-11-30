<?php

namespace Drupal\custom_graphql_mutation\Plugin\GraphQL\InputTypes;

use Drupal\graphql\Plugin\GraphQL\InputTypes\InputTypePluginBase;

/**
 * Page input type.
 *
 * @GraphQLInputType(
 *   id = "page_input",
 *   name = "PageInput",
 *   fields = {
 *     "title" = "String",
 *     "body" = "String"
 *   }
 * )
 */
class PageInput extends InputTypePluginBase {

}

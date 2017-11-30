<?php

namespace Drupal\custom_graphql_mutation\Plugin\GraphQL\Fields;

use Drupal\graphql\Plugin\GraphQL\Fields\FieldPluginBase;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * A Page title type.
 *
 * @GraphQLField(
 *   id = "title",
 *   secure = true,
 *   name = "title",
 *   type = "String",
 * )
 */
class Title extends FieldPluginBase {

  /**
   * {@inheritdoc}
   */
  public function resolveValues($value, array $args, ResolveInfo $info) {
    yield $value['title'];
  }

}

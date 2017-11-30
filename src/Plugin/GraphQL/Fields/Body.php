<?php

namespace Drupal\custom_graphql_mutation\Plugin\GraphQL\Fields;

use Drupal\graphql\Plugin\GraphQL\Fields\FieldPluginBase;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * A Page body type.
 *
 * @GraphQLField(
 *   id = "body",
 *   secure = true,
 *   name = "body",
 *   type = "String",
 * )
 */
class Body extends FieldPluginBase {

  /**
   * {@inheritdoc}
   */
  public function resolveValues($value, array $args, ResolveInfo $info) {
    yield $value['body'];
  }

}

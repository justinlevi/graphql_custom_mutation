<?php

namespace Drupal\custom_graphql_mutation\Plugin\GraphQL\Fields;

use Drupal\graphql\Plugin\GraphQL\Fields\FieldPluginBase;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * A Page nid type.
 *
 * @GraphQLField(
 *   id = "nid",
 *   secure = true,
 *   name = "nid",
 *   type = "Int",
 *   default = "-1",
 *   parents = {"Page"}
 * )
 */
class Nid extends FieldPluginBase {

  /**
   * {@inheritdoc}
   */
  public function resolveValues($value, array $args, ResolveInfo $info) {
    yield $value['nid'];
  }

}

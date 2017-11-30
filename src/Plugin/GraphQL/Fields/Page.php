<?php

namespace Drupal\custom_graphql_mutation\Plugin\GraphQL\Fields;

use Drupal\Core\DependencyInjection\DependencySerializationTrait;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\graphql\Plugin\GraphQL\Fields\FieldPluginBase;
use Drupal\custom_graphql_mutation\PageInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * List everything we've got in our page.
 *
 * @GraphQLField(
 *   id = "page",
 *   secure = true,
 *   name = "page",
 *   type = "BasicPage",
 *   multi = false
 * )
 */
class Page extends FieldPluginBase implements ContainerFactoryPluginInterface {
  use DependencySerializationTrait;

  /**
   * The page instance.
   *
   * @var \Drupal\graphql_plugin_test\PageInterface
   */
  protected $page;

  /**
   * {@inheritdoc}
   */
  public function resolveValues($value, array $args, ResolveInfo $info) {
    foreach ($this->page->getPages() as $page) {
      yield $page;
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $pluginId, $pluginDefinition) {
    return new static($configuration, $pluginId, $pluginDefinition, $container->get('graphql_page_mutation.page'));
  }

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $pluginId, $pluginDefinition, PageInterface $page) {
    $this->page = $page;
    parent::__construct($configuration, $pluginId, $pluginDefinition);
  }

}

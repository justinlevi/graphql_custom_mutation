<?php

namespace Drupal\custom_graphql_mutation\Plugin\GraphQL\Mutations;

use Drupal\Core\DependencyInjection\DependencySerializationTrait;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\graphql\Plugin\GraphQL\Mutations\MutationPluginBase;
use Drupal\custom_graphql_mutation\PageInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * A NodePage mutation.
 *
 * @GraphQLMutation(
 *   id = "add_page",
 *   secure = true,
 *   name = "addPage",
 *   type = "BasicPage",
 *   arguments = {
 *     "page" = "PageInput"
 *   }
 * )
 */
class AddPage extends MutationPluginBase implements ContainerFactoryPluginInterface {
  use DependencySerializationTrait;

  /**
   * The page.
   *
   * @var \Drupal\custom_graphql_mutation\PageInterface
   */
  protected $page;

  /**
   * {@inheritdoc}
   */
  public function resolve($value, array $args, ResolveInfo $info) {
    return $this->page->addPage($args['page']);
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

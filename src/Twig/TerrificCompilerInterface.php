<?php

namespace Deniaz\Terrific\Twig;

use Deniaz\Terrific\Twig\Utility\ExpressionHandler;
use Twig\Node\Expression\GetAttrExpression;
use Twig\Node\Expression\NameExpression;
use Twig_CompilerInterface as CompilerInterface;

/**
 * Extends the base Twig compiler.
 *
 * @package \Deniaz\Terrific\Twig
 */
interface TerrificCompilerInterface {

  /**
   * Returns the base Twig compiler.
   *
   * @return \Twig_CompilerInterface
   *   The Twig compiler.
   */
  public function getTwigCompiler(): CompilerInterface;

  /**
   * Compiles NameExpression as a variable to access.
   *
   * @param \Twig\Node\Expression\NameExpression $expression
   *   The expression to compile.
   */
  public function compileNameExpressionAsContextVariable(NameExpression $expression): void;

  /**
   * Compiles GetAttrExpression as a variable to access.
   *
   * @param \Twig\Node\Expression\GetAttrExpression $expression
   *   The expression to compile.
   */
  public function compileGetAttrExpressionAsContextVariable(GetAttrExpression $expression): void;

  /**
   * Compiles NameExpression as a variable to the Terrific Twig context.
   *
   * @param \Twig\Node\Expression\NameExpression $expression
   *   The expression to compile.
   * @param string|null $variableDoesNotExistErrorMessage
   *   Custom error message that is used as exception message
   *   when the given variable does not exist.
   */
  public function compileAndMergeNameExpressionToContext(NameExpression $expression, ?string $variableDoesNotExistErrorMessage = NULL): void;

  /**
   * Compiles GetAttrExpression as a variable to the Terrific Twig context.
   *
   * @param \Twig\Node\Expression\GetAttrExpression $expression
   *   The expression to compile.
   * @param string|null $variableDoesNotExistErrorMessage
   *   Custom error message that is used as exception message
   *   when the given variable does not exist.
   */
  public function compileAndMergeGetAttrExpressionToContext(GetAttrExpression $expression, ?string $variableDoesNotExistErrorMessage = NULL): void;

  /**
   * Returns the expression handler.
   *
   * @return \Deniaz\Terrific\Twig\Utility\ExpressionHandler
   *   The expression handler.
   */
  public function getExpressionHandler(): ExpressionHandler;

}

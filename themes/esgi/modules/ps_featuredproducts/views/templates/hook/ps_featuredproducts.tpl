{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{$childrens = Category::getChildren(18, 1, true, 1)}

<section class="featured-products clearfix">

  {$count = 0}
  <nav class="nav nav-pills nav-fill" role="tablist">
    {foreach from=$childrens item="children"}
      <a class="nav-item nav-link {if $count == 0 } active {/if}" data-toggle="pill" role="tab"  href="#cat_{$children['id_category']}">{$children['name']}</a>
      {assign var=count value=$count+1}
    {/foreach}
  </nav>

  {assign var=count value=0}
  <div class="tab-content clearfix">
    {foreach from=$childrens item="children"}
        {$catproducts = Admiring::getProductsByCategory($children['id_category'])}
      <div role="tabpanel" class="tab-pane {if $count == 0 } active {/if} fade {if $count == 0 } show {/if}" id="cat_{$children['id_category']}">
          <div class="row no-gutters">
              {foreach from=$catproducts item="catproduct"}
                  {include file="catalog/_partials/miniatures/product.tpl" product=$catproduct}
              {/foreach}
          </div>

      </div>
      {assign var=count value=$count+1}
    {/foreach}


  </div>

</section>



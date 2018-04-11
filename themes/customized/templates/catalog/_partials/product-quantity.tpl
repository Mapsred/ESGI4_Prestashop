{if !$configuration.is_catalog}
    {block name='product_quantity'}
        <div class="clearfix product-variants-item">
            <span class="control-label">{l s='Quantity' d='Shop.Theme.Catalog'}</span>
            <div class="product-quantity clearfix">
                <div class="qty">
                    <input type="text" name="qty" id="quantity_wanted" value="{$product.quantity_wanted}"
                           class="input-group" min="{$product.minimal_quantity}"
                           aria-label="{l s='Quantity' d='Shop.Theme.Actions'}">
                </div>
            </div>
        </div>
    {/block}
{/if}

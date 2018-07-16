{if !$configuration.is_catalog}
    {block name='product_availability'}
        <span id="product-availability">
        {if $product.show_availability && $product.availability_message}
            {if $product.availability == 'available'}
                <i class="material-icons product-available">&#xE5CA;</i>
            {elseif $product.availability == 'last_remaining_items'}
                <i class="material-icons product-last-items">&#xE002;</i>
            {else}
                <i class="material-icons product-unavailable">&#xE14B;</i>
            {/if}

            {$product.availability_message}
        {/if}
      </span>
    {/block}
{/if}

{extends file='layouts/layout-full-width.tpl'}

{block name='content'}
    <h2>LISTE DES COMMENTAIRES</h2>
    <hr>
    {foreach from=$comments item=comment}
        <p>
            <strong>{l s='Reviews' mod='admiring'} #{$comment->id_admiring_comment}:</strong> {$comment->comment}<br>
            <strong>{l s='grade' mod='admiring'} :</strong> {$comment->grade}/5<br>
        </p>
        <br>
    {/foreach}

    <ul class="pagination">
        {for $count=1 to $nb_pages}
            {assign var=params value=['id_product' => $smarty.get.id_product, 'page' => $count]}

            {if $pageEnCours ne $count}
                <li>
                    <a href="{url entity='module' name='admiring' controller='monControleur' params = $params}">
                        <span>{$count}</span>
                    </a>
                </li>
            {else}
                <li class="active current">
                    <span>{$count}</span>
                </li>
            {/if}
        {/for}
    </ul>

{/block}


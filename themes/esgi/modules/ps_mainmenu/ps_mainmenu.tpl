{assign var=_counter value=0}
{function name="menu" nodes=[] depth=0 parent=null}
    {if $nodes|count}
      <ul class="top-menu" {if $depth == 0}id="top-menu"{/if} data-depth="{$depth}">
        {foreach from=$nodes item=node}
            <li class="{$node.type}{if $node.current} current {/if}" id="{$node.page_identifier}">
            {assign var=_counter    value=$_counter+1}
                {assign var=_expand_id value=10|mt_rand:100000}
              <a
                {if $node.open_in_new_window} target="_blank" {/if}
                {if $node.children|count} class="dropdown-toggle collapsed" href="#"
                    data-depth="{$depth}" data-toggle="collapse"  role="button" aria-expanded="false" data-target="#top_sub_menu_{$_expand_id}"
                {else} href="{$node.url}"
                {/if}

              >
                {$node.label}
              </a>
              {if $node.children|count}
              <div {if $depth === 0} class="collapse" {else} class="collapse"{/if} aria-expanded="false" id="top_sub_menu_{$_expand_id}">
                {menu nodes=$node.children depth=$node.depth parent=$node}
              </div>
              {/if}
            </li>
        {/foreach}
      </ul>
    {/if}
{/function}

<div class="menu col-lg-12 col-md-12 js-top-menu position-static hidden-sm-down" id="_desktop_top_menu" style="text-align: center">
    <a href="#" data-depth="0" class="dropdown-toggle collapsed" data-toggle="collapse" role="button" data-toggle="dropdown" data-target="#navbarDropdown" aria-expanded="false">
        {l s="La boutique" mod="admiring"}
    </a>

    <div class="sub-menu js-sub-menu collapse" id="navbarDropdown">
        {menu nodes=$menu.children}
        <div class="clearfix"></div>
    </div>

</div>

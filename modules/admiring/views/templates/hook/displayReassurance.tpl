{if $enable_grades or $enable_comments}
    <div id="block-comments" data-data-scroll="true">
        <h3 class="page-product-heading">{$module_name}</h3>
        <div class="tabs">
            {foreach from=$comments item=comment}
                <p>
                    <strong>{l s='Comment' mod='admiring'} #{$comment->id_admiring_comment}</strong> : {$comment->comment}
                </p>
                <p>
                    <strong>{l s='Grade' mod='admiring'}</strong> {$comment->grade}/5
                </p>
            {/foreach}

            <form method="post">
                <div class="form-group">
                    <label for="admiring_grade">{l s='Grade' mod='admiring'} :</label>
                    <select name="admiring_grade" id="admiring_grade" class="form-control">
                        <option value="" disabled selected>{l s='Choose a grade' mod='admiring'}</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="admiring_comment">{l s='Comment' mod='admiring'} :</label>
                    <textarea name="admiring_comment" id="admiring_comment" cols="30" rows="10"
                              class="form-control"></textarea>
                </div>
                <button type="submit" name="submit_admiring_comment" class="btn btn-dark btn-flat">{l s='Send' mod='admiring'}</button>
            </form>
        </div>

    </div>
{/if}

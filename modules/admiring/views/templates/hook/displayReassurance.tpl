{if $enable_grades or $enable_comments}
    <div id="block-comments">
        <h3 class="page-product-heading">{$module_name}</h3>
        <div class="tabs">
            {foreach from=$comments item=comment}
                <p>
                    <strong>Commentaire #{$comment->id_admiring_comment}</strong> : {$comment->comment}
                </p>
                <p>
                    <strong>Note</strong> {$comment->grade}/5
                </p>
            {/foreach}

            <form method="post">
                <div class="form-group">
                    <label for="admiring_grade">Note :</label>
                    <select name="admiring_grade" id="admiring_grade" class="form-control">
                        <option value="" disabled selected>Choisissez votre note</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="admiring_comment">Commentaire :</label>
                    <textarea name="admiring_comment" id="admiring_comment" cols="30" rows="10"
                              class="form-control"></textarea>
                </div>
                <button type="submit" name="submit_admiring_comment" class="btn btn-dark btn-flat">Envoyer</button>
            </form>
        </div>

        {*<a href="#">Voir tous les commentaires</a>*}
    </div>
{/if}

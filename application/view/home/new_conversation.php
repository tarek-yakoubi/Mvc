<div class="container">
    <h1>Nouvelle Conversation</h1>
    <h4>Selectionner les utilisateurs :</h4>
    <form action="<?php echo URL; ?>?controller=home&action=newConversation" method="post">
        <div class="form-group">
            <select name="users[]" id="users" multiple data-action-box="true" class="form-control" required>
                <?php foreach ($users as $user) { ?>
                    <option value="<?php echo $user->id ?>"><?php echo $user->email ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>

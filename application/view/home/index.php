<div class="container">
   <h1>Conversations</h1>

    <table class="table">
        <thead>
            <th>Created</th>
            <th></th>
        </thead>
        <tbody>
        <?php foreach ($coversations as $coversation) { ?>
        <tr>
            <td><?php echo  $coversation->created ?></td>
            <td>
                <a href="<?php echo URL; ?>?controller=home&action=conversation&id=<?php echo  $coversation->id ?>">
                    Select
                </a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>


    <a href="<?php echo URL; ?>?controller=home&action=newConversation">Nouvelle Conversation</a>
</div>

<div class="container">

    <h1>Chat</h1>
    <span>Members : </span>
    <?php foreach ($members as $member){ ?>
        <span class="badge badge-secondary"><?php echo $member->email ?></span>
    <?php } ?>

    <form method="post" action="<?php echo URL; ?>?controller=home&action=conversation&id=<?php echo $id ?>">
        <div class="form-group">
            <div class="row">
                <div class="col-md-9">
                    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </div>
        </div>
    </form>
    <?php foreach ($messages as $message) { ?>
        <hr>
        <div class="bd-callout bd-callout-warning">
            <h5 id="jquery-incompatibility"><?php echo $message->email ?></h5>
            <p><?php echo $message->content ?></p>
            <small><?php echo $message->created ?></small>
        </div>
    <?php } ?>
</div>

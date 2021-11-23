<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Conv</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- logo -->
<div class="logo">
    MINI
</div>

<!-- navigation -->
<div class="navigation">
.id    <a href="<?php echo URL; ?>">hsome</a>
    <a href="<?php echo URL; ?>home/exampleone">subpage</a>
    <a href="<?php echo URL; ?>home/exampletwo">subpage 2</a>
    <a href="<?php echo URL; ?>songs">songs</a>
</div>


<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Chat</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo URL; ?>">hsome</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URL; ?>?controller=home&action=exampleOne">subpage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URL; ?>?controller=home&action=exampleTwo">subpage 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URL; ?>?controller=songs">songs</a>
            </li>
        </ul>
    </div>
</nav>


<?php echo $body; ?>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
<script>
    var url = "<?php echo URL; ?>";
</script>

<!-- our JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>


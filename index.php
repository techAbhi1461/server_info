
<?php include "server_info.php" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>System Info</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
        <h1>Server and File Info</h1>
        <?php if($server): ?>
            <ul class="list-group">
            <?php foreach($server as $key => $value): ?>
                <li class="list-group-item">
                    <strong><?php echo $key;?></strong>
                    <?php echo $value;?>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>

        <h1>Client Info</h1>
        <?php if($client): ?>
            <ul class="list-group">
            <?php foreach($client as $key => $value): ?>
                <li class="list-group-item">
                    <strong><?php echo $key;?></strong>
                    <?php echo $value;?>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
            
        </div>
    </body>
</html>
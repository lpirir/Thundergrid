<?php

require 'classes/controller.php';
require 'classes/grid.php';

/*
	Setup:
	You can modify the view by changing the paramiters on getLinks()
	
	First Paramiter = Type (Currently Supported: images list)
	Second Paramiter = File Type (Only Supported for Images, leave blank for any other type)
*/

$gallery = new Grid();
$links = $gallery->getLinks('list', '');



?>
<!doctype html>
<html>
<head>
    <title>Thundergrid</title>
</head>
<body>
    <img src='lib/images/thundergrid_logo.png'><br><br>

    <?php if (empty($links)): ?>
        <p>There are no files in GridFS.</p>
    <?php else: ?>
        <?php foreach ($links as $link): ?>
            <?php echo $link; ?>
        <?php endforeach; ?>
    <?php endif ?>
</body>
</html>

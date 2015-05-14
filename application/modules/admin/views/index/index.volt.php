<!DOCTYPE html>
<html>
    <head>
        
        <link href="http://cdn.everything.io/kickstart/3.x/css/kickstart.min.css" rel="stylesheet" />
        <link href="/public/css/main.css" rel="stylesheet" />
        
        <title>Admin - Blog</title>
    </head>
    <body>
        <div id="header">
            <?php if ($this->auth->getIdentity()) { ?>
            <a href="<?php echo $this->url->get('/logout'); ?>">Logout</a>
            <?php } ?>
        </div>
        <div id="content">
            

        </div>

        <div id="footer">
            
            
        </div>
        <script type='text/javascript' src='http://cdn.everything.io/kickstart/3.x/js/kickstart.min.js'></script>
    </body>
</html>
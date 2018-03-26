<!DOCTYPE html>
<html>
    <head>    
        <title>The Complete Guide To The Settings API | Sandbox Theme</title>
    </head>
    <body>
     
    <?php if (get_option('show_header')) { ?>

        <div id="header">
            <h1>Sandbox Header</h1>
        </div><!-- /#header -->

    <?php } ?> <!-- end if -->

    <?php if (get_option('show_content')) : ?>
 
        <div id="content">
            <p>This is theme content.</p>
        </div><!-- /#content -->

    <?php endif; ?> <!-- end if -->

    <?php if (get_option('show_footer')) : ?>
 
        <div id="footer">
            <p>&copy; <?php echo date('Y'); ?> All Rights Reserved.</p>
        </div><!-- /#footer -->

    <?php endif; ?> <!-- end if -->
     
    </body>
</html>
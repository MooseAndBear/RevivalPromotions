<!DOCTYPE html>
<html><?php

  include 'php/html_head.php';

?><body>

<div class="wrapper">
  <div class="header">
  </div>
  <section class="main--section"><?php

        include 'php/section_nav.php';

    ?><div class="content"><?php

        foreach (glob("blog_posts/*.php") as $filename){

            echo '<section class="animated">';
            include $filename;
            echo '</section>';
            
        }

  ?></div>  
  </section>
</div>
    <script src='bower_components/jquery/dist/jquery.min.js'></script>
    <script src="public/index.js"></script>
  </body>
</html>

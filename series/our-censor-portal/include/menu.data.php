<?php

  $menuItems = array('pages' =>

                    array('MenuLink'=>'index.php','MenuName'=>'Home'),
                    array('MenuLink'=>'events.php','MenuName'=>'Events'),
                    array('MenuLink'=>'international-communications.php','MenuName'=>'Communications'),

                    );

 ?>
<?php

     function menuBuilder( $obj ) {
          echo('<nav><ul>');
          foreach ( $obj as $key => $value ) {
               echo( '<li><a href="' . $value[ 'MenuLink' ]. '">' . $value[ 'MenuName' ] . '</a></li>' );
          }
          echo('</ul></nav>');
     }

 ?>

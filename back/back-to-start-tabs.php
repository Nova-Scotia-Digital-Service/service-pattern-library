<div class="exampleDisplay">
    <!-- Tab nav -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="#exampleBackToStart" role="tab" data-toggle="tab">Example</a>
        </li>
                                        
        <li class="nav-item">
            <a class="nav-link" href="#htmlBackToStart" role="tab" data-toggle="tab">HTML</a>
        </li>
    </ul>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active show" id="exampleBackToStart">
            <?php
                $files = array();
                $handle=opendir('back');
            
                while (false !== ($file = readdir($handle))):
                    
                    if(substr($file, -5) == '.html'):
                        
                        $files[] = $file;
                    endif;
                endwhile;
                
                sort($files);
                    echo '<div class="pattern">';
                        echo '<div class="display">';
                            include('back/back-to-start.html');
                        echo '</div>';
                    echo '</div>';
            ?>
        </div>
                                        
        <div role="tabpanel" class="tab-pane fade" id="htmlBackToStart">
            <?php
                $files = array();
                $handle=opendir('back');
                    
                while (false !== ($file = readdir($handle))):
                    
                    if(substr($file, -5) == '.html'):
                        
                        $files[] = $file;
                    endif;
                endwhile;
                
                sort($files);
                    echo '<textarea rows="6" cols="15">';
                    echo htmlspecialchars(file_get_contents('back/back-to-start.html'));
                    echo '</textarea';
            ?>
        </div> <!-- end of tab panel -->
    </div>  <!-- end of tab content -->
</div> <!-- end of example display -->
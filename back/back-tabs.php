<!-- Tab nav -->
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" href="#exampleBack" role="tab" data-toggle="tab">Example</a>
    </li>

    <li class="nav-item">
        <a id="htmlTabBack" class="nav-link" href="#htmlBack" role="tab" data-toggle="tab">HTML</a>
    </li>
</ul>

<div class="exampleDisplay">

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active show" id="exampleBack">
            <?php
                $files = array();
                $handle=opendir('back');

                while (false !== ($file = readdir($handle))):

                    if(substr($file, -5) == '.html'):

                        $files[] = $file;
                    endif;
                endwhile;

                sort($files);
                  include('back/back.html');

            ?>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="htmlBack">
            <?php
                $files = array();
                $handle=opendir('back');

                while (false !== ($file = readdir($handle))):

                    if(substr($file, -5) == '.html'):

                        $files[] = $file;
                    endif;
                endwhile;

                sort($files);
                    echo '<textarea rows="1" aria-labelledby="htmlTabBack">';
                    echo htmlspecialchars(file_get_contents('back/back.html'));
                    echo '</textarea>';
            ?>
        </div> <!-- end of tab panel -->
    </div>  <!-- end of tab content -->
</div> <!-- end of example display -->

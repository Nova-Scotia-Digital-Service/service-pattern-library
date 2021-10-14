<!-- Tab nav -->
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" href="#errorPhone" role="tab" data-toggle="tab">Example</a>
    </li>

    <li class="nav-item">
        <a id="htmlTabBack" class="nav-link" href="#htmlErrorPhone" role="tab" data-toggle="tab">HTML</a>
    </li>
</ul>

<div class="exampleDisplay">

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active show" id="errorPhone">
            <?php
                $files = array();
                $handle=opendir('phone');

                while (false !== ($file = readdir($handle))):

                    if(substr($file, -5) == '.html'):

                        $files[] = $file;
                    endif;
                endwhile;

                sort($files);
                  include('phone/phone-number-error.html');
            ?>
        </div>

         <div role="tabpanel" class="tab-pane fade" id="htmlErrorPhone">
            <?php
                $files = array();
                $handle=opendir('phone');

                while (false !== ($file = readdir($handle))):

                    if(substr($file, -5) == '.html'):

                        $files[] = $file;
                    endif;
                endwhile;

                sort($files);
                    echo '<textarea rows="3" aria-labelledby="htmlTabPhone">';
                    echo htmlspecialchars(file_get_contents('phone/phone-number-error.html'));
                    echo '</textarea>';
            ?>
        </div> <!-- end of tab panel -->
       
    </div>  <!-- end of tab content -->
</div> <!-- end of example display -->

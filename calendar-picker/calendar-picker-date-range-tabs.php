<!-- Tab nav -->
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" href="#exampleCalendarPickerDaterange" role="tab" data-toggle="tab">Example</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#htmlCalendarPickerDaterange" role="tab" data-toggle="tab">HTML</a>
    </li>
</ul>

<div class="exampleDisplay">

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active show" id="exampleCalendarPickerDaterange">
            <?php
                $files = array();
                $handle=opendir('calendar-picker');

                while (false !== ($file = readdir($handle))):

                    if(substr($file, -5) == '.php'):

                        $files[] = $file;
                    endif;
                endwhile;

                sort($files);
                  include('calendar-picker/calendar-picker-date-range.php');

            ?>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="htmlCalendarPickerDaterange">
            <?php
                $files = array();
                $handle=opendir('calendar-picker');

                while (false !== ($file = readdir($handle))):

                    if(substr($file, -5) == '.php'):

                        $files[] = $file;
                    endif;
                endwhile;

                sort($files);
                    echo '<textarea rows="15" aria-labelledby="htmlTabBack">';
                    echo htmlspecialchars(file_get_contents('calendar-picker/calendar-picker-date-range.php'));
                    echo '</textarea>';
            ?>
        </div>

    </div>  <!-- end of tab content -->
</div> <!-- end of example display -->

<!-- Tab nav -->
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" href="#exampleCalendarPickerDateFields" role="tab" data-toggle="tab">Example</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#htmlCalendarPickerDateFields" role="tab" data-toggle="tab">HTML</a>
    </li>
</ul>

<div class="exampleDisplay">

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active show" id="exampleCalendarPickerDateFields">
            <?php
                $files = array();
                $handle=opendir('calendar-picker');

                while (false !== ($file = readdir($handle))):

                    if(substr($file, -5) == '.php'):

                        $files[] = $file;
                    endif;
                endwhile;

                sort($files);
                  include('calendar-picker/calendar-picker-date-fields.php');

            ?>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="htmlCalendarPickerDateFields">
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
                    echo htmlspecialchars(file_get_contents('calendar-picker/calendar-picker-date-fields.php'));
                    echo '</textarea>';
            ?>
        </div>

    </div>  <!-- end of tab content -->
</div> <!-- end of example display -->

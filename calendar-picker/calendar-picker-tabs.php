<!-- Tab nav -->
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" href="#exampleCalendarPickerEnglish" role="tab" data-toggle="tab">English Example</a>
    </li>

    <li class="nav-item">
        <a id="htmlTabBack" class="nav-link" href="#htmlCalendarPickerEnglish" role="tab" data-toggle="tab">English HTML</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#exampleCalendarPickerFrench" role="tab" data-toggle="tab">French Example</a>
    </li>

    <li class="nav-item">
        <a id="htmlTabBack" class="nav-link" href="#htmlCalendarPickerFrench" role="tab" data-toggle="tab">French HTML</a>
    </li>
</ul>

<div class="exampleDisplay">

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active show" id="exampleCalendarPickerEnglish">
            <?php
                $files = array();
                $handle=opendir('calendar-picker');

                while (false !== ($file = readdir($handle))):

                    if(substr($file, -5) == '.php'):

                        $files[] = $file;
                    endif;
                endwhile;

                sort($files);
                  include('calendar-picker/calendar-picker-english.php');

            ?>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="htmlCalendarPickerEnglish">
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
                    echo htmlspecialchars(file_get_contents('calendar-picker/calendar-picker-english.php'));
                    echo '</textarea>';
            ?>
        </div>
        <div role="tabpanel" class="tab-pane fade in" id="exampleCalendarPickerFrench">
            <?php
                $files = array();
                $handle=opendir('calendar-picker');

                while (false !== ($file = readdir($handle))):

                    if(substr($file, -5) == '.php'):

                        $files[] = $file;
                    endif;
                endwhile;

                sort($files);
                  include('calendar-picker/calendar-picker-french.php');

            ?>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="htmlCalendarPickerFrench">
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
                    echo htmlspecialchars(file_get_contents('calendar-picker/calendar-picker-french.php'));
                    echo '</textarea>';
            ?>
        </div>

    </div>  <!-- end of tab content -->
</div> <!-- end of example display -->

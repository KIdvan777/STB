


    <div class="">
        <?php $fields = get_field_objects(); ?>
        <?php foreach($fields as $field_prop): ?>

            <?php //vardump($field_prop);
            echo '<li>'. $field_prop['label'] .':'. $field_prop['value'] .'</li>'
         ?>

        <?php endforeach; ?>
    </div>

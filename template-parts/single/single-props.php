<?php
    $field = get_field_object('power');
    $values = explode(',', $_GET['power']);

    if( $field['choices'] ): ?>
        <ul>
            <?php foreach( $field['choices'] as $value => $label ): ?>

                <input type="checkbox" value="<?php echo $value;?>"
                <?php if($value):?>checked="checked"<?php endif;?>/>
                <?php echo $label; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

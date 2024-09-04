
<?php
/** Edits the 'Protected:' part from posts titles */
add_filter('protected_title_format', 'remove_protected_text');
function remove_protected_text()
{
    return __('New Protected: %s');
}


/** * Removes 'Protected:' part from posts titles */
add_filter('protected_title_format', 'remove_protected_text');
function remove_protected_text()
{
    return __('%s');
}

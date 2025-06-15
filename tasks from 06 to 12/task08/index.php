<?php 
echo "<pre>";
    $array=array(
        'FrontEnd' => array(
            0 => 'HTML',
            1 => 'CSS',
            'JS' => array (
                'Vuejs'=> array(
                    2=> 'v2',
                    3=>'v3'
                ),
                0 => 'Reactjs',
                1 => 'Svelte'
            )
            ),
        'BackEnd' => array (
            0 => 'PHP',
            1 => 'MySQL',
            2 => 'Security'
        ),
        0 => 'Git',
        1 => 'Github',
        'Testing' => array(
            0 => 'Unit Testing',
            1 => 'End To End',
            2 => 'Integration'
        )
);
print_r($array);
echo "</pre>"
?>

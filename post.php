<?php
    $table = array();
    $name = '';
    $email = '';
    $term = '';

    if(!empty($_POST['st_name'])) {
        $name = $_POST['st_name'];
    }
    if(!empty($_POST['email_address'])) {
        $email = $_POST['email_address'];
    }
    if(!empty($_POST['term_name'])) {
        $term = $_POST['term_name'];
    }

    if($term != 'tak' || empty($term)) {
        $term = 'nie';
    }
?>

    Imię: <?php echo $name; ?><br/>
    Email: <?php echo $email; ?><br/>
    Zgoda: <?php echo $term; ?><br/>

<?php
    array_push($table, array('name' => $name, 'email' => $email, 'term' => $term));
    $json = json_encode($table, JSON_PRETTY_PRINT);

    echo 'json: '.$json;
?>
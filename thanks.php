<?php

$errors = [];
validate($_POST, $errors);

if(!empty($errors))
{
    foreach ($errors as $error) {
        echo $error . '<br>';
    }
} else {
    echo "Merci $_POST[user_last_name] $_POST[user_name] de nous avoir contacté à propos de “$_POST[subject]”.

    Un de nos conseiller vous contactera soit à l’adresse $_POST[user_email] ou par téléphone au $_POST[user_email] dans les plus brefs délais pour traiter votre demande : 

    <br><br>$_POST[user_message]";
}

function validate(array $fields, array &$errors): void {

    $errors = [];

    $field_keys = array_keys($fields);

    foreach ($field_keys as $key) {
        if(empty($fields[$key]))
        {
            $errors[] = str_replace('_', ' ', $key) . " cannot be empty!";
        }

        if($key === 'user_email')
        {
            if (!filter_var($fields[$key], FILTER_VALIDATE_EMAIL))
            {
            $errors[] = "Invalid email format!";
            }
        }
    }
}

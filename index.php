<?php
require_once "functions.php";
//require "functions.php";
//include "functions.php";
//include_once "functions.php";

require_once "consts.php";

$data = get_data(API_URL);
$until_message = get_until_message($data["days_until"]);

?>

<!--php index.php-->
<!--php -S localhost:8000-->

<!DOCTYPE html>

<?php render_template("head", ["title" => $data["title"]]); ?>
<?php render_template("main", array_merge(
    $data,
    ["until_message" => $until_message]
)); ?>
<?php render_template("styles"); ?>

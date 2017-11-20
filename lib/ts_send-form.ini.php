<?

$Data = $_POST["data"];
$formName = $_POST["formName"];
$gettingInputs = "";

/**
 * inputs list constructor
 */
foreach ($Data as $key => $value) {
    $gettingInputs .= "<b>" . $value["inputName"] . ":</b> " . $value["inputValue"] . "<br>";
}

/**
 * form settings
 */
$sett_mailTo = "vissam_studio@mail.ru";
$sett_subject = "Request";
$sett_message = "
	<h1>$formName</h1>
	<hr>
	$gettingInputs
";



mail($sett_mailTo, $sett_subject, $sett_message, "Content-type: text/html; charset=utf-8");
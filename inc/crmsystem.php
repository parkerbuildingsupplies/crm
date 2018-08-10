<?php

$alert     = '';
$account   = '';
$type      = '';
$priority  = '';
$reference = '';
$notes     = '';
$date      = date('d/m/Y');

function clean_text($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    $string = strtoupper($string);
    return $string;
}

if (isset($_POST["submit"])) {

    // account
    if (empty($_POST["account"])) {
        $alert .= '<div class="alert alert-danger text-left alert-dismissible fade show">Account is required
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              					<span aria-hidden="true">&times;</span>
              				</button>
                    </div>';
    } else {
        $account = clean_text($_POST["account"]);
    }

    // call type
    if (empty($_POST["type"])) {
        $alert .= '<div class="alert alert-danger text-left alert-dismissible fade show">Call type is required
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              					<span aria-hidden="true">&times;</span>
              				</button>
                    </div>';
    } else {
        $type = clean_text($_POST["type"]);
    }

    // priority
    if (empty($_POST["priority"])) {
        $alert .= '<div class="alert alert-danger text-left alert-dismissible fade show">Priority is required
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              					<span aria-hidden="true">&times;</span>
              				</button>
                    </div>';
    } else {
        $priority = clean_text($_POST["priority"]);
    }

    // reference
    if (empty($_POST["reference"])) {
        $alert .= '<div class="alert alert-danger text-left alert-dismissible fade show">Reference is required
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              					<span aria-hidden="true">&times;</span>
              				</button>
                    </div>';
    } else {
        $reference = $_POST["reference"];
    }

    // notes
    if (empty($_POST["notes"])) {
        $alert .= '<div class="alert alert-danger text-left alert-dismissible fade show">Notes are required
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              					<span aria-hidden="true">&times;</span>
              				</button>
                    </div>';
    } else {
        $notes = $_POST["notes"];
    }

    if ($alert == '') {

        // alert success
        $alert = '<div class="alert alert-success">New CRM file created succesfully</div>';

        // create file in folder
        $document = fopen("output/" . uniqid() . ".csv", "a");

        // define header fields
        $output_header = array(
            "CLOSED",
            "LINKTYPE",
            "ACCOUNT",
            "EVTIME",
            "CLDATE",
            "CLTIME",
            "CONTACT",
            "EVWFSTRUCT",
            "EVUSERID",
            "CLUSERID",
            "CHAIN",
            "XREFTYPE",
            "XREFLEVELCODE",
            "XREFVER",
            "CLASS",
            "DEPTTYPE",
            "DEPARTMENT",
            "GROUP",
            "TYPE",
            "EVWFTYPE",
            "REFERENC",
            "CRUSERID",
            "BRANCH",
            "SOURCE",
            "TEMPERATURE",
            "EVDATE",
            "EVENT",
            "NOTES"
        );
        // output header fields
        fputcsv($document, $output_header);

        // define data fields
        $output_data = array(
            null,
            null,
            $account,
            null,
            null,
            null,
            null,
            null,
            "ryc-21",
            null,
            null,
            null,
            null,
            null,
            null,
            "SALES",
            "SALES",
            "REPCALL",
            $type,
            "6",
            $reference,
            "ryc-21",
            "2",
            "SALES",
            $priority,
            $date,
            null,
            $notes
        );

        // output data fields
        fputcsv($document, $output_data);

        // save document
        fclose($document);

    } else {

        // throw errors
        $error_message = array(
            "account" => $account,
            "type" => $type,
            "priority" => $priority,
            "reference" => $reference,
            "notes" => $notes
        );

    }

}

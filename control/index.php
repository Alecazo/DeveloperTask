<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{      
    if (isset($_POST['emailData'])) 
    {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $emailAddress = $_POST["emailAddress"];
        $telephoneNumber = $_POST["telephoneNumber"];
        $address1 = $_POST["address1"];
        $address2 = $_POST["address2"];
        $town = $_POST["town"];
        $county = $_POST["county"];
        $postCode = $_POST["postCode"];

        $country = $_POST["country"];
        $description = $_POST["description"];

        $file = $_FILES['the_file'];
        $filename = $_FILES['the_file']['name'];
        $filetype = $_FILES['the_file']['type'];

        $emailContent = "First Name: $firstName \n
Last Name: $lastName \n
Email Address: $emailAddress \n
Telephone Number: $telephoneNumber \n
Address 1: $address1 \n
Address 2: $address2 \n
Town: $town \n
County: $county \n
Postcode: $postCode \n
Country: $country \n
Description: $description \n";

        
        $emailContent = wordwrap($emailContent,70);

        mail($emailAddress,"Your C.V Submission",$emailContent);
        
    }
}

require_once("../view/index.php");
?>
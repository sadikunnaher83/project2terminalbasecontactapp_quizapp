<?php  

// Contact Management App

$contacts = [];

// Function to add a contact
function addContact(array &$contacts, string $name, string $email, string $phone) {
    $contacts[] = ["name" => $name, "email" => $email, "phone" => $phone];
}

// Function to display contacts
function displayContacts(array $contacts) {
    if (empty($contacts)) {
        echo "No contacts found\n";
    } else {
        echo "----------------------------------\n";
        foreach ($contacts as $contact) {
            echo "Name: {$contact['name']}\n";
            echo "Email: {$contact['email']}\n";
            echo "Phone: {$contact['phone']}\n";
            echo "----------------------------------\n";
        }
    }
}

// Main program
while (true) {
    echo "\nContact Management App\n";
    echo "1. Add Contact\n2. View Contacts\n3. Exit\n";

    $choice = (int)trim(fgets(STDIN)); // Safe input reading

    if ($choice === 1) {
        echo "Please Enter Your Name: ";
        $name = trim(fgets(STDIN));
        echo "Please Enter Your Email: ";
        $email = trim(fgets(STDIN)); 
        echo "Please Enter Your Phone: ";
        $phone = trim(fgets(STDIN));

        addContact($contacts, $name, $email, $phone);
        echo "$name added to contacts.\n";
    } elseif ($choice === 2) {
        displayContacts($contacts);
    } elseif ($choice === 3) {
        echo "Exiting program...\n";
        break;
    } else {
        echo "Invalid Choice. Please try again.\n";
    }
}
?>

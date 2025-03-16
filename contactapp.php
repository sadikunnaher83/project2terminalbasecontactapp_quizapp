<?php
echo "🚀🚀 Welcome to our Contact Management System 🚀🚀\n";
echo "📇 Keep your contacts organized and accessible! 🎉\n\n";

function intro()
{
    echo "📌 Please select an option:\n";
    echo "🔹 Press 1 to add a new contact\n";
    echo "🔹 Press 2 to view your contact list\n";
    echo "🔹 Press 3 to exit the system\n";
}

function takeDecision()
{
    $decision = strtolower(trim(fgets(STDIN))); // Convert input to lowercase
    return in_array($decision, ["yes", "y"]);
}

$contacts = []; // Store contacts globally

function showList()
{
    global $contacts;
    echo "\n📜 Contact List 📜\n";

    if (count($contacts) === 0) {
        echo "😢 Oops! You don't have any contacts yet. Add one to get started! ✨\n\n";
        return;
    }

    foreach ($contacts as $index => $contact) {
        echo "👤 Contact #" . ($index + 1) . "\n";
        echo "📝 Name: " . $contact['name'] . "\n";
        echo "📧 Email: " . $contact['email'] . "\n";
        echo "📞 Phone: " . $contact['phone'] . "\n";
        echo "------------------------\n";
    }
}

intro();

do {
    echo "\n🔸 Enter your choice (1, 2, or 3): ";
    $userInput = trim(fgets(STDIN));

    if (!in_array($userInput, ["1", "2", "3"])) {
        echo "❌ Invalid option! Please enter 1, 2, or 3.\n";
        continue;
    }

    if ($userInput === "1") {
        echo "📝 You are about to add a new contact. Proceed? (Yes/No)\n";

        if (takeDecision()) {
            echo "✍ Enter your name: ";
            $name = trim(fgets(STDIN));
            echo "📧 Enter your email: ";
            $email = trim(fgets(STDIN));
            echo "📞 Enter your phone: ";
            $phone = trim(fgets(STDIN));

            array_push($contacts, ["name" => $name, "email" => $email, "phone" => $phone]);

            echo "\n🎉🚀 Success! Your contact has been added. 🚀🎉\n";
            intro();
        } else {
            intro();
        }
    } elseif ($userInput === "2") {
        echo "📂 Viewing contact list. Proceed? (Yes/No)\n";

        if (takeDecision()) {
            showList();
        } else {
            intro();
        }
    } else {
        echo "⚠ Are you sure you want to exit? (Yes/No)\n";

        if (takeDecision()) {
            echo "👋 Goodbye! Have a great day! 🌟\n";
            exit;
        } else {
            intro();
        }
    }
} while (true);
?>

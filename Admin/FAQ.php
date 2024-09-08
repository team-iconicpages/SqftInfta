<?php
include './Components/dbcon.php';

session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQFTinfra | FAQ</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <?php include './Components/Slider.php' ?>

        <!-- Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <?php include './Components/Navbar.php' ?>

            <main class="flex-1 overflow-y-auto p-6">

                <!-- add FAQ code -->
                <div class="max-w-3xl mx-auto mt-8">
                    <h2 class="text-3xl font-bold mb-10">Frequently Asked Questions</h2>
                    <div class="space-y-4" id="faq-container">
                        <!-- FAQ items will be dynamically added here -->
                    </div>
                </div>

                <style>
                    .faq-answer {
                        max-height: 0;
                        overflow: hidden;
                        transition: max-height 0.5s ease-out;
                    }

                    .faq-answer.active {
                        max-height: 500px;
                        /* Adjust this value based on your content */
                    }

                    .faq-icon {
                        transition: transform 0.3s ease;
                    }

                    .faq-icon.active {
                        transform: rotate(180deg);
                    }
                </style>

                <script>
                    const faqData = [{
                            question: "What is the Lead Dashboard?",
                            answer: "The Lead Dashboard is a tool that allows you to view all your leads in one place. It provides detailed information about each lead, helping you track and manage potential customers."
                        },
                        {
                            question: "How often is the lead information updated?",
                            answer: "Lead information is updated in real-time. Any new leads added to the system will appear on the dashboard immediately"
                        },
                        {
                            question: "Can I filter or search for specific leads?",
                            answer: "Yes, you can use the search bar or apply filters to find specific leads based on criteria such as name, company, status, or date created."
                        }
                    ];

                    const faqContainer = document.getElementById('faq-container');

                    faqData.forEach((item, index) => {
                        const faqItem = document.createElement('div');
                        faqItem.className = 'border-b border-gray-200 pb-4';
                        faqItem.innerHTML = `
            <button class="flex justify-between items-center w-full text-left" onclick="toggleFaq(${index})">
                <span class="text-lg font-semibold">${item.question}</span>
                <svg class="w-5 h-5 faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="faq-answer mt-2 text-gray-600">
                <p>${item.answer}</p>
            </div>
        `;
                        faqContainer.appendChild(faqItem);
                    });

                    function toggleFaq(index) {
                        const faqAnswers = document.querySelectorAll('.faq-answer');
                        const faqIcons = document.querySelectorAll('.faq-icon');

                        faqAnswers[index].classList.toggle('active');
                        faqIcons[index].classList.toggle('active');
                    }
                </script>
            </main>

        </div>
    </div>



    <script src="./script/script.js"></script>
</body>

</html>
<?php
include './Components/dbcon.php';

// SQL query to fetch data from the contact_form table
$sql = "SELECT COUNT(*) as total FROM contact_form";
$result = $conn->query($sql);

$total = 0; // Initialize total

if ($result->num_rows > 0) {
    // Fetch total count
    $row = $result->fetch_assoc();
    $total = $row['total'];
}

// SQL query to fetch data from the referrals table
$sql = "SELECT COUNT(*) as total FROM referrals";
$result = $conn->query($sql);

$total_referral = 0; // Initialize total_referral

if ($result->num_rows > 0) {
    // Fetch total_referral count
    $row = $result->fetch_assoc();
    $total_referral = $row['total'];
}

$random_number = rand(1, 9999);
$total_visitor = 1000 + $random_number;

$conn->close();
?>

<main class="flex-1 overflow-y-auto p-6">
    <h2 class="text-4xl text-center md:text-justify font-normal text-gray-800">Namaste 🙏 <span class="bg-gradient-to-r from-purple-600 to-pink-600 text-transparent bg-clip-text font-extrabold md:font-bold">Admin</span>, </h2>
    <p class="text-sm md:text-lg mt-2 mb-5 text-center md:text-justify">Let's make your day a new beginning and great energy.</p>
    <div class="mt-3 grid grid-cols-1 md:grid-cols-3 gap-6">
        <a href="../Admin/Queries_&_Leads.php">
            <div class="bg-purple-300 p-4 rounded-lg shadow-lg border text-gray-900">
                <div class="flex justify-between">
                    <div class="">
                        <img class="w-7 h-7 mr-2" src="./assets/Icon/lead.png" alt="">
                        <h2 class="text-xl text-purple-700 font-bold">Queries/Leads</h2>
                    </div>
                    <div>
                        <h2 class="text-6xl md:text-6xl -mt-1 font-light md:font-light"><?= htmlspecialchars($total) ?></h2>
                    </div>
                </div>
            </div>
        </a>
        <a href="../Admin/Referral_Lead.php">
            <div class="bg-orange-300 p-4 rounded-lg shadow-lg border text-gray-900">
                <div class="flex justify-between">
                    <div class="">
                        <img class="w-7 h-7 mr-2" src="./assets/Icon/Refrral.png" alt="">
                        <h2 class="text-xl text-orange-700 font-bold">Referral Leads</h2>
                    </div>
                    <div>
                        <h2 class="text-6xl md:text-6xl -mt-1 font-light md:font-light"><?= htmlspecialchars($total_referral) ?></h2>
                    </div>
                </div>
            </div>
        </a>
        <div class="bg-green-300 p-4 rounded-lg shadow-lg border text-gray-900">
            <div class="flex justify-between">
                <div class="">
                    <img class="w-7 h-7 mr-2" src="./assets/Icon/webtraffic.png" alt="">
                    <h2 class="text-xl text-green-700 font-bold">Website Visitors</h2>
                </div>
                <div>
                    <h2 class="text-6xl md:text-6xl -mt-1 font-light md:font-light">
                        <?php //echo $total_visitor; 
                        ?>
                        0
                    </h2>
                </div>
            </div>
        </div>
        <!-- Additional sections can be uncommented and used as needed -->
    </div>
</main>
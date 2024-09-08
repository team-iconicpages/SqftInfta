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
    <title>SQFTinfra | Referrals</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <style>
        @media (max-width: 640px) {
            .dataTables_wrapper .dataTables_scrollBody {
                overflow-x: auto;
            }
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <?php include './Components/Slider.php' ?>

        <!-- Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <?php include './Components/Navbar.php' ?>

            <main class="flex-1 overflow-y-auto p-6">
                <p class="text-2xl font-semibold mb-4">Referrals</p>
                <div class="overflow-x-auto">
                    <table id="myTable" class="display min-w-full bg-white shadow-md rounded-lg">
                        <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <tr>
                                <th class="py-3 px-6 text-left">S.No</th>
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-left">Email</th>
                                <th class="py-3 px-6 text-left">Number</th>
                                <th class="py-3 px-6 text-left">Ref Name</th>
                                <th class="py-3 px-6 text-left">Ref Email</th>
                                <th class="py-3 px-6 text-left">Ref Number</th>
                                <th class="py-3 px-6 text-left">Ref Type</th>
                                <th class="py-3 px-6 text-left">Message</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <?php
                            // Database connection settings
                            include './Components/dbcon.php';
                            // Fetch data from database
                            $sql = "SELECT sno, name, email, number, ref_name, ref_email, ref_number, reftype, message FROM referrals ORDER BY sno DESC";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td class='py-3 px-6 text-left whitespace-nowrap'>{$row['sno']}</td>";
                                    echo "<td class='py-3 px-6 text-left whitespace-nowrap'>{$row['name']}</td>";
                                    echo "<td class='py-3 px-6 text-left whitespace-nowrap'>{$row['email']}</td>";
                                    echo "<td class='py-3 px-6 text-left whitespace-nowrap'>{$row['number']}</td>";
                                    echo "<td class='py-3 px-6 text-left whitespace-nowrap'>{$row['ref_name']}</td>";
                                    echo "<td class='py-3 px-6 text-left whitespace-nowrap'>{$row['ref_email']}</td>";
                                    echo "<td class='py-3 px-6 text-left whitespace-nowrap'>{$row['ref_number']}</td>";
                                    echo "<td class='py-3 px-6 text-left whitespace-nowrap'>{$row['reftype']}</td>";
                                    echo "<td class='py-3 px-6 text-left whitespace-nowrap'>" . implode(' ', array_slice(explode(' ', $row['message']), 0, 10)) . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='9' class='py-3 px-6 text-center'>No data available</td></tr>";
                            }
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                responsive: true
            });
        });
    </script>
    <script src="./script/script.js"></script>
</body>

</html>
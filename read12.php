<?php include('template.php'); ?>
<div class="content">
    <!-- Fixed Header (Create Button, Search Bar, and Search Button) -->
    <div style="
        position: fixed; 
        top: 0; 
        left: 200px; /* Adjust if your sidebar width is different */
        width: calc(100% - 200px); 
        background-color: white; 
        z-index: 1000; 
        padding: 10px 0; 
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <div style="width: 95%; margin: 0 auto;">
            <!-- Create Button -->
            <div style="margin-bottom: 10px;">
                <button 
                    onclick="location.href='create8.php'" 
                    style="
                        background-color: #0a6ed1; 
                        color: white; 
                        padding: 10px 20px; 
                        font-size: 1rem; 
                        border: none; 
                        border-radius: 4px; 
                        cursor: pointer; 
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    Create Order
                </button>
            </div>

            <!-- Search Bar with Search Button -->
            <div style="display: flex; gap: 10px;">
                <input 
                    type="text" 
                    id="searchInput" 
                    placeholder="Search in table..." 
                    style="
                        padding: 10px; 
                        font-size: 1rem; 
                        flex: 1; 
                        border: 1px solid #ddd; 
                        border-radius: 4px; 
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                <button 
                    id="searchButton" 
                    style="
                        background-color: #0a6ed1; 
                        color: white; 
                        padding: 10px 20px; 
                        height: 40px; 
                        font-size: 1rem; 
                        border: none; 
                        border-radius: 4px; 
                        cursor: pointer; 
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    Search
                </button>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div style="
        position: fixed; 
        top: 120px; 
        left: 200px; 
        width: calc(100% - 200px); 
        max-height: calc(100vh - 120px); 
        overflow-y: auto; 
        border: 1px solid #ddd; 
        background-color: white; 
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <table id="dataTable" class="sap-style-table" style="width: 100%; border-collapse: collapse;">
            <thead style="background-color: #f4f4f4; position: sticky; top: 0; z-index: 5;">
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Order Date</th>
                    <th>Smartphones Qty</th>
                    <th>Tablets Qty</th>
                    <th>Other Qty</th>
                    <th>Step1 Failed Qty</th>
                    <th>FRP Kiste Qty</th>
                    <th>Bootloop Qty</th>
                    <th>Keine Reaktion Qty</th>
                    <th>Step3 Failed Qty</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once('dbConn.php');

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Join order table with customer table to fetch customer_name
                $sql = "
                    SELECT o.order_id, c.customer_name, o.order_date, o.smartphones_qty, o.tablets_qty, o.other_qty, 
                           o.step1_failed_qty, o.FRP_kiste_qty, o.bootloop_qty, o.keine_reaktion_qty, 
                           o.step3_failed_qty
                    FROM `order` o
                    INNER JOIN `customer` c ON o.customer_id = c.customer_id 
                    ORDER BY o.order_date DESC
                ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>"; 
                        echo "<td><a href='viewdata1.php?order_id=" . $row['order_id'] . "'>" . $row['order_id'] . "</a></td>";
                        
                        echo "<td>" . $row['customer_name'] . "</td>"; 
                        echo "<td>" . $row['order_date'] . "</td>";
                        echo "<td>" . $row['smartphones_qty'] . "</td>";
                        echo "<td>" . $row['tablets_qty'] . "</td>";
                        echo "<td>" . $row['other_qty'] . "</td>";
                        echo "<td>" . $row['step1_failed_qty'] . "</td>";
                        echo "<td>" . $row['FRP_kiste_qty'] . "</td>";
                        echo "<td>" . $row['bootloop_qty'] . "</td>";
                        echo "<td>" . $row['keine_reaktion_qty'] . "</td>";
                        echo "<td>" . $row['step3_failed_qty'] . "</td>";
                        // Add Update button
                        echo "<td><a href='update_order1.php?order_id=" . $row['order_id'] . "' class='update-button'>Update</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='12' class='no-data'>No data found</td></tr>";
                }

                // Close the connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    // Search functionality
    document.getElementById('searchButton').addEventListener('click', function () {
        const filter = document.getElementById('searchInput').value.toLowerCase();
        const rows = document.querySelectorAll('#dataTable tbody tr');

        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(filter) ? '' : 'none';
        });
    });

    document.getElementById('searchInput').addEventListener('keyup', function (event) {
        if (event.key === "Enter") {
            document.getElementById('searchButton').click();
        }
    });
</script>

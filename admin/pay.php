<?php
include("header.php");
?>
<style>
    h2 {
        font-size: 24px;
        font-weight: bold;
        color: #333;
    }

    #payslipTitle {
        font-size: 24px;
        font-weight: bold;
        color: #007BFF; /* Change the color to your preference */
        text-align: center;
        margin: 0;
        white-space: nowrap; /* Display the title on one line */
    }

    .custom-btn {
        font-size: 14px;
        font-weight: bold;
        padding: 10px 20px;
        margin-right: 10px;
        border-radius: 5px;
    }

    .pdf-btn {
        background-color: #28a745; /* Green color for PDF button */
        color: #fff;
    }

    .print-btn {
        background-color: #007bff; /* Blue color for Print button */
        color: #fff;
    }
</style>

<div class="page-wrapper">
    <div class="content">
        <div class="row mb-0 pb-0">
            <div class="col-sm-5 col-4">
                <h4 class="page-title display-6 text-primary" id="payslipTitle"></h4>
            </div>
            <div class="col-sm-7 col-8 text-right">
                <div class="btn-group btn-group-sm">
                    <button class="btn custom-btn pdf-btn" onclick="downloadData('PDF')">Download PDF</button>
                    <button class="btn custom-btn print-btn" onclick="printPayslip()"><i class="fa fa-print fa-lg"></i> Print</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-0 pt-0">
        <div class="col-md-12 mt-0 pt-0">
            <div class="card-box">
                <div class="row">
                    <div class="col-sm-6 m-b-20">
                        <img src="assets/img/logo-dark.png" class="inv-logo" alt="">
                        <h2>Care</h2>
                    </div>
                </div>

                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $a = 1000;

                    $result = "SELECT * FROM ew_view WHERE emp_id='" . $id . "'";
                    $query = mysqli_query($conn, $result);

                    while ($row = mysqli_fetch_array($query)) {
                ?>
                        <div class="row">
                            <div class="col-lg-12 m-b-20">
                                <ul class="list-unstyled">
                                    <li>
                                        <h5 class="mb-0"><strong><?php echo "Employee Name: ".$row["emp_name"] ?></strong></h5>
                                    </li>
                                    <li><span><?php echo "Role: ".$row["worker_name"] ?></span></li>
                                    <li>Employee ID: <?php echo "#ES". $row["emp_id"] ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div>
                                    <h4 class="m-b-10"><strong>Earnings</strong></h4>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td><strong>Basic Salary</strong> <span class="float-right"><?php echo $row["worker_salary"] ?></span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Conveyance</strong> <span class="float-right"><?php echo @$a ?></span></td>
                                            </tr>
                                            <?php
                                            $total = $a - ($row["worker_salary"]);
                                            ?>
                                            <tr>
                                                <td><strong>Total Earnings</strong> <span class="float-right"><strong>RS: <?php echo @$total ?></strong></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <script>
        function getCurrentMonthYear() {
            const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            const now = new Date();
            const month = months[now.getMonth()];
            const year = now.getFullYear();
            return `${month} ${year}`;
        }

        function updatePayslipTitle() {
            document.getElementById('payslipTitle').innerText = `Payslip for the month of ${getCurrentMonthYear()}`;
        }

        function downloadData(format) {
            window.location.href = 'generate_pdf.php';
        }

        function printPayslip() {
            window.print();
        }

        updatePayslipTitle();
    </script>
    <?php
    include("footer.php");
    ?>

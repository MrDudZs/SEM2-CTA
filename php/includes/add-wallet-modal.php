<button type="button" class="add-btn" data-bs-toggle="modal" data-bs-target="#myModal">
    <img src="https://s2.svgbox.net/hero-solid.svg?color=white&ic=plus-circle" style="width: 30px">
</button>

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">ADD WALLET</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="php/processes/add-wallet-process.php" method="post">
                <div class="modal-body">
                    <label for="new-currency">Select Currency:<span style="color: red;">*</span></label>
                    <select name="currency">
                        <?php
                        // Get currencys from the database
                        $sql = "SELECT currency_id, currency_name FROM currency";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {    // Check avalible currencys
                            // Output options
                            while ($row = $result->fetch_assoc()) {
                                $currency_id = $row['currency_id'];
                                $currency_name = $row['currency_name'];
                                echo "<option value=\"$currency_id\">$currency_name</option>";
                            }
                        } else {
                            echo "<option value=\"\">No currencies available</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                    <input type="submit" value="CREATE" class="btn btn-primary" onclick="createWallet()">
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .modal-content {
        background-color: #212121;
        color: #fff;
    }
</style>
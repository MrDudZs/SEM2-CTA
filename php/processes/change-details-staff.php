<button type="button" class="add-btn" data-bs-toggle="modal" data-bs-target="#addFunds">
    <img src="https://s2.svgbox.net/hero-solid.svg?color=white&ic=plus-circle" style="width: 30px">
</button>

<div class="modal fade" id="addFunds" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Add Funds</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addFundsForm" method="post" action="php/processes/add-funds.php">
                    <label for="to-currency">Select Currency:</label>
                    <select id="to-currency" name="currency">
                        <?php foreach ($currencies as $wallet_id => $currency): ?>
                            <option value="<?php echo $wallet_id ?>"><?php echo $currency ?></option>
                        <?php endforeach; ?>
                    </select>
                    <br>
                    <label for="input-amount">Enter Amount:</label>
                    <input type="number" id="input-amount" name="funds" placeholder="" required>
                    <br>
                    <br>
                    <input type="hidden" name="toCurrency" value="" id="toCurrencyHidden">
                    <input type="hidden" name="transferAmount" value="" id="transferAmountHidden">
                    <label for="name" class="label">
                        <span class="title">Card holder full name</span><br>
                        <input class="input-field" type="text" name="name" title="Input title"
                            placeholder="Name on Card" required />
                    </label>
                    <label for="serialCardNumber" class="label">
                        <span class="title">Card Number</span><br>
                        <input id="serialCardNumber" class="input-field" type="number" name="number" title="Input title"
                            placeholder="0000 0000 0000 0000" required/>
                    </label>
                    <div class="split">
                        <label for="ExDate" class="label">
                            <span class="title">Expiry Date</span><br>
                            <input id="ExDate" class="input-field" type="text" name="expiry" title="Expiry Date"
                                placeholder="01/23" required/>
                        </label>
                        <label for="cvv" class="label">
                            <span class="title"> CVV</span> <br>
                            <input id="cvv" class="input-field" type="number" name="cvv" title="CVV"
                                placeholder="CVV" required/>
                        </label>
                    </div>
                    <input class="checkout-btn" type="submit" value="Add Funds" />

                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit" form="addFundsForm">Cancel</button>
            </div>
        </div>
    </div>
</div>

<style>
    .modal-content {
        background-color: #212121;
        color: #fff;
    }
</style>
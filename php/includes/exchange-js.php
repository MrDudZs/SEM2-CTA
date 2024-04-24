<script>
    window.onload = function () {
        var fromSelect = document.getElementById("from-currency");
        var toSelect = document.getElementById("to-currency");

        <?php
        // Output PHP array as JavaScript array
        echo "var currencies = " . json_encode($currencies) . ";";

        // Populate select options
        foreach ($currencies as $currency) {
            echo "var option = document.createElement('option');";
            echo "option.value = '{$currency}';";
            echo "option.text = '{$currency}';";
            echo "fromSelect.appendChild(option.cloneNode(true));";
            echo "toSelect.appendChild(option.cloneNode(true));";
        }
        ?>
    };
</script>
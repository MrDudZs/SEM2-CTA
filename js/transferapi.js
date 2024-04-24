
function checkInput() { // Deny anything but numbers and decimal points within exchange.php
    var userInput = document.forms["converter"]["Finput"].value;
    var regex = /^[0-9]+$/;
    if (userInput.match(regex)) {
        alert("Must input numbers");
        return false;
    }
}

// Get input element
const inputAmount = document.getElementById('input-amount');
// Get upload section
const uploadSection = document.getElementById('upload-section');
// Get transfer input
const transferBtn = document.getElementById('transfer-btn');

inputAmount.addEventListener('input', function () {
    const amount = parseFloat(this.value);

    if (amount >= 50.00) {
        // Show upload section if amount is greater than or equal to 2500.00
        uploadSection.style.display = amount >= 2500.00 ? 'block' : 'none';
        // Show transfer btn if ammount is greater than or equeal to 50.00 or less than 1 million
        transferBtn.style.display = amount >= 50.00 && amount <= 1000000.00 ? 'block' : 'none';
    } else {
        // Hide upload section if amount is less than 50.00
        uploadSection.style.display = 'none';
        transferBtn.style.display = 'none';
    }
});

// Validting fields are not empty
function validateInput() {
    const inputElement = document.getElementById('input-amount');
    const inputValue = inputElement.value.trim();

    if (inputValue === '') {
        alert('Input field is empty! Please enter something.');
    } else {
        console.log('Input is not empty:', inputValue);
    }
}


document.getElementById("convert-btn").addEventListener("click", function () {
    const amount = document.getElementById("input-amount").value;
    const fromCurrency = document.getElementById("from-currency").value;
    const toCurrency = document.getElementById("to-currency").value;

    if (fromCurrency === toCurrency) {
        alert("Please select different wallets for transfer.");
        return;
    }

    const apiKey = '3d13fb7c1ae2c7175ca8d47a';

    fetch(`https://v6.exchangerate-api.com/v6/${apiKey}/latest/${fromCurrency}`)
        .then(response => response.json())
        .then(data => {
            const exchangeRate = data.conversion_rates[toCurrency];
            const convertedAmount = (amount * exchangeRate).toFixed(2);
            var resultInput = document.getElementById("result");
            resultInput.value = `${convertedAmount}`;
        })
        .catch(error => console.log('Error:', error));
});


// https://stackoverflow.com/questions/3937513/javascript-validation-for-empty-input-field
// https://stackoverflow.com/questions/18824304/check-if-input-value-is-empty-and-display-an-alert


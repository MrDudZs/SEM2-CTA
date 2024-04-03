function checkInput() { // Deny anything but numbers and decimal points within exchange.php
    var userInput = document.forms["converter"]["Finput"].value;
    var regex = /^[0-9]+$/;
    if (userInput.match(regex)) {
        alert("Must input numbers");
        return false;
    }
}

// Validting fields are not empty
function validateInput() {
    const inputElement = document.getElementById('input-amount');
    const inputValue = inputElement.value.trim(); // Remove leading/trailing spaces

    if (inputValue === '') {
        alert('Input field is empty! Please enter something.');
    } else {
        console.log('Input is not empty:', inputValue);
        // You can perform other actions here if needed
    }
}


document.getElementById("convert-btn").addEventListener("click", function () {
    const amount = document.getElementById("input-amount").value;
    const fromCurrency = document.getElementById("from-currency").value;
    const toCurrency = document.getElementById("to-currency").value;

    const apiKey = '';

    fetch(`https://v6.exchangerate-api.com/v6/${apiKey}/latest/${fromCurrency}`)
        .then(response => response.json())
        .then(data => {
            const exchangeRate = data.conversion_rates[toCurrency];
            const convertedAmount = (amount * exchangeRate).toFixed(2);
            document.getElementById("result").innerHTML = `${convertedAmount} ${toCurrency}`;
        })
        .catch(error => console.log('Error:', error));
});


// https://stackoverflow.com/questions/3937513/javascript-validation-for-empty-input-field
// https://stackoverflow.com/questions/18824304/check-if-input-value-is-empty-and-display-an-alert


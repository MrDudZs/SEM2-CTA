function pageRefresh(){
    var lastRefreshElement = document.getElementById("last-refresh");
    var now = new Date();
    var hours = now.getHours().toString().padStart(2, "0");
    var minutes = now.getMinutes().toString().padStart(2, "0");
    var seconds = now.getSeconds().toString().padStart(2, "0");
    lastRefreshElement.innerHTML = "Last refreshed: <br> " + hours + ":" + minutes + ":" + seconds;
}

// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/getHours
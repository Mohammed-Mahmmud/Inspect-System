function updateConnectionStatus() {
    const statusElement = document.getElementById("connectionStatus");
    const syncButton = document.getElementById("syncButton");

    if (navigator.onLine) {
        statusElement.textContent = "You are online!";
        statusElement.classList.add("online");
        statusElement.classList.remove("offline");
        syncButton.style.display = "block"; // Show the button
    } else {
        statusElement.textContent = "You are offline!";
        statusElement.classList.add("offline");
        statusElement.classList.remove("online");
        syncButton.style.display = "none"; // Hide the button
    }
}

// Check the connection status when the page loads
window.addEventListener("load", updateConnectionStatus);

// Listen for online and offline events
window.addEventListener("online", updateConnectionStatus);
window.addEventListener("offline", updateConnectionStatus);

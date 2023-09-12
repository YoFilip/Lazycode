function copyC(sourceId, targetId) {
    var sourceElement = document.getElementById(sourceId);
    var targetElement = document.getElementById(targetId);

    var selection = getSelection();
    var range = document.createRange();

    selection.removeAllRanges();
    range.selectNodeContents(targetElement);

    selection.addRange(range);
    document.execCommand("copy");

    selection.removeAllRanges();
    sourceElement.classList.add("copied");

    var toastNotification = document.getElementById("toastNotif");
    toastNotification.innerHTML = "<span>Copied to Clipboard!</span>";

    setTimeout(() => {
        sourceElement.classList.remove("copied");
    }, 3000);
}
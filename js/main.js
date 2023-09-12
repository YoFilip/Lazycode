var commands = [];
let pw = false;
var tutorialStarted = false;
var airodumpStarted = false;
var validBSSIDs = ["05:8E:AF:DC:C0:55", "1A:2B:3C:4D:5E:6F", "F0:0C:16:E9:03:05", "12:34:56:78:90:AB", "CD:EF:01:23:45:67", "89:AB:CD:EF:01:23", "EF:01:23:45:67:89", "45:67:89:AB:CD:EF", "23:45:67:89:AB:CD", "90:AB:CD:EF:01:23", "AB:CD:EF:01:23:45", "CD:EF:01:23:45:67", "56:78:90:AB:CD:EF", "78:90:AB:CD:EF:01"];
var commandHistory = [];
var lastUsedBSSID = "";
var historyIndex = -1;
var generatedPassword = "";
let passwordInputMode = false;
let passwordEntered = "";

setTimeout(() => {
    loopLines(home, "", 80);
    document.getElementById("texter").focus();
}, 100);

window.addEventListener("keyup", enterKey);

function enterKey(e) {
    if (e.keyCode == 13 && !e.shiftKey) {
        e.preventDefault();
        let cmd = document.getElementById("typer").innerHTML;
        if (passwordInputMode) {
            passwordEntered = cmd;
        }
        if (e.keyCode == 13 && !e.shiftKey) {
            e.preventDefault();
            let cmd = document.getElementById("typer").innerHTML.toLowerCase();
            commandHistory.push(cmd);
            historyIndex = commandHistory.length;
            commander(cmd);
            clearCommandInput();
        } else if (e.keyCode == 38) {
            if (historyIndex > 0) {
                historyIndex--;
                document.getElementById("typer").innerHTML = commandHistory[historyIndex];
            }
        } else if (e.keyCode == 40) {
            if (historyIndex < commandHistory.length - 1) {
                historyIndex++;
                document.getElementById("typer").innerHTML = commandHistory[historyIndex];
            }
        }
    }
}

function clearCommandInput() {
    document.getElementById("texter").value = "";
    document.getElementById("typer").innerHTML = "";
}

function generateRandomString(length) {
    const charset = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    let result = "";
    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * charset.length);
        result += charset[randomIndex];
    }
    return result;
}

function generateRandomHex(length) {
    const charset = "ABCDEF0123456789";
    let result = "";
    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * charset.length);
        result += charset[randomIndex];
    }
    return result;
}

function formatHexKey(key) {
    return key.match(/.{1,2}/g).join(" ");
}


function commander(cmd) {
    if (passwordInputMode) {
        passwordInputMode = false;
        console.log('Wprowadzone hasło:', passwordEntered);
        console.log('Wygenerowane hasło:', generatedPassword);
        if (passwordEntered === generatedPassword) {
            loopLines(secretls, "", 80);
        } else {
            addLine("Niepoprawne hasło.", "error", 100);
        }

        return;
    }
    let lowerCmd = cmd.toLowerCase();
    switch (lowerCmd) {
        case "help":
            loopLines(help, "color2 margin", 80);
            break;
        case "projects":
            loopLines(projects, "color2 margin", 80);
            break;
        case "history":
            addLine("<br>", "", 0);
            loopLines(commandHistory, "color2", 80);
            addLine("<br>", "command", 80 * commandHistory.length + 50);
            break;
        case "clear":
            setTimeout(function() {
                document.getElementById("terminal").innerHTML = '<a id="before"></a>';
                before = document.getElementById("before");
            }, 1);
            break;
        case "home":
            loopLines(home, "", 80);
            break;
        case "ls":
            loopLines(ls, "", 80);
            break;
        case "cat tutorial.txt":
            tutorialStarted = true;
            loopLines(cat_tutorial, "", 80);
            break;
        case "y":
            if (tutorialStarted) {
                addLine('<br><span class="index">OK, to teraz wpisz komendę "airodump", która pozwoli na wyświetlenie dostępnych sieci.</span>', "", 80);
                airodumpStarted = true;
            }
            break;
        case "n":
            if (tutorialStarted) {
                addLine('<br><span class="index">Jeżeli nie chcesz mieć dostępu do gotowego kodu do zadań profesorów to twoja strata.</span>', "", 80);
            }
            break;
        case "airodump":
            let randomNetwork = Math.floor(Math.random() * 5) + 1;
            let networkArray = window["networks" + randomNetwork];
            loopLines(networkArray, "", 80);
            break;
        case "aircrack":
            break;
        case "password":
            addLine("<br>Wpisz hasło:", "", 100);
            passwordInputMode = true;
            break;
        default:
            if (lowerCmd.startsWith("aireplay")) {
                let selectedBSSID = cmd.split(" ")[1].toUpperCase();
                if (validBSSIDs.includes(selectedBSSID)) {
                    lastUsedBSSID = selectedBSSID;
                    console.log("Ustawiam lastUsedBSSID na: " + selectedBSSID); // Debug
                    for (let i = 0; i <= 9; i++) {
                        setTimeout(() => {
                            addLine(`Sending DeAuth to broadcast -- BSSID: [${selectedBSSID}]`, "", i * 1000);
                        }, i * 1000);
                    }
                    setTimeout(() => {
                        addLine(`Success: file "${selectedBSSID}.handshake" saved in your handshake folder`, "", 12000);
                        addLine(`Teraz wpisz aircrack + "BSSID.handshake" np. "90:AB:CD:EF:01:23.handshake"`, "", 12000);
                    }, 12000);
                } else {
                    addLine('<span class="inherit">Nieprawidłowy BSSID. Upewnij się, że wpisałeś poprawny BSSID.</span>', "error", 100);
                }
            } else if (lowerCmd.startsWith("aircrack")) {
                console.log("Sprawdzam lastUsedBSSID, które wynosi: " + lastUsedBSSID); // Debug
                const handshakeFile = cmd.split(" ")[1];
                if (handshakeFile.endsWith(".handshake")) {
                    if (lastUsedBSSID === "") {
                        addLine("Musisz najpierw użyć komendy 'aireplay' z poprawnym BSSID.", "error", 100);
                    } else if (handshakeFile.toLowerCase().trim() === `${lastUsedBSSID.toLowerCase().trim()}.handshake`) {
                        let keysTested = 0;
                        const maxKeys = 20000;
                        const increment = 720;

                        addLine("<br>", "", 0);
                        addLine('<span class="networks center-text">Aircrack</span>', "", 0);
                        addLine('<span id="keysTested" class="color2 center-text"></span>', "", 0);
                        addLine('<span id="generatedPassword" class="command center-text"></span>', "", 0);
                        addLine('<span id="masterKey" class="color2 key-section"></span>', "", 0);
                        addLine('<span id="transientKey" class="color2 key-section"></span>', "", 0);
                        addLine('<span id="eapolHmac" class="color2 key-section"></span>', "", 0);


                        const interval = setInterval(() => {
                            keysTested += increment;
                            if (keysTested > maxKeys) keysTested = maxKeys;

                            generatedPassword = generateRandomString(10);
                            const masterKey = formatHexKey(generateRandomHex(32));
                            const transientKey = formatHexKey(generateRandomHex(32));
                            const eapolHmac = formatHexKey(generateRandomHex(32));

                            document.getElementById("keysTested").innerHTML = `${keysTested} keys tested (720 k/s)`;
                            document.getElementById("generatedPassword").innerHTML = `KEY FOUND! [ ${generatedPassword} ]`;
                            document.getElementById("masterKey").innerHTML = `Master Key :  ${masterKey}`;
                            document.getElementById("transientKey").innerHTML = `Transient Key:  ${transientKey}`;
                            document.getElementById("eapolHmac").innerHTML = `EAPOL HMAC:  ${eapolHmac}`;
                        }, 1000);

                        setTimeout(() => {
                            clearInterval(interval);
                            passwordEntered = generatedPassword;
                            console.log(generatedPassword);
                        }, (maxKeys / increment) * 1000);
                        setTimeout(() => {
                            addLine("<br>Wpisz komendę 'password' a potem złamane hasło aby włamać się do sieci i przechwycić biblioteki");
                        }, 27000);
                    } else {

                        addLine("Musisz użyć tego samego BSSID, którego użyłeś w komendzie 'aireplay'.", "error", 100);
                    }
                } else {
                    addLine("<br><span class=\"inherit\">Nie znaleziono polecenia. Aby wyświetlić listę poleceń, wpisz <span class=\"command\">'help'</span></span>", "error", 100);
                }
            }
            break;
    }
}

function newTab(link) {
    setTimeout(function() {
        window.open(link, "_blank");
    }, 500);
}

function addLine(text, style, time) {
    setTimeout(function() {
        if (Array.isArray(text)) {
            text.forEach((line) => {
                var next = document.createElement("p");
                next.innerHTML = line;
                next.className = style;
                before.parentNode.insertBefore(next, before);
            });
        } else {
            var next = document.createElement("p");
            next.innerHTML = text;
            next.className = style;
            before.parentNode.insertBefore(next, before);
        }
        window.scrollTo(0, document.body.offsetHeight);
    }, time);
}

function loopLines(name, style, time) {
    name.forEach(function(item, index) {
        addLine(item, style, index * time);
    });
}

function $(elid) {
    return document.getElementById(elid);
}

var cursor;
window.onload = init;

function init() {
    cursor = $("cursor");
    cursor.style.left = "-7px";
}

function nl2br(txt) {
    return txt.replace(/\n/g, '');
}

function typeIt(from, e) {
    e = e || window.event;
    var w = $("typer");
    var tw = from.value;
    if (!pw) {
        w.innerHTML = nl2br(tw);
    }
}

function moveIt(count, e) {
    e = e || window.event;
    var keycode = e.keyCode || e.which;
    if (keycode == 37 && parseInt(cursor.style.left) >= (0 - ((count - 1) * 10))) {
        cursor.style.left = parseInt(cursor.style.left) - 10 + "px";
    } else if (keycode == 39 && (parseInt(cursor.style.left) + 10) <= 0) {
        cursor.style.left = parseInt(cursor.style.left) + 10 + "px";
    }
}

function alert(txt) {
    console.log(txt);
}
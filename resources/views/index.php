<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
  <title>My LIFF app</title>
  <link rel="stylesheet" href="css/style.css" media="all">
</head>
<body>
  <p id="os"><b>OS:</b> </p>
  <p id="language"><b>Language:</b> </p>
  <p id="version"><b>Version:</b> </p>
  <p id="isInClient"><b>isInClient:</b> </p>
  <p id="accessToken"><b>AccessToken:</b> </p>
  <img id="pictureUrl">
  <p id="userId"><b>userId:</b> </p>
  <p id="displayName"><b>displayName:</b> </p>
  <p id="decodedIDToken"><b>email:</b> </p>
  <p id="type"><b>type:</b> </p>
  <p id="viewType"><b>viewType:</b> </p>
  <p id="utouId"><b>utouId:</b> </p>
  <p id="roomId"><b>roomId:</b> </p>
  <p id="groupId"><b>groupId:</b> </p>
  <p id="friendship"><b>isFriendship:</b> </p>
  <p id="scanCode"><b>Code:</b> </p>
  <p id="isLoggedIn"><b>isLoggedIn:</b> </p>
  <p id="universalLink1"><b>Universal Link:</b> </p>
  <p id="universalLink2"><b>Universal Link with Query params:</b> </p>
  <p><a href="liff/path/?param=9">Link to Path</a></p>

  <button id="btnMsg" onclick="sendMsg()">Send Message</button>
  <button id="btnShare" onclick="shareMsg()">Share Target Picker</button>
  <button onclick="openWindow()">Open Window</button>
  <button id="btnScanCode" onclick="scanCode()">Scan Code</button>
  <button id="btnLogOut" onclick="logOut()">Log Out</button>
  <button id="btnClose" onclick="closed()">Close</button>

  <!-- <script src="js/vconsole.min.js"></script> -->
  <!-- <script>
    var vConsole = new VConsole()
    console.log("Hello World!")
  </script> -->

  <!-- <script src="https://static.line-scdn.net/liff/edge/versions/2.1.13/sdk.js"></script> -->
  <script>
    function createUniversalLink() {
    }

    async function shareMsg() {
    }

    function logOut() {
    }

    function closed() {
    }

    async function scanCode() {
    }

    function openWindow() {
    }

    async function getFriendship() {
    }

    async function sendMsg() {
    }

    function getContext() {
    }

    async function getUserProfile() {
    }

    function getEnvironment() {
    }

    async function main() {
      alert("LINE Developers x Skooldio")
      await liff.init({ liffId: "YOUR-LIFF-ID" })
      // getEnvironment()
      // getUserProfile()
      // getContext()
      // getFriendship()
      // createUniversalLink()
    }
    main()
  </script>
</body>
</html>


<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
  <title>My LIFF App</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <script src="https://static.line-scdn.net/liff/edge/versions/2.1.13/sdk.js"></script>
  <script>

    function logOut() {
      liff.logout()
      window.location.reload()
    }

    function closed() {
      liff.closeWindow()
    }
    
    function openWindow() {
      liff.openWindow({
        url: "https://line.me",
        external: true
      })
    }

     function main() {
      liff.ready.then(() => {
        const profile = await liff.getProfile()
        document.getElementById("isLoggedIn").append(liff.isLoggedIn())
        var json = {"userId": profile.userId,
                    "displayName":profile.displayName,
                    "decodedIDToken":liff.getDecodedIDToken().email,
                    "utouId":liff.getContext().utouId,
                    "accessToken":liff.getAccessToken()
                    }
        if (liff.isLoggedIn()) {
            $.ajax({
            type: "POST",
            url: "/senddata",
            data: json,
            dataType: "json",
            success:function(data) {
                 alert("success")
        } 
});
        } else {
          liff.login()
        }
      })
      await liff.init({ liffId: "1654272826-Og8LnyZ6" })
    }
    main()
  </script>
</body>
</html>

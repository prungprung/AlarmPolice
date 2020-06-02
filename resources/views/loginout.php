<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
    <title>Alarm-Police</title>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://static.line-scdn.net/liff/edge/versions/2.1.13/sdk.js"></script>
    <script>
        function logOut() {
            liff.logout()
            window.location.reload()
        }

        function closed() {
            liff.closeWindow()
        }
        var userid;
        var displayName;
        var decodedIDToken;
        var utouId;
        var accessToken;
        async function getvalue() {
                const profile = await liff.getProfile()

                var json = {
                    "status": "nonlogin",
                    "userId": profile.userId,
                    "displayName": profile.displayName,
                    "accessToken": liff.getAccessToken()
                }
                console.log(json);
                $.ajax({
                    type: "GET",
                    url: "/listData",
                    data: {
                        'data': json
                    },
                    dataType: "json",
                    success: function(data) {
                        console.log("success")
                    },
                    fail: function(data) {
                        console.log("error")
                    },
                });
                closed();
        }
        async function main() {
            liff.ready.then(() => {
                if (liff.isLoggedIn()) {
                    getvalue();
                } else {
                    
                    if (liff.isLoggedIn()) {}
                }
            })
            await liff.init({
                liffId: "1654272826-aG6Wkoq8"
            })
        }
        main()
    </script>
</body>

</html>
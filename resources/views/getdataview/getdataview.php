<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
    <title>My LIFF App</title>
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

        function openWindow() {
            liff.openWindow({
                url: "https://line.me",
                external: true
            })
        }
        var userid;
        var displayName;
        var decodedIDToken;
        var utouId;
        var accessToken;
        async function getdata() {
            const profile = await liff.getProfile()
            
            var json = {
                "userId": profile.userId,
                "displayName": profile.displayName,
                "accessToken": liff.getAccessToken()
            }
            $.ajax({
                type: "GET",
                url: "/senddata",
                data: {
                    'data': json
                },
                dataType: "json",
                success: function(data) {
                    alert("success")
                }
            });
        }
        async function main() {
            liff.ready.then(() => {
                if (liff.isLoggedIn()) {
                    getdata();
                } else {
                    liff.login()
                }
            })
            await liff.init({
                liffId: "1654272826-Og8LnyZ6"
            })
        }
        main()
    </script>
</body>

</html>
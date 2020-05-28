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
            userid = profile.userId;
            displayName = profile.displayName;
            utouId = liff.getContext().utouId;
            accessToken = liff.getAccessToken();
            console.log(userid);
            console.log(displayName);
            console.log(utouId);
            console.log(accessToken);
            var json = {
                    "userId": profile.userId,
                    "displayName": liff.getContext().utouId,
                    "utouId": liff.getContext().utouId,
                    "accessToken": liff.getAccessToken()
                }
                console.log(json);
        }
        async function main() {
            liff.ready.then(() => {
                getdata();
                if (liff.isLoggedIn()) {
                    
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
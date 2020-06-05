<button type="button" onclick="window.location='{{ url("/sendflex") }}'">sendFlex</button>
<button type="button" onclick="window.location='{{ url("/sendnotify") }}'">sendNotify</button>
<button type="button" onclick="window.location='{{ url("/sendText") }}'">sendText</button>
<button type="button" onclick="logout()">sendRichMenuNonLogin</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://static.line-scdn.net/liff/edge/versions/2.1.13/sdk.js"></script>
    <script>
         function logout() {
            var json = {
                "status": "nonlogin",
                "userId": "",
                "displayName": "",
                "accessToken": ""
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
        }
    </script>
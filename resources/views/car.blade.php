<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
    <title>My LIFF App</title>
</head>
<style>
    table
    {       
         border: 1px solid black;
        width: 100%;
    }
    tr,td,th{
        text-align: center;
        border: 1px solid black;
        width: 33%;
    }
</style>
<body>
<img src="http://intense-scrubland-71413.herokuapp.com/public/image/linerichmenu_1_.jpeg" alt="Trulli" width="150" height="150">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://static.line-scdn.net/liff/edge/versions/2.1.13/sdk.js"></script>
    <script>
        async function main() {
            await liff.init({
                liffId: "1654272826-Rw6k9XEd"
            })
        }
        main()
    </script>
</body>

</html>
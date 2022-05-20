<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user name</title>

</head>

<body>
    Enter user name:
    <input type="text" id="user" onkeyup="verify();"><span id="sp" style="color:white;">*</span>
    <script>
        function verify() {
            let user = document.getElementById('user').value;
           
            if(user.length<2)
            {
                document.getElementById('sp').style.color = 'red';
                document.getElementById('sp').innerHTML = `Stranger! I don't know you`;
            }
            else if (user === 'Rohit' || user === ' Virat' || user === 'Dhoni' || user === 'Ashwin' || user === 'Harbajan' || user === 'naeem') {
                document.getElementById('sp').style.color = 'green';
                document.getElementById('sp').innerHTML = `Hello! master ${user}`;
            }
            else if(user !== 'Rohit' || user !== ' Virat' || user !== 'Dhoni' || user !== 'Ashwin' || user !== 'Harbajan' || user !== 'naeem') {
                document.getElementById('sp').style.color = 'red';
                document.getElementById('sp').innerHTML = `${user}! I don't know you`;
            }
        }
    </script>
</body>

</html>
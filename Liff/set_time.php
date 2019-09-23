<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIFF Starter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <script>
        window.onload = function(e) {
            liff.init(function(data) {
                initializeApp(data);
            });
        };

        function initializeApp(data) {
            document.getElementById('languagefield').textContent = data.language;
            document.getElementById('viewtypefield').textContent = data.context.viewType;
            document.getElementById('useridfield').textContent = data.context.userId;
            document.getElementById('utouidfield').textContent = data.context.utouId;
            document.getElementById('roomidfield').textContent = data.context.roomId;
            document.getElementById('groupidfield').textContent = data.context.groupId;

            // openWindow call
            document.getElementById('openwindowbutton').addEventListener('click', function() {
                liff.openWindow({
                    url: 'https://line.me'
                });
            });

            // closeWindow call
            document.getElementById('closewindowbutton').addEventListener('click', function() {
                liff.closeWindow();
            });

            // sendMessages call
            document.getElementById('sendmessagebutton').addEventListener('click', function() {
                liff.sendMessages([{
                    type: 'text',
                    text: "You've successfully sent a message! Hooray!"
                }, {
                    type: 'sticker',
                    packageId: '2',
                    stickerId: '144'
                }]).then(function() {
                    window.alert("Message sent");
                }).catch(function(error) {
                    window.alert("Error sending message: " + error);
                });
            });

            // get access token
            document.getElementById('getaccesstoken').addEventListener('click', function() {
                const accessToken = liff.getAccessToken();
                document.getElementById('accesstokenfield').textContent = accessToken;
                toggleAccessToken();
            });

            // get profile call
            document.getElementById('getprofilebutton').addEventListener('click', function() {
                liff.getProfile().then(function(profile) {
                    document.getElementById('useridprofilefield').textContent = profile.userId;
                    document.getElementById('displaynamefield').textContent = profile.displayName;

                    const profilePictureDiv = document.getElementById('profilepicturediv');
                    if (profilePictureDiv.firstElementChild) {
                        profilePictureDiv.removeChild(profilePictureDiv.firstElementChild);
                    }
                    const img = document.createElement('img');
                    img.src = profile.pictureUrl;
                    img.alt = "Profile Picture";
                    profilePictureDiv.appendChild(img);

                    document.getElementById('statusmessagefield').textContent = profile.statusMessage;
                    toggleProfileData();
                }).catch(function(error) {
                    window.alert("Error getting profile: " + error);
                });
            });
        }

        function toggleAccessToken() {
            toggleElement('accesstokendata');
        }

        function toggleProfileData() {
            toggleElement('profileinfo');
        }

        function toggleElement(elementId) {
            const elem = document.getElementById(elementId);
            if (elem.offsetWidth > 0 && elem.offsetHeight > 0) {
                elem.style.display = "none";
            } else {
                elem.style.display = "block";
            }
        }
    </script>

<div class="buttongroup">
        <div class="buttonrow">
            <button id="openwindowbutton">Open Window</button>
            <button id="closewindowbutton">บันทึก</button>
        </div>
        <div class="buttonrow">
            <button id="getaccesstoken">Get Access Token</button>
            <button id="getprofilebutton">Get Profile</button>
            <button id="sendmessagebutton">Send Message</button>
        </div>
    </div>
 
    <div id="accesstokendata">
        <h2>Access Token</h2>
        <a href="#" onclick="toggleAccessToken()">Close Access Token</a>
        <table border="1">
            <tr>
                <th>accessToken</th>
                <td id="accesstokenfield"></td>
            </tr>
        </table>
    </div>
 
    <div id="profileinfo">
        <h2>Profile</h2>
        <a href="#" onclick="toggleProfileData()">Close Profile</a>
        <div id="profilepicturediv">
        </div>
        <table border="1">
            <tr>
                <th>userId</th>
                <td id="useridprofilefield"></td>
            </tr>
            <tr>
                <th>displayName</th>
                <td id="displaynamefield"></td>
            </tr>
            <tr>
                <th>statusMessage</th>
                <td id="statusmessagefield"></td>
            </tr>
        </table>
    </div>
 
    <div id="liffdata">
        <h2>LIFF Data</h2>
        <table border="1">
            <tr>
                <th>language</th>
                <td id="languagefield"></td>
            </tr>
            <tr>
                <th>context.viewType</th>
                <td id="viewtypefield"></td>
            </tr>
            <tr>
                <th>context.userId</th>
                <td id="useridfield"></td>
            </tr>
            <tr>
                <th>context.utouId</th>
                <td id="utouidfield"></td>
            </tr>
            <tr>
                <th>context.roomId</th>
                <td id="roomidfield"></td>
            </tr>
            <tr>
                <th>context.groupId</th>
                <td id="groupidfield"></td>
            </tr>
        </table>
    </div>



    <script src="https://d.line-scdn.net/liff/1.0/sdk.js"></script>
    <!--<script src="liff-starter.js"></script>-->
</body>

<!--

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

    <title>ตั้งเวลาหลอดไฟ</title>
</head>

<body>
    <h1 class="Display-4">กรอกเวลาที่ต้องการ</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm">

                <?php /* $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => 'https://api.anto.io/channel/get/DL32Cs80BDqJwgimtX5oBIDTMOlAt8VUBPGElAA4/R_H_A_S/living_lamp_time_on', CURLOPT_USERAGENT => 'Codular Sample cURL Request'
                ));
                $resp = curl_exec($curl);
                curl_close($curl);
                $val = explode('"', $resp);
                $st_ton = $val[7]; 

                ?>

                เวลาเปิดที่ตั้งไว้ <?php /* echo $st_ton; ?> น.


                <button id="closewindowbutton">Close</button>
                <button type="button" id="closewindowbutton" >บันทึกเวลา</button>

            </div>
            <div class="col-sm"></div>
        </div>
    </div>
    <script src="https://d.line-scdn.net/liff/1.0/sdk.js"></script>
    <script src="/liff-starter.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>-->

</html>



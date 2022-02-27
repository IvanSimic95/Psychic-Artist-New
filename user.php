<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TalkJS User-to-Operator</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container" style="max-width: 800px height:1600px;">
        <div class="row">
            <h1>TalkJS User-to-Operator Example</h1>
            <h2>In-app user view</h2>
            <p>Let's assume this is one of the pages in your app, where a user can configure an item or product.</p>
            <p style="font-size: 75%">Note: Before this example will work, you will have to enter your TalkJS credentials in the source.</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>Item 2493</h3>
                <p>Here, there might be some item, order or product that the user is configuring.</p>
                <p>To the right, there is a chatbox where the user can discuss the item, order or product with an operator.</p>
            </div>
            <div style="height:800px;" class="col-md-6" id="talkjs-container">
            </div>
        </div>
    </div>
    <script>
        (function(t,a,l,k,j,s){
        s=a.createElement('script');s.async=1;s.src="https://cdn.talkjs.com/talk.js";a.head.appendChild(s)
        ;k=t.Promise;t.Talk={v:3,ready:{then:function(f){if(k)return new k(function(r,e){l.push([f,r,e])});l
        .push([f])},catch:function(){return k&&new k()},c:l}};})(window,document,[]);
    </script>
    <script>
        Talk.ready.then(function() {

            // The core TalkJS lib has loaded, so let's identify the current user to TalkJS.
            
            // TODO: replace the fields below with actual user data.
            var me = new Talk.User({
        id: 'PA21213123213132213',
        role: 'PAcustomer',
        name: 'Ivan',
        email: 'test.simic2903@gmail.com',
        photoUrl: 'https://avatars.dicebear.com/api/adventurer/test.simic2903@gmail.com.svg',
        custom: { email: 'test.simic2903@gmail.com' }
            });
            // TODO: add a "role" field to the user object so your
            // user can get email notifications.
            // See https://talkjs.com/docs/Features/Notifications/Email_Notifications/index.html for more 
            // info.

            // TODO: replace the appId below with the appId provided in the Dashboard
            window.talkSession = new Talk.Session({
                appId: "t2X08S4H",
                me: me
            });

            // Let's show the chatbox.
            // First, we need to define who we want to talk to.
            // 
            // In this case, it's always the operator. The code below is identical
            // to the `var me =` declaration in operator.html
            var operator = new Talk.User({
        id: 'PA2',
        role: 'PAadmin',
        name: 'Psychic Artist',
        email: 'contact@psychic-artist.com',
        photoUrl: 'https://psychic-artist.com/assets/img/logo-1.png',
        welcomeMessage: 'Hey, how can I help you?'
            });
            
            // Now, let's start or continue the conversation with the operator and
            // show the chatbox.

            // You control the ID of a conversation. In this example, we use the item ID as 
            // the conversation ID in order to tie this conversation to this item.
            var conversation = window.talkSession.getOrCreateConversation("test12412412412412421421433");
            conversation.setParticipant(me);
            conversation.setParticipant(operator);

            var chatbox = window.talkSession.createChatbox(conversation);
            chatbox.mount(document.getElementById("talkjs-container"));

        });

    </script>

</body>

</html>
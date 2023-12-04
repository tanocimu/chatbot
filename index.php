<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="./cbot.css">
</head>

<body>
    <!--
    <div class="cbot_wrapper">
        <div class="cbot_comment left">
            これはテストです。<br>
            これはテストです。<br>
            これはテストです。<br>
            これはテストです。
        </div>
        <div class="cbot_comment right">
            これはテストです。<br>
            これはテストです。<br>
            これはテストです。<br>
            これはテストです。
        </div>
        <div class="cbot_comment left">
            これはテストです。<br>
            これはテストです。<br>
            これはテストです。<br>
            これはテストです。
        </div>
        <div class="cbot_comment right">
            これはテストです。<br>
            これはテストです。<br>
            これはテストです。<br>
            これはテストです。
        </div>
    </div>
-->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>シナリオ型チャットボット</title>
    </head>

    <body>
        <div id="chat_button">質問する</div>
        <div id="chat-container"></div>
        <div id="cbot_wrapper"></div>

        <script>
            let chatButton = document.getElementById('chat_button');
            chatButton.addEventListener("click", function() {
                const cbot_wrapper = document.getElementById('cbot_wrapper');

                function appendInitialized() {
                    message = "初めまして！スイスは１２月４日１２時３０分です。ご用件を選んでください。私がお答えします。";

                    appendFukidashi(message, 'left');
                }

                function appendFukidashi(message, lr) {
                    fukidashi_class = "cbot_comment " + lr;
                    let cbot_comment = document.createElement('div');
                    cbot_comment.className = fukidashi_class;
                    cbot_comment.innerHTML = message;
                    cbot_wrapper.appendChild(cbot_comment);
                }

                function appendSelectFukidashi(array = []) {
                    let cbot_select = document.createElement('select');

                    for (index = 0; index < array.length; index++) {
                        cbot_select.innerHTML += "<option>" + array[index] + "</option>";
                    }

                    fukidashi_class = "cbot_comment right";
                    let cbot_comment = document.createElement('div');
                    cbot_comment.className = fukidashi_class;
                    cbot_comment.innerHTML = cbot_select.innerHTML;
                    cbot_wrapper.appendChild(cbot_comment);
                    cbot_comment.appendChild(cbot_select);
                }

                function handleUserInput(userInput) {
                    // ユーザー入力に対するシナリオベースの返答をここに実装
                    let botResponse = '';

                    if (userInput.includes('こんにちは')) {
                        botResponse = 'こんにちは！';
                    } else if (userInput.includes('お疲れ様')) {
                        botResponse = 'お疲れ様です！';
                    } else {
                        botResponse = 'すみません、理解できませんでした。';
                    }

                    appendMessage(`ユーザー: ${userInput}`, true);
                    appendMessage(`ボット: ${botResponse}`);
                }

                function getUserInput() {
                    // 選択項目
                    const userInput = prompt('メッセージを入力してください:');
                    if (userInput) {
                        handleUserInput(userInput);
                    }
                }


                appendInitialized();
                appendFukidashi('これはテストです。', 'left');
                appendFukidashi('これはテストです。', 'right');
                const arrayA = ('もっと写真を見たい', 'メールで問い合わせをしたい', '直接話したい', 'チャットを終了する');
                appendSelectFukidashi(arrayA);
                // 最初のメッセージ
                //appendMessage('ボット: こんにちは！');

                // ユーザー入力を処理
                //getUserInput();
            });
        </script>

    </body>

    </html>

</body>

</html>
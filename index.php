<html>
    <head>
        <meta charset="utf-8">
        <title>Mail form</title>

        <link rel="stylesheet" href="css/basic.css">
        <link rel="stylesheet" href="css/mail-form.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="lib/script.js"></script>
    </head>
    
    <body>
        <form method="post" name="form-1" class="ts_mail-form">
            <label class="ts_input-box ts_mean">
                <input type="text" placeholder="Enter your name" name="ts_input_1">
            </label>
            <label class="ts_input-box">
                <input type="text" placeholder="Enter your mail" name="ts_input_2">
            </label>
            <label class="ts_input-box ts_mean">
                <input type="text" placeholder="Enter your phone" name="ts_input_3">
            </label>
            <label>
                <input type="text" placeholder="No index value" name="ts_input_4">
            </label>
            
            <label class="ts_input-box">
                <textarea name="ts_textarea_1" placeholder="Enter your message"></textarea>
            </label>

            <div class="ts_response"></div>
            
            <div button="ts_send-form">Send</div>
        </form>
        <!-- ts_mail-form (close) -->



        <form method="post" name="form-2" class="ts_mail-form">
            <label class="ts_input-box ts_mean">
                <input type="text" placeholder="Enter your id" name="ts_input_1">
            </label>
            <label class="ts_input-box ts_mean">
                <input type="password" placeholder="Enter your pass" name="ts_input_2">
            </label>
            
            <label class="ts_input-box">
                <select name="ts_input_3">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                </select>
            </label>

            <div class="ts_response"></div>
            
            <div button="ts_send-form">Send</div>
        </form>
        <!-- ts_mail-form (close) -->
    </body>
</html>
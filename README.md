# Backend

API:
//==================================================================================ACCOUNTS
- new_account.php   (Expects 'username' and 'password' through POST)
- login.php (Expects 'username' and 'password' through POST, echos 'session_id' in JSON)

//==================================================================================POSTS
- upload_post.php (Expects 'session_id', 'text', 'colorA', 'colorB' through POST)
- get_most_recent_post.php (Expects 'username' through POST, echos JSON in the following format: {"username":"Kyle","text":"This is from the database!","colorA":"#AB024FE","colorB":"#FF00FF"}

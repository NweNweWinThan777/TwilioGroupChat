## Requirement to test SMS 

- Composer and Laravel Installer (v2.3.0 and above) installed on your local machine
- Basic knowledge of the Laravel Framework
- Basic knowledge of Vue.js
- A Twilio account

## About Laravel-Twillio 
- composer i
- npm i
- php artisan key:generate
- php artisan migrate
____

### To create channel & admin user 
- php artisan channel:init

____

### To create member user 
- php artisan channel:newMember


----
### Setting in your env file
- To enable & usable TWILIO services

TWILIO_AUTH_SID=your_auth_sid
TWILIO_AUTH_TOKEN=your_auth_token
TWILIO_API_SID=your_api_sid
TWILIO_API_SECRET=your_api_secret
TWILIO_CHAT_SERVICE_SID=your_chat_service_sid
MIX_CHANNEL_SID=your_channel_sid
MIX_CHANNEL_ADMIN_ROLE_SID=your_channel_admin_role_sid
MIX_CHANNEL_MEMBER_ROLE_SID=your_channel_member_role_sid
MIX_CHANNEL_BANNED_ROLE_SID=your_channel_banned_role_sid (this is option member that does not necessary)


----

### Getting Twilio Credentials

1) Login to your [Twilio dashboard](https://www.twilio.com/login?g=%2Fconsole%3F&t=2b1c98334b25c1a785ef15b6556396290e3c704a9b57fc40687cbccd79c46a8c) and copy both your *Account SID* and *Auth Token*.

- TWILIO_AUTH_SID=your_auth_sid
- TWILIO_AUTH_TOKEN=your_auth_token

*Copy as the following:*
![Login](https://user-images.githubusercontent.com/41044655/88772738-3197d880-d1a7-11ea-9125-ce397ecc4651.png)


2) Before you can start using the *Twilio Chat API*, you need to first create [a chat service](https://www.twilio.com/console/chat/services):


![Chat_Service](https://user-images.githubusercontent.com/41044655/88773378-08c41300-d1a8-11ea-95b3-3ecbf1937606.png)

*After you name and create your chat service, take note of your Service SID.*
- TWILIO_CHAT_SERVICE_SID=your_chat_service_sid


![Service](https://user-images.githubusercontent.com/41044655/88775592-e54e9780-d1aa-11ea-9b5d-a4cf2a34e6d3.png)

3) Getting [API Key](https://www.twilio.com/console/chat/project/api-keys)

- TWILIO_API_SID=your_api_sid
- TWILIO_API_SECRET=your_api_secret

![API_Create](https://user-images.githubusercontent.com/41044655/88779314-a4a54d00-d1af-11ea-98b1-d631e1e469de.png)

![Get_API](https://user-images.githubusercontent.com/41044655/88779500-dc13f980-d1af-11ea-8e0a-5eba7e9c7b59.png)

4) Getting Channel SID

- MIX_CHANNEL_SID=your_channel_sid

![image](https://user-images.githubusercontent.com/41044655/88779889-45940800-d1b0-11ea-8d22-c30de9eb45a9.png)


5) Getting Member Role SID

- MIX_CHANNEL_ADMIN_ROLE_SID=your_channel_admin_role_sid 
- MIX_CHANNEL_MEMBER_ROLE_SID=your_channel_member_role_sid 

![image](https://user-images.githubusercontent.com/41044655/88778971-3496c700-d1af-11ea-9e1f-e7c549881198.png)

6) View Your Channel with Members, Messages

*View Messages*
![image](https://user-images.githubusercontent.com/41044655/88780334-d965d400-d1b0-11ea-9916-6dd5c4388147.png)

*View Members*
![image](https://user-images.githubusercontent.com/41044655/88780559-2cd82200-d1b1-11ea-98f5-2b6f9f9f62a1.png)

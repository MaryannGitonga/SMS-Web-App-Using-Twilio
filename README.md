# SMS-Web-App-Using-Twilio
A simple SMS web app that sends a message to the specified phone number, both inputed by the user, through the Twilio SMS API

# Workplan
1. Imali Susan and Whitney Atonya - Creation and styling of user interface
2. Maryann Gitonga and Maya Bororio - API intergration

# Prerequisites
You need the following to successfully set up the project:
`-Twillio Account`(You can get a free account from https://www.twilio.com/try-twilio)

`-xampp/mampp or any other Apache distribution` 

`-PHP` 

`-Node.js`

`-Composer` 

`-A text editor` 

# Setup Requirements
To setup this project on your local machine, run the following commands:

**Ensure you are located in htdocs or www directory/folder**
* `git clone https://github.com/MaryannGitonga/SMS-Web-App-Using-Twilio.git`
* `cd SMS-Web-App-Using-Twilio`
* `composer require twilio/sdk`
* `atom .` or `code .` (or any other preferred text editor)

In your prefered code editor:
* Create a `.env` file.
* From your Twilio account, add the following credentials to the `.env` file:
  ```
  TWILIO_SID=<Your_SID>
  TWILIO_AUTH_TOKEN=<Your_Token>
  TWILIO_NUMBER=<Your_Twilio_Number>
  ```
* Run `composer require johnathanmiller/secure-env-php` on your terminal.
* Then run `vendor/bin/encrypt-env`. The command will return the following:
  ```
  vendor/bin/encrypt-env
  Path to .env file [.env]:
  Generate Secret Key file? [y|n]: y
  Encryption algorithm [aes256]:
  Save to [.env.enc]:
  ```
**For the first prompt, if your environment file is located in your project root you can press enter and continue. If not, then enter the direct or relative path to your environment file.**

To run this project:
* Start you xampp(or your preferred Apache distribution) and turn on your Apache and MySQL modules.
* Access the application on the browser using this localhost address `http://localhost/SMS-Web-App-Using-Twilio/contact.php`
**Take note: If you are working with a free account, SMS delivery is only successful when you key in your personal number as the recipient's number (ie.the one you used to verify your Twilio account).

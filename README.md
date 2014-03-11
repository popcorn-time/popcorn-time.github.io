<<<<<<< HEAD
Site of PopCorn Time 
======================

To collaborate with the translation you should follow the steps below:

Within the page "languages", there is the language files in JSON:
  1. If the JSON file for your language already exists, you can immediately begin to revise or implement. 
  2. If the JSON file for your language does not yet exist, you must create a file with the the abbreviation for your language and the extension ".json" (Example: en.json, pt-br.json).
  3. You must copy the contents of the file "en.json" and paste in the file that you created. And translate the sentences line by line.


In order to generate the html file, if php-cli is installed on your computer, add your language in the array of dev/generate-static.php and run php generate-static.php in the dev/ folder. If php-cli is not installed on your computer just notify it in your pull request.

***Any changes to the design should be done in dev/index.php: any change done in a .html file will be overwrited.***
>>>>>>> a452defb4dfdc0f138a7e319cc00be9a9d98584a

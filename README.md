Site of PopCorn Time 
======================

To collaborate with the translation you should follow the steps below:

Within the page "languages", there is the language files in JSON:
1. If the JSON file for your language already exists, you can immediately begin to revise or implement. 
2. If the JSON file for your language does not yet exist, you must create a file with the the abbreviation for your language and the extension ".json" (Example: en.json, pt-br.json).
3. You must copy the contents of the file "en.json" and paste in the file that you created. And translate the sentences line by line.

After you finish translating the JSON files, you should follow some steps:

1.You should download the project on your computer and run it on a web server. 
2.Open the "dev" folder and edit the row "generate-static.php" file next steps. 
3.Adicione your language (acronym) to the "array" "langs". 
4.Open through the web server to "index.html" page which is inside the "dev" folder 
5.Um new file. ".html" will be generated.

After following these steps, send the files .json and .html created through a "pull request".

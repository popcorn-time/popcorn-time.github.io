popcorn-time.github.io
======================

See the original project at https://github.com/popcorn-time/popcorn-time.github.io

These fork aims to add translation facilities:

To add a new language follow these simple steps:
  - copy the file languages/en.json to languages/'your lang'.json
  - modify it 
  - go in the dev/ folder and run php generate-statc.php to create the file 'your lang'.html automaticaly 
  - if php is not installed on your computer, just notify it that the third step should still be executed in your pull request and i will do it
  
***Any changes to the design should be done in dev/index.php: any change done in a .html file will be overwrited.***

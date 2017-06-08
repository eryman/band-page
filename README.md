# Facebook Band Website Generator

## Running the Facebook Band Website Generator

This application is designed to build a simple, dynamic, mobile-responsive website using data gathered from the Facebook Graph API.

Simply replace the following lines of code with the requested data to get the page up and running.

## DATA INPUTS:

### get_access_token.html

* input values for clientId and clientSecret based on the info given in Facebook Developer Dashboard for that app.

### getdata.php | geteventdata.php | getphotodata.php:

* line 5 - $page_id => Facebook page ID (must be obtained from client)

* line 7 - $app_id => ID of app (from Facebook Dev Dashboard)

* line 8 - $app_secret => Client Secret (from Facebook Dev Dashboard) 

* line 9 - $default_graph_version => find in Facebook Developer Dashboard toward top left

* line 10 - $access_token => use value retrieved from get_access_token.html

### index.html:

* line 12 => change title

* line 146 => replace bandcamp embed




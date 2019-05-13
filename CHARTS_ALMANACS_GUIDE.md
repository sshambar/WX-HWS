# HOW TO USE THE WEEWX ARCHIVE DATABASE TO GENERATE THE POP-UP CanvasJS CHARTS.

* Please familiarise yourself with the location of your weewx.conf and default skins folder (Standard or for WeeWX 3.9.1 or later Seasons)
* Open the skin.conf file and find the '[CheetahGenerator]' section. 

At the top of this section under the line 'encoding = html_entities' append the following: -

(copy and paste)

    search_list_extensions = user.stats.MyStats, user.lastrain.lastRainTags

At the bottom of this section append the following: -

(copy and paste)

	   
	   [[WXCHARTDATA]]
   	# Charts that plot "by day"
           [[[DAILYCHARTS]]]
                encoding = strict_ascii	
                template = result.csv.tmpl
                HTML_ROOT = /var/www/pws/wxcharts

    # Charts that plot "by month"
            [[[MONTHLYCHARTS]]]
                encoding = strict_ascii
                template = MMYYYY.csv.tmpl
                HTML_ROOT = /var/www/pws/wxcharts/wxchartdata

    # Charts that plot "by year"
            [[[YEARLYCHARTS]]]
                encoding = strict_ascii
                template = YYYY.csv.tmpl
                HTML_ROOT = /var/www/pws/wxcharts/wxchartdata
                
    
    [[WXSTATS]]
    
    # Generates data for various W34 Statistics
            [[[W34STATS]]]
                 encoding = strict_ascii
                 template = w34stats.php.tmpl
                 HTML_ROOT = /var/www/pws

* In the download you will find a folder called 'copy_files_inside_to_skins_Standard or Seasons_folder'. Inside are the following files called result.csv.tmpl, MMYYYY.csv.tmpl, YYYY.csv.tmpl and w34stats.php.tmpl. Move  or copy these to your skins/Standard (or Seasons) folder.
* You will also find a folder called 'copy_files_inside_to_user_folder'. Copy the files inside stats.py and lastrain.py into your weewx/bin/user folder.

# IMPORTANT

* Once complete and everyting is saved, please restart weeWX.

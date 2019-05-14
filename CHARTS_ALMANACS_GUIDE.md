# HOW TO USE THE WEEWX ARCHIVE DATABASE TO GENERATE THE POP-UP CanvasJS CHARTS.

* Please familiarise yourself with the location of your weewx.conf and skins folder 
* Open the weewx.conf file and find the '[StdReport]' section, then scroll down to the individual reports section and add this additional report: -

(copy and paste)
	   
	[[w34skinReport]]
        # The w34skinReport uses the 'w34skin' skin, which contains the
        # templates for the WX-HWS charts.
        skin = w34skin
        enable = true

* In the download you will find a folder called 'copy_folder_inside_into_skins_folder'. Inside is a folder called 'w34skin'. Copy or move the w34skin folder and its contents into your skins folder.

# IMPORTANT

* Once complete and everyting is saved, please restart weeWX.

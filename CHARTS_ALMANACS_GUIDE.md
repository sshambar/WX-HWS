# HOW TO USE THE WEEWX ARCHIVE DATABASE TO GENERATE THE POP-UP CanvasJS CHARTS.

* Please familiarise yourself with the location of your WeeWX system files including your bin/user folder, skins folder and weewx.conf file. If you are unsure where to find these, please refer to the installation process here: - http://www.weewx.com/docs/ which shows various WeeWX installation scenarios.

* Open the weewx.conf file and find the '[StdReport]' section, then scroll down to the individual reports section and add this additional report: -

(copy and paste)
	   
	[[w34skinReport]]
        # The w34skinReport uses the 'w34skin' skin, which contains the
        # templates for the WX-HWS charts.
        skin = w34skin
        enable = true

* In the download you will find a folder called 'copy_folder_inside_into_skins_folder'. Inside is a folder called 'w34skin'. Copy or move the w34skin folder and its contents into your skins folder.

* You will also find a folder called 'copy_files_inside_to_user_folder'. Copy the files inside, stats.py and lastrain.py, into your weewx/bin/user folder.

# IMPORTANT

* Once complete and everyting is saved, please restart weeWX.

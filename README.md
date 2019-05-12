# Home Weather Station weather website template for WeeWX

This repository contains the current WeeWX version of Brian Underdown's Home Weather Station weather website template set. Brian's main website is https://weather34.com/homeweatherstation/index.html In January, 2019, Brian asked others to distribute/maintain his code. 

This version requires WeeWX software with the CRT extension to denerate data feeds for the conditions from your personal weather station. WeeWX is available at http://weewx.com

This version is designed explicitly to harness the powerful WeeWX database to generate the weather data charts and statistical data. It is built on the current MB-UB40-FFT which is now maintained by Lightmaster (Meteobridge-Weather34-Template)

If you are happy to use Weather Underground as a source of data for chart generation you are strongly recommended to use the Ken True CU-HWS version (https://github.com/ktrue/CU-HWS) as your first choice which can be configured out-of-the-box to be used with WeeWX.

# What's New in this Version WX-HWS-UB40-FFT

Built on the current Meteobridge Version MB-UB40-FFT and is visually identical.

Latest design features.

Harnesses the power of the WeeWX database to generate graphs and statiscal data.

Additional pop-up windows for statistical data.

Introduces the concept of a WeeWX-api.

Meteobridge to WeeWX variable look-up table.

New addition wind direction chart.

New addition humidity chart.

New addition wind map.

New addition pop-up window links now visible in phone mode.

# Demo

A live example of WX-HWS template can be seen at https://claydonsweather.org.uk

# Setup

Follow the instructions in the quick setup guide to install the template.
Follw the instructions in 'charts statistics guide' to complete the required changes to WeeWX.
Browse to http://your.website/easyweathersetup.php
There is no initial password when the page prompts the first time -- just press LOGIN to enter the page.
IMPORTANT set a password in the screen for future use -- your browser can remember it. This will make future updates    reasonably secure so only you can do the updates to the configuration.
Make setting entries in the easyweathersetup.php page and SAVE. The next time you run it, use the password you set in the step above.
Repeat running easyweathersetup.php until the main screen appears as you like it.

# Diagnostics

A new utility diags.php was added to the distribution. It is useful for checking the installation of the WX-HWS template and showing (safely) the current settings.php/settings1.php file contents for debugging. Note: the entries for $password, $db_user, $db_pass are replaced with '********' to avoid unwanted disclosure of private information.

    run diags.php?show=info on your website to show the key info about the WX-HWS installation and required PHP function status
    run diags.php?show=settings on your website to safely show the current settings.php and settings1.php contents

# License

Copyright (c) 2016-2019 by Brian Underdown (https://weather34.com)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Template”), to deal in the Template without restriction, including without limitation the rights to, can use, can not copy without prior permission, can modify for personal use, can use and publish for personal use ,can not distribute without prior permission, can not sublicense without prior permission, and can not sell copies of the Template, and subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Template.

THE TEMPLATE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON INFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE TEMPLATE OR THE USE OR OTHER DEALINGS IN THE TEMPLATE.

Attribution-NonCommercial 4.0 International based on a work at https://weather34.com/homeweatherstation
Non-weeWX versions Available

    Cumulus Version available via download and more info supported by Ken True ( https://github.com/ktrue/CU-HWS ). This version now also supports WeeWX and WeatherCat

    Weatherflow API Version Discontinued Please use meteobridge version if you have a meteobridge product, it offers more versatile options over the API and faster updates and better history/chart outputs or alternatively try the version for Weather Display below by Wim van der Kuil

    Raspberry Pi Python Weatherflow console version available via here supported download via by Peter Davis ( Weatherflow Forum ) https://github.com/peted-davis/WeatherFlow_PiConsole

    Davis WeatherLink version by Mats Ahlklo supports WL 2.0 details here http://pysselilivet.blogspot.com/2017/01/install-weather34-with-weatherlink.html

    ATMOCOM Version for Ambient WS-2902 Osprey,Ventus W830, MiSol, ChiliTec, PanTech, Froggit WH3000, Ambient WS-8478 Falcon, Bresser, FOSHK HP-3500 series info here https://atmocom.com/Demo-weather-data

    Weather Display version by Wim van der Kuil Now Available via https://wd34.weather-template.com/. This version also now supports Cumulus, WeeWX and WeatherCat.




Apart from Brian Underdown without him, this template would never exist, I would aslo like to acknowledge the following people: -

Ken True for sharing files and who makes my job of maintaining the weeWX version so much easier.

Thomas Sosio for his invaluable contribution in producing the Meteobridge lookup code to translate WeeWX database output.

David Marshall for contributing technical knowledge and solutions to create the wxchart .tmpl files and alternative solutions for weather alerts.

Taylormia for contributing his excellent setup example for instances where weeWX and server/template are remote to each other.

All those unamed people who have helped me with testing updates

# Alternative versions 

# Cumulus
you can find the Cumulus version maintained by Ken True (Saratoga) at 
https://github.com/ktrue/CU-HWS

# Weewx
you can find a Weewx version maintained by Ian Millard is also avaialble via 
https://github.com/steepleian/WX-HWS

# Weatherflow
you can find a Weatherflow version not maintained but fully tested as of May 5th 2019 
https://github.com/weather34/Weather34-Weatherflow


# This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
http://creativecommons.org/licenses/by-nc-nd/4.0/

# Credits and thanks to the contributors who made this all possible since 2015.

 Erik M Madsen for language idea and initial script
 
 Paul @komoka weather in Canada for continous support and testing 
 
 Josep for Spanish/Catalan language translation and for many ideas and refinements
 
 Pascal Catte French translation and ideas fowarded 
 
 Steve the developer of Cumulus for support and providing a platform to resolve issues 
 
 Mats Ahlklo Swedish translation and his work on using Davis weatherlink 
 
 Betejuice (Cumulus Forum) for providing a solution for meteor shower listings 
 
 Ken True (Saratoga) for kindly granting permission allowing use of many scripts he developed which gave inspiration and ideas  though not used today it was the inspiration that allowed to do something more suited to the design. 
 
 Eric Rechlin Special thanks for originally creating the theme switching and extensive work on metrics/non metrics
 
 Boris at smartbedded (meteobridge) for ongoing support and upkeep of meteobridge 
 
 Wim van der Kuil for the original meteobridge script (now offers Weather Display and other versions of template)
 
 David St John at weatherflow for providing hardware for testing and his non bias logical views 
 
 Paul Wilman , Tina Thomas, Vaggos , Chuck M , Aaron Gersztoff , Ian Millard, and many many more for continous constructive supportive feedback .. 

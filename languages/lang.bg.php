<?php
/* 
-----------------
Language Translation File for HOMEWEATHERSTATION Template
Language: DEFAULT ENGLISH LANGUAGE TEMPLATE CODE this is the master file
Code By : BRIAN UNDERDOWN
Developed By: Brian Underdown/Erik M Madsen
October/November 2016
-----------------
*/
# -----------------------------------------------------
# Day / Months do not edit
# -----------------------------------------------------
$day = date("l");
$day2 = date("l", time()+86400);
$daynum = date("j");
$monthtrans = date("F");
$year = date("Y");
# -----------------------------------------------------
# -----------------------------------------------------
setlocale(LC_TIME, "bg-BG.UTF-8");
$lang = array();

// Menu


$lang['Settings'] = 'Настройки';
$lang['Layout'] = 'Промяна на подредбата';
$lang['Lighttheme'] = 'Светла тема';
$lang['Darktheme'] = 'Тъмна тема';
$lang['Nonmetric'] = 'US (F) ';
$lang['Metric'] = 'Метричен (C)';
$lang['UKmetric'] = 'UK (М/Ч - Метричен) ';
$lang['Scandinavia'] = 'Скандинавски(M/S)';

$lang['Worldwideearthquakes'] = 'Земетресения в цял свят';
$lang['Toggle'] = 'Превключи на цял екран ';
$lang['Contactinfo'] = 'Станция и информация за контакти';
$lang['Templateinfo'] = 'Информация за шаблона';
$lang['language'] = 'Изберете език';
$lang['Weatherstationinfo'] = 'Информация за станцията';
$lang['Webdesigninfo'] = 'Информация за шаблона';
$lang['Contact'] = 'Контакти';



//temperature
$lang['Temperature'] = 'Температура';
$lang['Feelslike'] = 'Усеща се като';
$lang['Humidity'] = 'Влага';
$lang['Dewpoint'] = 'Оросяване при';
$lang['Trend'] = 'клони ';
$lang['Heatindex'] = 'Топлинен индекс';
$lang['Windchill'] = 'Охлаждане ';
$lang['Tempfactors'] = 'Температурен коефициент';
$lang['Nocautions'] = 'Никакви предупреждения';
$lang['Wetbulb'] = 'Мокър термометър';
$lang['dry'] = 'и сухо';
$lang['verydry'] = 'и много сухо';

//new feature temperature feels
$lang['FreezingCold'] = 'Пред замръзване';
$lang['FeelingVeryCold'] = 'Много студено';
$lang['FeelingCold'] = 'Студено';
$lang['FeelingCool'] = 'Хладно';
$lang['FeelingComfortable'] = 'Приятно топло ';
$lang['FeelingWarm'] = 'Топло';
$lang['FeelingHot'] = 'Горещо';
$lang['FeelingUncomfortable'] = 'Неприятно горещо';
$lang['FeelingVeryHot'] = 'Много горещо';
$lang['FeelingExtremelyHot'] = 'Екстремни температури';



//wind
$lang['Windspeed'] = 'Вятър';
$lang['Gust'] = 'Пориви';
$lang['Direction'] = 'Посока';
$lang['Gusting'] = 'Пориви от';
$lang['Blowing'] = 'Духа от';
$lang['Wind'] = 'Вятър';

// Wind phrases for Beaufort scale for windspeed area
$lang['Calm'] = 'Спокойно';
$lang['Lightair'] = 'Лек полъх';
$lang['Lightbreeze'] = 'Лек бриз';
$lang['Gentelbreeze'] = 'Лек вятър';
$lang['Moderatebreeze'] = 'Слаб бриз';
$lang['Freshbreeze'] = 'Свеж бриз';
$lang['Strongbreeze'] = 'Силен бриз';
$lang['Neargale'] = 'Засилен ';
$lang['Galeforce'] = 'Силен ';
$lang['Stronggale'] = 'Много силен';
$lang['Storm'] = 'Буря';
$lang['Violentstorm'] = 'Силна буря';
$lang['Hurricane'] = 'Ураган';


// Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions'] = 'Условията са спокоини';
$lang['LightBreezeattimes'] = 'Има лек полъх ';
$lang['MildBreezeattimes'] = 'Има лек бриз ';
$lang['ModerateBreezeattimes'] = 'Има лек вятър';
$lang['FreshBreezeattimes'] = 'Има слаб бриз';
$lang['StrongBreezeattimes'] = 'Има свеж бриз';
$lang['NearGaleattimes'] = 'Има силен бриз';
$lang['GaleForceattimes'] = 'Има засилен вятър';
$lang['StrongGaleattimes'] = 'Има силен вятър';
$lang['StormConditions'] = 'Има много силен вятър';
$lang['ViolentStormConditions'] = 'Има силна буря';
$lang['HurricaneConditions'] = 'Ураганни условия';

$lang['Avg'] = '<span2> Средни: </span2>';

//wind direction compass
$lang['Northdir'] = '<span>Север<br></span>';
$lang['NNEdir'] = 'Север  <br><span>СевероИзточен</span>';
$lang['NEdir'] = '<span>СевероИзточен<br></span>';
$lang['ENEdir'] = 'Изток <br><span>СевероИзточен</span>';
$lang['Eastdir'] = "<span>Изток<br></span>";
$lang['ESEdir'] = 'Изток <br><span>ЮгоИзточен</span>';
$lang['SEdir'] = '<span>ЮгоИзточен</span>';
$lang['SSEdir'] = 'Южен <br><span>ЮгоИзточен</span>';
$lang['Southdir'] = '<span> Южен</span>';
$lang['SSWdir'] = 'Южен <br><span>ЮгоЗападен</span>';
$lang['SWdir'] = '<span>ЮгоЗападен</span>';
$lang['WSWdir'] = 'Запад <br><span>ЮгоЗападен</span>';
$lang['Westdir'] = '<span> Запад</span>';
$lang['WNWdir'] = 'Запад<br><span>СевероЗападед</span>';
$lang['NWdir'] = '<span>СевероЗападен</span>';
$lang['NWNdir'] = 'Север <br><span>СевероЗападен</span>';




//wind direction avg
$lang['North'] = 'Северен';
$lang['NNE'] = 'ССИ';
$lang['NE'] = 'СИ';
$lang['ENE'] = 'ИСИ';
$lang['East'] = 'Източен';
$lang['ESE'] = 'ИЮИ';
$lang['SE'] = 'ЮИ';
$lang['SSE'] = 'ЮЮИ';
$lang['South'] = 'Южен';
$lang['SSW'] = 'ЮЮЗ';
$lang['SW'] = 'ЮЗ';
$lang['WSW'] = 'ЗЮЗ';
$lang['West'] = 'Западен';
$lang['WNW'] = 'ЗСЗ';
$lang['NW'] = 'СЗ';
$lang['NWN'] = 'СЗС';

//rain
$lang['raintoday'] = 'Очаквани валежи';
$lang['Rate'] = 'Количество';
$lang['Rainfall'] = 'Валеж';
$lang['Precip'] = 'валеж'; // must be short name do not use full precipitation !!!! ///
$lang['Rain'] = 'Дъжд';
$lang['Heavyrain'] = 'Силни валежи';
$lang['Flooding'] = 'Риск от наводнения';
$lang['Rainbow'] = 'Дъга';
$lang['Windy'] = 'Ветровите';


//sun -moon-daylight-darkness
$lang['Sun'] = 'Слънце';
$lang['Moon'] = 'Луна';
$lang['Sunrise'] = 'Изгрев слънце';
$lang['Sunset'] = 'Залез слънце';
$lang['Moonrise'] = 'Изгрев луна ';
$lang['Moonset'] = 'Залез луна';
$lang['Night'] = 'Вечер';
$lang['Day'] = 'Ден';
$lang['Nextnewmoon'] = 'Следващо<br>новолуние';
$lang['Nextfullmoon'] = 'Следваща<br>пълна луна';
$lang['Luminance'] = 'Яркост';
$lang['Moonphase'] = 'Фаза';
$lang['Estimated'] = 'Прогноза';
$lang['Daylight'] = 'Дневна светлина';
$lang['Darkness'] = 'Тъмнина';
$lang['Daysold'] = 'Дни стар';
$lang['Belowhorizon'] = 'под<br>хоризонта';
$lang['Till'] = 'До ';
$lang['Minago'] = ' минути преди';
$lang['Hrs'] = ' часа';
$lang['Min'] = ' мин';
$lang['TotalDarkness'] = 'Продължителност<br>тъмнина';
$lang['TotalDaylight'] = 'Продължителност<br>светлина';
$lang['Below'] = 'е под хоризонта';

$lang['Newmoon'] = 'Новолуние';
$lang['Waxingcrescent'] = 'Изгряващ полумесец';
$lang['Firstquarter'] = 'Първа четвърт';
$lang['Waxinggibbous'] = 'Растяща луна';
$lang['Fullmoon'] = 'Пълнолуние';
$lang['Waninggibbous'] = 'Намаляваща луна';
$lang['Lastquarter'] = 'Последна четвърт';
$lang['Waningcrescent'] = 'Залязващ полумесец';


//trends

$lang['Falling'] = 'Спадащи';
$lang['Rising'] = 'Ръстящи';
$lang['Steady'] = 'Постоянни';
$lang['Rapidly'] = 'Рязко';
$lang['Temp'] = 'Температура';


//Solar-UV

//uv
$lang['Nocaution'] = 'Без <color>никакви</color> притеснения';
$lang['Wearsunglasses'] = 'Носете <color>слънчеви очила</color> в слънчеви дни';
$lang['Stayinshade'] = 'Стойте на сянка в следобедните часове когато <color>слънцето</color> е най-силно';
$lang['Reducetime'] = 'Намалете времето си на <color>слънце</color> в часовете между 10:00-16:00 ';
$lang['Minimize'] = 'Ограничете времето си на <color>слънце</color> в часовете между 10:00-16:00 ';
$lang['Trytoavoid'] = 'Опитайте се да избягвате <color>слънцето</color> в часовете между 10:00-16:00 ';

//solar

$lang['Poor'] = 'Слаба<color> <br>радиация</color>';
$lang['Low'] = 'Ниска <br><color>радиация</color>';
$lang['Moderate'] = 'Умерена <br><color>радиация</color>';
$lang['Good'] = 'Доста <br><color>радиация</color>';
$lang['Solarradiation']= 'Соларна радиация';


//current sky
$lang['Currentsky'] = 'Текущи условия';
$lang['Currently'] = 'Настоящи';
$lang['Cloudcover'] = 'Облачно покритие';

//Notifications
$lang['Nocurrentalert'] = 'Времето е спокойно, никакви <span>предупреждения</span>';
$lang['Windalert'] = 'Пориви от вятър:';
$lang['Tempalert'] = 'Висока температура';
$lang['Heatindexalert'] = 'Топлинен индекс предупреждение';
$lang['Windchillalert'] = 'Студен вятър предупреждение';
$lang['Dewpointalert'] = 'Непоносима влага';
$lang['Dewpointcolderalert'] = 'Точна на оросяване предупреждение';
$lang['Feelslikecolderalert'] = 'Чувства се по-студено';
$lang['Feelslikewarmeralert'] = 'Чувства се по-топло';
$lang['Rainratealert'] = '/ч<span> Силни валежи';


//Earthquake Notifications
$lang['Regional'] = 'Земетресение в областта';
$lang['Significant'] = 'Значително земетресение';
$lang['Nosignificant'] = 'Без заплашителни земетресения';


//Main page
$lang['Barometer'] = 'Барометър';
$lang['UVSOLAR'] = 'UV-Соларни';
$lang['Earthquake'] = 'Земетресение';
$lang['Daynight'] = 'Информация за деня и нощта';
$lang['SunPosition'] = 'Позиция на слънцето';

$lang['Location'] = 'Локация ';
$lang['Hardware'] = 'Апаратура';
$lang['Rainfalltoday'] = 'Валежи днес';
$lang['Windspeed'] = 'Вятър';
$lang['Winddirection'] = 'Посока на вятъра';
$lang['Measured'] = 'Измерено днес';
$lang['Forecast'] = 'Прогноза';
$lang['Forecastahead'] = 'Прогноза за напред';
$lang['Forecastsummary'] = 'Обобщена прогноза';
$lang['WindGust'] = 'Скорост на вятъра | Пориви';

$lang['Hourlyforecast'] = 'Почасова прогноза';
$lang['Significantearthquake'] = 'Значително земетресение';
$lang['Regionalearthquake'] = 'Заметресение в областта';
$lang['Average'] = 'Среден';
$lang['Notifications'] = 'Метерологична <span>тревога</span>';
$lang['Indoor'] = 'Вътрешен';
$lang['Today'] = 'Днес';
$lang['Tonight'] = 'Довечера';
$lang['Tomorrow'] = 'Утре';
$lang['Tomorrownight'] 		 = 'Утре вечер';
$lang['Updated'] 		 = 'Обновление';
$lang['Meteor'] 		 = 'Метеорити';
$lang['WeatherStationNotifications'] = 'Нотификации';  
$lang['Firerisk'] = 'Опасност от пожари'; 
$lang['Localtime'] = 'Локално <span2>Време</span2>';
$lang['Nometeor'] = 'Без метеорити';
$lang['LiveWebCam'] = 'Камера на живо';
$lang['Online'] = 'На линия';
$lang['Offline'] = 'Извън линия';
$lang['Weatherstation'] = 'Метеорологична станция';
$lang['Cloudbase'] = 'Cloudbase';
$lang['uvalert'] = 'Внимание висок UV индекс';
$lang['Rainbow'] = 'Дъга';
$lang['Windy'] = 'Ветровито';
$lang['Max'] = 'Макс';
$lang['Min'] = 'Мин';
$lang ['Wind Run'] = 'Количество';

//earthquake TOP MODULE 10 July 2017
$lang['ModerateE'] = 'Силни земетресения';
$lang['MinorE'] = 'Слаби земетресения';
$lang['StrongE'] = 'Силни земетресения';
$lang['RegionalE'] = 'В областта';

$lang['Conditions'] = 'Условия';
$lang['Cloudbase Height'] = 'Височина на облаците';
$lang['Station'] = 'Станция';

$lang['Detailed Forecast'] = 'Подробна прогноза';
$lang['Summary Outlook'] = 'Обобщение';

//Air Quality
$lang['Hazordous']= 'Опасни условия';
$lang['VeryUnhealthy']= 'Много неполезно';
$lang['Unhealthy']= 'Неполезно';
$lang['UnhealthyFS']= 'Неполезно за някои';
$lang['Moderate']= 'Мръсен въздух';
$lang['Good']= 'Чист въздух';
?>
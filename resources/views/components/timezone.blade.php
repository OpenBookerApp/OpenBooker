@props(['model'])
@php
    $options = [
        'UTC' => [
            ['id' => 'UTC', 'name' => 'UTC'],
        ],
        'America' => [
            ['id' => 'America/Adak', 'name' => 'Adak (-10:00)'],
            ['id' => 'America/Atka', 'name' => 'Atka (-10:00)'],
            ['id' => 'America/Anchorage', 'name' => 'Anchorage (-9:00)'],
            ['id' => 'America/Juneau', 'name' => 'Juneau (-9:00)'],
            ['id' => 'America/Nome', 'name' => 'Nome (-9:00)'],
            ['id' => 'America/Yakutat', 'name' => 'Yakutat (-9:00)'],
            ['id' => 'America/Dawson', 'name' => 'Dawson (-8:00)'],
            ['id' => 'America/Ensenada', 'name' => 'Ensenada (-8:00)'],
            ['id' => 'America/Los_Angeles', 'name' => 'Los_Angeles (-8:00)'],
            ['id' => 'America/Tijuana', 'name' => 'Tijuana (-8:00)'],
            ['id' => 'America/Vancouver', 'name' => 'Vancouver (-8:00)'],
            ['id' => 'America/Whitehorse', 'name' => 'Whitehorse (-8:00)'],
            ['id' => 'America/Boise', 'name' => 'Boise (-7:00)'],
            ['id' => 'America/Cambridge_Bay', 'name' => 'Cambridge_Bay (-7:00)'],
            ['id' => 'America/Chihuahua', 'name' => 'Chihuahua (-7:00)'],
            ['id' => 'America/Dawson_Creek', 'name' => 'Dawson_Creek (-7:00)'],
            ['id' => 'America/Denver', 'name' => 'Denver (-7:00)'],
            ['id' => 'America/Edmonton', 'name' => 'Edmonton (-7:00)'],
            ['id' => 'America/Hermosillo', 'name' => 'Hermosillo (-7:00)'],
            ['id' => 'America/Inuvik', 'name' => 'Inuvik (-7:00)'],
            ['id' => 'America/Mazatlan', 'name' => 'Mazatlan (-7:00)'],
            ['id' => 'America/Phoenix', 'name' => 'Phoenix (-7:00)'],
            ['id' => 'America/Shiprock', 'name' => 'Shiprock (-7:00)'],
            ['id' => 'America/Yellowknife', 'name' => 'Yellowknife (-7:00)'],
            ['id' => 'America/Belize', 'name' => 'Belize (-6:00)'],
            ['id' => 'America/Cancun', 'name' => 'Cancun (-6:00)'],
            ['id' => 'America/Chicago', 'name' => 'Chicago (-6:00)'],
            ['id' => 'America/Costa_Rica', 'name' => 'Costa_Rica (-6:00)'],
            ['id' => 'America/El_Salvador', 'name' => 'El_Salvador (-6:00)'],
            ['id' => 'America/Guatemala', 'name' => 'Guatemala (-6:00)'],
            ['id' => 'America/Knox_IN', 'name' => 'Knox_IN (-6:00)'],
            ['id' => 'America/Managua', 'name' => 'Managua (-6:00)'],
            ['id' => 'America/Menominee', 'name' => 'Menominee (-6:00)'],
            ['id' => 'America/Merida', 'name' => 'Merida (-6:00)'],
            ['id' => 'America/Mexico_City', 'name' => 'Mexico_City (-6:00)'],
            ['id' => 'America/Monterrey', 'name' => 'Monterrey (-6:00)'],
            ['id' => 'America/Rainy_River', 'name' => 'Rainy_River (-6:00)'],
            ['id' => 'America/Rankin_Inlet', 'name' => 'Rankin_Inlet (-6:00)'],
            ['id' => 'America/Regina', 'name' => 'Regina (-6:00)'],
            ['id' => 'America/Swift_Current', 'name' => 'Swift_Current (-6:00)'],
            ['id' => 'America/Tegucigalpa', 'name' => 'Tegucigalpa (-6:00)'],
            ['id' => 'America/Winnipeg', 'name' => 'Winnipeg (-6:00)'],
            ['id' => 'America/Atikokan', 'name' => 'Atikokan (-5:00)'],
            ['id' => 'America/Bogota', 'name' => 'Bogota (-5:00)'],
            ['id' => 'America/Cayman', 'name' => 'Cayman (-5:00)'],
            ['id' => 'America/Coral_Harbour', 'name' => 'Coral_Harbour (-5:00)'],
            ['id' => 'America/Detroit', 'name' => 'Detroit (-5:00)'],
            ['id' => 'America/Fort_Wayne', 'name' => 'Fort_Wayne (-5:00)'],
            ['id' => 'America/Grand_Turk', 'name' => 'Grand_Turk (-5:00)'],
            ['id' => 'America/Guayaquil', 'name' => 'Guayaquil (-5:00)'],
            ['id' => 'America/Havana', 'name' => 'Havana (-5:00)'],
            ['id' => 'America/Indianapolis', 'name' => 'Indianapolis (-5:00)'],
            ['id' => 'America/Iqaluit', 'name' => 'Iqaluit (-5:00)'],
            ['id' => 'America/Jamaica', 'name' => 'Jamaica (-5:00)'],
            ['id' => 'America/Lima', 'name' => 'Lima (-5:00)'],
            ['id' => 'America/Louisville', 'name' => 'Louisville (-5:00)'],
            ['id' => 'America/Montreal', 'name' => 'Montreal (-5:00)'],
            ['id' => 'America/Nassau', 'name' => 'Nassau (-5:00)'],
            ['id' => 'America/New_York', 'name' => 'New_York (-5:00)'],
            ['id' => 'America/Nipigon', 'name' => 'Nipigon (-5:00)'],
            ['id' => 'America/Panama', 'name' => 'Panama (-5:00)'],
            ['id' => 'America/Pangnirtung', 'name' => 'Pangnirtung (-5:00)'],
            ['id' => 'America/Port-au-Prince', 'name' => 'Port-au-Prince (-5:00)'],
            ['id' => 'America/Resolute', 'name' => 'Resolute (-5:00)'],
            ['id' => 'America/Thunder_Bay', 'name' => 'Thunder_Bay (-5:00)'],
            ['id' => 'America/Toronto', 'name' => 'Toronto (-5:00)'],
            ['id' => 'America/Caracas', 'name' => 'Caracas (-4:-30)'],
            ['id' => 'America/Anguilla', 'name' => 'Anguilla (-4:00)'],
            ['id' => 'America/Antigua', 'name' => 'Antigua (-4:00)'],
            ['id' => 'America/Aruba', 'name' => 'Aruba (-4:00)'],
            ['id' => 'America/Asuncion', 'name' => 'Asuncion (-4:00)'],
            ['id' => 'America/Barbados', 'name' => 'Barbados (-4:00)'],
            ['id' => 'America/Blanc-Sablon', 'name' => 'Blanc-Sablon (-4:00)'],
            ['id' => 'America/Boa_Vista', 'name' => 'Boa_Vista (-4:00)'],
            ['id' => 'America/Campo_Grande', 'name' => 'Campo_Grande (-4:00)'],
            ['id' => 'America/Cuiaba', 'name' => 'Cuiaba (-4:00)'],
            ['id' => 'America/Curacao', 'name' => 'Curacao (-4:00)'],
            ['id' => 'America/Dominica', 'name' => 'Dominica (-4:00)'],
            ['id' => 'America/Eirunepe', 'name' => 'Eirunepe (-4:00)'],
            ['id' => 'America/Glace_Bay', 'name' => 'Glace_Bay (-4:00)'],
            ['id' => 'America/Goose_Bay', 'name' => 'Goose_Bay (-4:00)'],
            ['id' => 'America/Grenada', 'name' => 'Grenada (-4:00)'],
            ['id' => 'America/Guadeloupe', 'name' => 'Guadeloupe (-4:00)'],
            ['id' => 'America/Guyana', 'name' => 'Guyana (-4:00)'],
            ['id' => 'America/Halifax', 'name' => 'Halifax (-4:00)'],
            ['id' => 'America/La_Paz', 'name' => 'La_Paz (-4:00)'],
            ['id' => 'America/Manaus', 'name' => 'Manaus (-4:00)'],
            ['id' => 'America/Marigot', 'name' => 'Marigot (-4:00)'],
            ['id' => 'America/Martinique', 'name' => 'Martinique (-4:00)'],
            ['id' => 'America/Moncton', 'name' => 'Moncton (-4:00)'],
            ['id' => 'America/Montserrat', 'name' => 'Montserrat (-4:00)'],
            ['id' => 'America/Port_of_Spain', 'name' => 'Port_of_Spain (-4:00)'],
            ['id' => 'America/Porto_Acre', 'name' => 'Porto_Acre (-4:00)'],
            ['id' => 'America/Porto_Velho', 'name' => 'Porto_Velho (-4:00)'],
            ['id' => 'America/Puerto_Rico', 'name' => 'Puerto_Rico (-4:00)'],
            ['id' => 'America/Rio_Branco', 'name' => 'Rio_Branco (-4:00)'],
            ['id' => 'America/Santiago', 'name' => 'Santiago (-4:00)'],
            ['id' => 'America/Santo_Domingo', 'name' => 'Santo_Domingo (-4:00)'],
            ['id' => 'America/St_Barthelemy', 'name' => 'St_Barthelemy (-4:00)'],
            ['id' => 'America/St_Kitts', 'name' => 'St_Kitts (-4:00)'],
            ['id' => 'America/St_Lucia', 'name' => 'St_Lucia (-4:00)'],
            ['id' => 'America/St_Thomas', 'name' => 'St_Thomas (-4:00)'],
            ['id' => 'America/St_Vincent', 'name' => 'St_Vincent (-4:00)'],
            ['id' => 'America/Thule', 'name' => 'Thule (-4:00)'],
            ['id' => 'America/Tortola', 'name' => 'Tortola (-4:00)'],
            ['id' => 'America/Virgin', 'name' => 'Virgin (-4:00)'],
            ['id' => 'America/St_Johns', 'name' => 'St_Johns (-3:-30)'],
            ['id' => 'America/Araguaina', 'name' => 'Araguaina (-3:00)'],
            ['id' => 'America/Bahia', 'name' => 'Bahia (-3:00)'],
            ['id' => 'America/Belem', 'name' => 'Belem (-3:00)'],
            ['id' => 'America/Buenos_Aires', 'name' => 'Buenos_Aires (-3:00)'],
            ['id' => 'America/Catamarca', 'name' => 'Catamarca (-3:00)'],
            ['id' => 'America/Cayenne', 'name' => 'Cayenne (-3:00)'],
            ['id' => 'America/Cordoba', 'name' => 'Cordoba (-3:00)'],
            ['id' => 'America/Fortaleza', 'name' => 'Fortaleza (-3:00)'],
            ['id' => 'America/Godthab', 'name' => 'Godthab (-3:00)'],
            ['id' => 'America/Jujuy', 'name' => 'Jujuy (-3:00)'],
            ['id' => 'America/Maceio', 'name' => 'Maceio (-3:00)'],
            ['id' => 'America/Mendoza', 'name' => 'Mendoza (-3:00)'],
            ['id' => 'America/Miquelon', 'name' => 'Miquelon (-3:00)'],
            ['id' => 'America/Montevideo', 'name' => 'Montevideo (-3:00)'],
            ['id' => 'America/Paramaribo', 'name' => 'Paramaribo (-3:00)'],
            ['id' => 'America/Recife', 'name' => 'Recife (-3:00)'],
            ['id' => 'America/Rosario', 'name' => 'Rosario (-3:00)'],
            ['id' => 'America/Santarem', 'name' => 'Santarem (-3:00)'],
            ['id' => 'America/Sao_Paulo', 'name' => 'Sao_Paulo (-3:00)'],
            ['id' => 'America/Noronha', 'name' => 'Noronha (-2:00)'],
            ['id' => 'America/Scoresbysund', 'name' => 'Scoresbysund (-1:00)'],
            ['id' => 'America/Danmarkshavn', 'name' => 'Danmarkshavn (+0:00)'],
        ],
        'Canada' => [
            ['id' => 'Canada/Pacific', 'name' => 'Pacific (-8:00)'],
            ['id' => 'Canada/Yukon', 'name' => 'Yukon (-8:00)'],
            ['id' => 'Canada/Mountain', 'name' => 'Mountain (-7:00)'],
            ['id' => 'Canada/Central', 'name' => 'Central (-6:00)'],
            ['id' => 'Canada/East-Saskatchewan', 'name' => 'East-Saskatchewan (-6:00)'],
            ['id' => 'Canada/Saskatchewan', 'name' => 'Saskatchewan (-6:00)'],
            ['id' => 'Canada/Eastern', 'name' => 'Eastern (-5:00)'],
            ['id' => 'Canada/Atlantic', 'name' => 'Atlantic (-4:00)'],
            ['id' => 'Canada/Newfoundland', 'name' => 'Newfoundland (-3:-30)'],
        ],
        'Mexico' => [
            ['id' => 'Mexico/BajaNorte', 'name' => 'BajaNorte (-8:00)'],
            ['id' => 'Mexico/BajaSur', 'name' => 'BajaSur (-7:00)'],
            ['id' => 'Mexico/General', 'name' => 'General (-6:00)'],
        ],
        'Chile' => [
            ['id' => 'Chile/EasterIsland', 'name' => 'EasterIsland (-6:00)'],
            ['id' => 'Chile/Continental', 'name' => 'Continental (-4:00)'],
        ],
        'Antarctica' => [
            ['id' => 'Antarctica/Palmer', 'name' => 'Palmer (-4:00)'],
            ['id' => 'Antarctica/Rothera', 'name' => 'Rothera (-3:00)'],
            ['id' => 'Antarctica/Syowa', 'name' => 'Syowa (+3:00)'],
            ['id' => 'Antarctica/Mawson', 'name' => 'Mawson (+6:00)'],
            ['id' => 'Antarctica/Vostok', 'name' => 'Vostok (+6:00)'],
            ['id' => 'Antarctica/Davis', 'name' => 'Davis (+7:00)'],
            ['id' => 'Antarctica/Casey', 'name' => 'Casey (+8:00)'],
            ['id' => 'Antarctica/DumontDUrville', 'name' => 'DumontDUrville (+10:00)'],
            ['id' => 'Antarctica/McMurdo', 'name' => 'McMurdo (+12:00)'],
            ['id' => 'Antarctica/South_Pole', 'name' => 'South_Pole (+12:00)'],
        ],
        'Atlantic' => [
            ['id' => 'Atlantic/Bermuda', 'name' => 'Bermuda (-4:00)'],
            ['id' => 'Atlantic/Stanley', 'name' => 'Stanley (-4:00)'],
            ['id' => 'Atlantic/South_Georgia', 'name' => 'South_Georgia (-2:00)'],
            ['id' => 'Atlantic/Azores', 'name' => 'Azores (-1:00)'],
            ['id' => 'Atlantic/Cape_Verde', 'name' => 'Cape_Verde (-1:00)'],
            ['id' => 'Atlantic/Canary', 'name' => 'Canary (+0:00)'],
            ['id' => 'Atlantic/Faeroe', 'name' => 'Faeroe (+0:00)'],
            ['id' => 'Atlantic/Faroe', 'name' => 'Faroe (+0:00)'],
            ['id' => 'Atlantic/Madeira', 'name' => 'Madeira (+0:00)'],
            ['id' => 'Atlantic/Reykjavik', 'name' => 'Reykjavik (+0:00)'],
            ['id' => 'Atlantic/St_Helena', 'name' => 'St_Helena (+0:00)'],
            ['id' => 'Atlantic/Jan_Mayen', 'name' => 'Jan_Mayen (+1:00)'],
        ],
        'Brazil' => [
            ['id' => 'Brazil/Acre', 'name' => 'Acre (-4:00)'],
            ['id' => 'Brazil/West', 'name' => 'West (-4:00)'],
            ['id' => 'Brazil/East', 'name' => 'East (-3:00)'],
            ['id' => 'Brazil/DeNoronha', 'name' => 'DeNoronha (-2:00)'],
        ],
        'Africa' => [
            ['id' => 'Africa/Abidjan', 'name' => 'Abidjan (+0:00)'],
            ['id' => 'Africa/Accra', 'name' => 'Accra (+0:00)'],
            ['id' => 'Africa/Bamako', 'name' => 'Bamako (+0:00)'],
            ['id' => 'Africa/Banjul', 'name' => 'Banjul (+0:00)'],
            ['id' => 'Africa/Bissau', 'name' => 'Bissau (+0:00)'],
            ['id' => 'Africa/Casablanca', 'name' => 'Casablanca (+0:00)'],
            ['id' => 'Africa/Conakry', 'name' => 'Conakry (+0:00)'],
            ['id' => 'Africa/Dakar', 'name' => 'Dakar (+0:00)'],
            ['id' => 'Africa/El_Aaiun', 'name' => 'El_Aaiun (+0:00)'],
            ['id' => 'Africa/Freetown', 'name' => 'Freetown (+0:00)'],
            ['id' => 'Africa/Lome', 'name' => 'Lome (+0:00)'],
            ['id' => 'Africa/Monrovia', 'name' => 'Monrovia (+0:00)'],
            ['id' => 'Africa/Nouakchott', 'name' => 'Nouakchott (+0:00)'],
            ['id' => 'Africa/Ouagadougou', 'name' => 'Ouagadougou (+0:00)'],
            ['id' => 'Africa/Sao_Tome', 'name' => 'Sao_Tome (+0:00)'],
            ['id' => 'Africa/Timbuktu', 'name' => 'Timbuktu (+0:00)'],
            ['id' => 'Africa/Algiers', 'name' => 'Algiers (+1:00)'],
            ['id' => 'Africa/Bangui', 'name' => 'Bangui (+1:00)'],
            ['id' => 'Africa/Brazzaville', 'name' => 'Brazzaville (+1:00)'],
            ['id' => 'Africa/Ceuta', 'name' => 'Ceuta (+1:00)'],
            ['id' => 'Africa/Douala', 'name' => 'Douala (+1:00)'],
            ['id' => 'Africa/Kinshasa', 'name' => 'Kinshasa (+1:00)'],
            ['id' => 'Africa/Lagos', 'name' => 'Lagos (+1:00)'],
            ['id' => 'Africa/Libreville', 'name' => 'Libreville (+1:00)'],
            ['id' => 'Africa/Luanda', 'name' => 'Luanda (+1:00)'],
            ['id' => 'Africa/Malabo', 'name' => 'Malabo (+1:00)'],
            ['id' => 'Africa/Ndjamena', 'name' => 'Ndjamena (+1:00)'],
            ['id' => 'Africa/Niamey', 'name' => 'Niamey (+1:00)'],
            ['id' => 'Africa/Porto-Novo', 'name' => 'Porto-Novo (+1:00)'],
            ['id' => 'Africa/Tunis', 'name' => 'Tunis (+1:00)'],
            ['id' => 'Africa/Windhoek', 'name' => 'Windhoek (+1:00)'],
            ['id' => 'Africa/Blantyre', 'name' => 'Blantyre (+2:00)'],
            ['id' => 'Africa/Bujumbura', 'name' => 'Bujumbura (+2:00)'],
            ['id' => 'Africa/Cairo', 'name' => 'Cairo (+2:00)'],
            ['id' => 'Africa/Gaborone', 'name' => 'Gaborone (+2:00)'],
            ['id' => 'Africa/Harare', 'name' => 'Harare (+2:00)'],
            ['id' => 'Africa/Johannesburg', 'name' => 'Johannesburg (+2:00)'],
            ['id' => 'Africa/Kigali', 'name' => 'Kigali (+2:00)'],
            ['id' => 'Africa/Lubumbashi', 'name' => 'Lubumbashi (+2:00)'],
            ['id' => 'Africa/Lusaka', 'name' => 'Lusaka (+2:00)'],
            ['id' => 'Africa/Maputo', 'name' => 'Maputo (+2:00)'],
            ['id' => 'Africa/Maseru', 'name' => 'Maseru (+2:00)'],
            ['id' => 'Africa/Mbabane', 'name' => 'Mbabane (+2:00)'],
            ['id' => 'Africa/Tripoli', 'name' => 'Tripoli (+2:00)'],
            ['id' => 'Africa/Addis_Ababa', 'name' => 'Addis_Ababa (+3:00)'],
            ['id' => 'Africa/Asmara', 'name' => 'Asmara (+3:00)'],
            ['id' => 'Africa/Asmera', 'name' => 'Asmera (+3:00)'],
            ['id' => 'Africa/Dar_es_Salaam', 'name' => 'Dar_es_Salaam (+3:00)'],
            ['id' => 'Africa/Djibouti', 'name' => 'Djibouti (+3:00)'],
            ['id' => 'Africa/Kampala', 'name' => 'Kampala (+3:00)'],
            ['id' => 'Africa/Khartoum', 'name' => 'Khartoum (+3:00)'],
            ['id' => 'Africa/Mogadishu', 'name' => 'Mogadishu (+3:00)'],
            ['id' => 'Africa/Nairobi', 'name' => 'Nairobi (+3:00)'],
        ],
        'Europe' => [
            ['id' => 'Europe/Belfast', 'name' => 'Belfast (+0:00)'],
            ['id' => 'Europe/Dublin', 'name' => 'Dublin (+0:00)'],
            ['id' => 'Europe/Guernsey', 'name' => 'Guernsey (+0:00)'],
            ['id' => 'Europe/Isle_of_Man', 'name' => 'Isle_of_Man (+0:00)'],
            ['id' => 'Europe/Jersey', 'name' => 'Jersey (+0:00)'],
            ['id' => 'Europe/Lisbon', 'name' => 'Lisbon (+0:00)'],
            ['id' => 'Europe/London', 'name' => 'London (+0:00)'],
            ['id' => 'Europe/Amsterdam', 'name' => 'Amsterdam (+1:00)'],
            ['id' => 'Europe/Andorra', 'name' => 'Andorra (+1:00)'],
            ['id' => 'Europe/Belgrade', 'name' => 'Belgrade (+1:00)'],
            ['id' => 'Europe/Berlin', 'name' => 'Berlin (+1:00)'],
            ['id' => 'Europe/Bratislava', 'name' => 'Bratislava (+1:00)'],
            ['id' => 'Europe/Brussels', 'name' => 'Brussels (+1:00)'],
            ['id' => 'Europe/Budapest', 'name' => 'Budapest (+1:00)'],
            ['id' => 'Europe/Copenhagen', 'name' => 'Copenhagen (+1:00)'],
            ['id' => 'Europe/Gibraltar', 'name' => 'Gibraltar (+1:00)'],
            ['id' => 'Europe/Ljubljana', 'name' => 'Ljubljana (+1:00)'],
            ['id' => 'Europe/Luxembourg', 'name' => 'Luxembourg (+1:00)'],
            ['id' => 'Europe/Madrid', 'name' => 'Madrid (+1:00)'],
            ['id' => 'Europe/Malta', 'name' => 'Malta (+1:00)'],
            ['id' => 'Europe/Monaco', 'name' => 'Monaco (+1:00)'],
            ['id' => 'Europe/Oslo', 'name' => 'Oslo (+1:00)'],
            ['id' => 'Europe/Paris', 'name' => 'Paris (+1:00)'],
            ['id' => 'Europe/Podgorica', 'name' => 'Podgorica (+1:00)'],
            ['id' => 'Europe/Prague', 'name' => 'Prague (+1:00)'],
            ['id' => 'Europe/Rome', 'name' => 'Rome (+1:00)'],
            ['id' => 'Europe/San_Marino', 'name' => 'San_Marino (+1:00)'],
            ['id' => 'Europe/Sarajevo', 'name' => 'Sarajevo (+1:00)'],
            ['id' => 'Europe/Skopje', 'name' => 'Skopje (+1:00)'],
            ['id' => 'Europe/Stockholm', 'name' => 'Stockholm (+1:00)'],
            ['id' => 'Europe/Tirane', 'name' => 'Tirane (+1:00)'],
            ['id' => 'Europe/Vaduz', 'name' => 'Vaduz (+1:00)'],
            ['id' => 'Europe/Vatican', 'name' => 'Vatican (+1:00)'],
            ['id' => 'Europe/Vienna', 'name' => 'Vienna (+1:00)'],
            ['id' => 'Europe/Warsaw', 'name' => 'Warsaw (+1:00)'],
            ['id' => 'Europe/Zagreb', 'name' => 'Zagreb (+1:00)'],
            ['id' => 'Europe/Zurich', 'name' => 'Zurich (+1:00)'],
            ['id' => 'Europe/Athens', 'name' => 'Athens (+2:00)'],
            ['id' => 'Europe/Bucharest', 'name' => 'Bucharest (+2:00)'],
            ['id' => 'Europe/Chisinau', 'name' => 'Chisinau (+2:00)'],
            ['id' => 'Europe/Helsinki', 'name' => 'Helsinki (+2:00)'],
            ['id' => 'Europe/Kaliningrad', 'name' => 'Kaliningrad (+2:00)'],
            ['id' => 'Europe/Kiev', 'name' => 'Kiev (+2:00)'],
            ['id' => 'Europe/Mariehamn', 'name' => 'Mariehamn (+2:00)'],
            ['id' => 'Europe/Minsk', 'name' => 'Minsk (+2:00)'],
            ['id' => 'Europe/Nicosia', 'name' => 'Nicosia (+2:00)'],
            ['id' => 'Europe/Riga', 'name' => 'Riga (+2:00)'],
            ['id' => 'Europe/Simferopol', 'name' => 'Simferopol (+2:00)'],
            ['id' => 'Europe/Sofia', 'name' => 'Sofia (+2:00)'],
            ['id' => 'Europe/Tallinn', 'name' => 'Tallinn (+2:00)'],
            ['id' => 'Europe/Tiraspol', 'name' => 'Tiraspol (+2:00)'],
            ['id' => 'Europe/Uzhgorod', 'name' => 'Uzhgorod (+2:00)'],
            ['id' => 'Europe/Vilnius', 'name' => 'Vilnius (+2:00)'],
            ['id' => 'Europe/Zaporozhye', 'name' => 'Zaporozhye (+2:00)'],
            ['id' => 'Europe/Istanbul', 'name' => 'Istanbul (+3:00)'],
            ['id' => 'Europe/Moscow', 'name' => 'Moscow (+3:00)'],
            ['id' => 'Europe/Volgograd', 'name' => 'Volgograd (+3:00)'],
            ['id' => 'Europe/Samara', 'name' => 'Samara (+4:00)'],
        ],
        'Arctic' => [
            ['id' => 'Arctic/Longyearbyen', 'name' => 'Longyearbyen (+1:00)'],

        ],
        'Asia' => [
            ['id' => 'Asia/Amman', 'name' => 'Amman (+2:00)'],
            ['id' => 'Asia/Beirut', 'name' => 'Beirut (+2:00)'],
            ['id' => 'Asia/Damascus', 'name' => 'Damascus (+2:00)'],
            ['id' => 'Asia/Gaza', 'name' => 'Gaza (+2:00)'],
            ['id' => 'Asia/Jerusalem', 'name' => 'Jerusalem (+2:00)'],
            ['id' => 'Asia/Nicosia', 'name' => 'Nicosia (+2:00)'],
            ['id' => 'Asia/Tel_Aviv', 'name' => 'Tel_Aviv (+2:00)'],
            ['id' => 'Asia/Aden', 'name' => 'Aden (+3:00)'],
            ['id' => 'Asia/Baghdad', 'name' => 'Baghdad (+3:00)'],
            ['id' => 'Asia/Bahrain', 'name' => 'Bahrain (+3:00)'],
            ['id' => 'Asia/Istanbul', 'name' => 'Istanbul (+3:00)'],
            ['id' => 'Asia/Kuwait', 'name' => 'Kuwait (+3:00)'],
            ['id' => 'Asia/Qatar', 'name' => 'Qatar (+3:00)'],
            ['id' => 'Asia/Tehran', 'name' => 'Tehran (+3:30)'],
            ['id' => 'Asia/Baku', 'name' => 'Baku (+4:00)'],
            ['id' => 'Asia/Dubai', 'name' => 'Dubai (+4:00)'],
            ['id' => 'Asia/Muscat', 'name' => 'Muscat (+4:00)'],
            ['id' => 'Asia/Tbilisi', 'name' => 'Tbilisi (+4:00)'],
            ['id' => 'Asia/Yerevan', 'name' => 'Yerevan (+4:00)'],
            ['id' => 'Asia/Kabul', 'name' => 'Kabul (+4:30)'],
            ['id' => 'Asia/Aqtau', 'name' => 'Aqtau (+5:00)'],
            ['id' => 'Asia/Aqtobe', 'name' => 'Aqtobe (+5:00)'],
            ['id' => 'Asia/Ashgabat', 'name' => 'Ashgabat (+5:00)'],
            ['id' => 'Asia/Ashkhabad', 'name' => 'Ashkhabad (+5:00)'],
            ['id' => 'Asia/Dushanbe', 'name' => 'Dushanbe (+5:00)'],
            ['id' => 'Asia/Karachi', 'name' => 'Karachi (+5:00)'],
            ['id' => 'Asia/Oral', 'name' => 'Oral (+5:00)'],
            ['id' => 'Asia/Samarkand', 'name' => 'Samarkand (+5:00)'],
            ['id' => 'Asia/Tashkent', 'name' => 'Tashkent (+5:00)'],
            ['id' => 'Asia/Yekaterinburg', 'name' => 'Yekaterinburg (+5:00)'],
            ['id' => 'Asia/Calcutta', 'name' => 'Calcutta (+5:30)'],
            ['id' => 'Asia/Colombo', 'name' => 'Colombo (+5:30)'],
            ['id' => 'Asia/Kolkata', 'name' => 'Kolkata (+5:30)'],
            ['id' => 'Asia/Katmandu', 'name' => 'Katmandu (+5:45)'],
            ['id' => 'Asia/Almaty', 'name' => 'Almaty (+6:00)'],
            ['id' => 'Asia/Bishkek', 'name' => 'Bishkek (+6:00)'],
            ['id' => 'Asia/Dacca', 'name' => 'Dacca (+6:00)'],
            ['id' => 'Asia/Dhaka', 'name' => 'Dhaka (+6:00)'],
            ['id' => 'Asia/Novosibirsk', 'name' => 'Novosibirsk (+6:00)'],
            ['id' => 'Asia/Omsk', 'name' => 'Omsk (+6:00)'],
            ['id' => 'Asia/Qyzylorda', 'name' => 'Qyzylorda (+6:00)'],
            ['id' => 'Asia/Thimbu', 'name' => 'Thimbu (+6:00)'],
            ['id' => 'Asia/Thimphu', 'name' => 'Thimphu (+6:00)'],
            ['id' => 'Asia/Rangoon', 'name' => 'Rangoon (+6:30)'],
            ['id' => 'Asia/Bangkok', 'name' => 'Bangkok (+7:00)'],
            ['id' => 'Asia/Ho_Chi_Minh', 'name' => 'Ho_Chi_Minh (+7:00)'],
            ['id' => 'Asia/Hovd', 'name' => 'Hovd (+7:00)'],
            ['id' => 'Asia/Jakarta', 'name' => 'Jakarta (+7:00)'],
            ['id' => 'Asia/Krasnoyarsk', 'name' => 'Krasnoyarsk (+7:00)'],
            ['id' => 'Asia/Phnom_Penh', 'name' => 'Phnom_Penh (+7:00)'],
            ['id' => 'Asia/Pontianak', 'name' => 'Pontianak (+7:00)'],
            ['id' => 'Asia/Saigon', 'name' => 'Saigon (+7:00)'],
            ['id' => 'Asia/Vientiane', 'name' => 'Vientiane (+7:00)'],
            ['id' => 'Asia/Brunei', 'name' => 'Brunei (+8:00)'],
            ['id' => 'Asia/Choibalsan', 'name' => 'Choibalsan (+8:00)'],
            ['id' => 'Asia/Chongqing', 'name' => 'Chongqing (+8:00)'],
            ['id' => 'Asia/Chungking', 'name' => 'Chungking (+8:00)'],
            ['id' => 'Asia/Harbin', 'name' => 'Harbin (+8:00)'],
            ['id' => 'Asia/Hong_Kong', 'name' => 'Hong_Kong (+8:00)'],
            ['id' => 'Asia/Irkutsk', 'name' => 'Irkutsk (+8:00)'],
            ['id' => 'Asia/Kashgar', 'name' => 'Kashgar (+8:00)'],
            ['id' => 'Asia/Kuala_Lumpur', 'name' => 'Kuala_Lumpur (+8:00)'],
            ['id' => 'Asia/Kuching', 'name' => 'Kuching (+8:00)'],
            ['id' => 'Asia/Macao', 'name' => 'Macao (+8:00)'],
            ['id' => 'Asia/Macau', 'name' => 'Macau (+8:00)'],
            ['id' => 'Asia/Makassar', 'name' => 'Makassar (+8:00)'],
            ['id' => 'Asia/Manila', 'name' => 'Manila (+8:00)'],
            ['id' => 'Asia/Shanghai', 'name' => 'Shanghai (+8:00)'],
            ['id' => 'Asia/Singapore', 'name' => 'Singapore (+8:00)'],
            ['id' => 'Asia/Taipei', 'name' => 'Taipei (+8:00)'],
            ['id' => 'Asia/Ujung_Pandang', 'name' => 'Ujung_Pandang (+8:00)'],
            ['id' => 'Asia/Ulaanbaatar', 'name' => 'Ulaanbaatar (+8:00)'],
            ['id' => 'Asia/Ulan_Bator', 'name' => 'Ulan_Bator (+8:00)'],
            ['id' => 'Asia/Urumqi', 'name' => 'Urumqi (+8:00)'],
            ['id' => 'Asia/Dili', 'name' => 'Dili (+9:00)'],
            ['id' => 'Asia/Jayapura', 'name' => 'Jayapura (+9:00)'],
            ['id' => 'Asia/Pyongyang', 'name' => 'Pyongyang (+9:00)'],
            ['id' => 'Asia/Seoul', 'name' => 'Seoul (+9:00)'],
            ['id' => 'Asia/Tokyo', 'name' => 'Tokyo (+9:00)'],
            ['id' => 'Asia/Yakutsk', 'name' => 'Yakutsk (+9:00)'],
            ['id' => 'Asia/Sakhalin', 'name' => 'Sakhalin (+10:00)'],
            ['id' => 'Asia/Vladivostok', 'name' => 'Vladivostok (+10:00)'],
            ['id' => 'Asia/Magadan', 'name' => 'Magadan (+11:00)'],
            ['id' => 'Asia/Anadyr', 'name' => 'Anadyr (+12:00)'],
            ['id' => 'Asia/Kamchatka', 'name' => 'Kamchatka (+12:00)'],
        ],
        'Indian' => [
            ['id' => 'Indian/Antananarivo', 'name' => 'Antananarivo (+3:00)'],
            ['id' => 'Indian/Comoro', 'name' => 'Comoro (+3:00)'],
            ['id' => 'Indian/Mayotte', 'name' => 'Mayotte (+3:00)'],
            ['id' => 'Indian/Mahe', 'name' => 'Mahe (+4:00)'],
            ['id' => 'Indian/Mauritius', 'name' => 'Mauritius (+4:00)'],
            ['id' => 'Indian/Reunion', 'name' => 'Reunion (+4:00)'],
            ['id' => 'Indian/Kerguelen', 'name' => 'Kerguelen (+5:00)'],
            ['id' => 'Indian/Maldives', 'name' => 'Maldives (+5:00)'],
            ['id' => 'Indian/Chagos', 'name' => 'Chagos (+6:00)'],
            ['id' => 'Indian/Cocos', 'name' => 'Cocos (+6:30)'],
            ['id' => 'Indian/Christmas', 'name' => 'Christmas (+7:00)'],
        ],
        'Australia' => [
            ['id' => 'Australia/Perth', 'name' => 'Perth (+8:00)'],
            ['id' => 'Australia/West', 'name' => 'West (+8:00)'],
            ['id' => 'Australia/Eucla', 'name' => 'Eucla (+8:45)'],
            ['id' => 'Australia/Adelaide', 'name' => 'Adelaide (+9:30)'],
            ['id' => 'Australia/Broken_Hill', 'name' => 'Broken_Hill (+9:30)'],
            ['id' => 'Australia/Darwin', 'name' => 'Darwin (+9:30)'],
            ['id' => 'Australia/North', 'name' => 'North (+9:30)'],
            ['id' => 'Australia/South', 'name' => 'South (+9:30)'],
            ['id' => 'Australia/Yancowinna', 'name' => 'Yancowinna (+9:30)'],
            ['id' => 'Australia/ACT', 'name' => 'ACT (+10:00)'],
            ['id' => 'Australia/Brisbane', 'name' => 'Brisbane (+10:00)'],
            ['id' => 'Australia/Canberra', 'name' => 'Canberra (+10:00)'],
            ['id' => 'Australia/Currie', 'name' => 'Currie (+10:00)'],
            ['id' => 'Australia/Hobart', 'name' => 'Hobart (+10:00)'],
            ['id' => 'Australia/Lindeman', 'name' => 'Lindeman (+10:00)'],
            ['id' => 'Australia/Melbourne', 'name' => 'Melbourne (+10:00)'],
            ['id' => 'Australia/NSW', 'name' => 'NSW (+10:00)'],
            ['id' => 'Australia/Queensland', 'name' => 'Queensland (+10:00)'],
            ['id' => 'Australia/Sydney', 'name' => 'Sydney (+10:00)'],
            ['id' => 'Australia/Tasmania', 'name' => 'Tasmania (+10:00)'],
            ['id' => 'Australia/Victoria', 'name' => 'Victoria (+10:00)'],
            ['id' => 'Australia/LHI', 'name' => 'LHI (+10:30)'],
            ['id' => 'Australia/Lord_Howe', 'name' => 'Lord_Howe (+10:30)'],
        ],
        'Pacific' => [
            ['id' => 'Pacific/Apia', 'name' => 'Apia (+13:00)'],
            ['id' => 'Pacific/Auckland', 'name' => 'Auckland (+12:00)'],
            ['id' => 'Pacific/Bougainville', 'name' => 'Bougainville (+11:00)'],
            ['id' => 'Pacific/Chatham', 'name' => 'Chatham (+12:45)'],
            ['id' => 'Pacific/Chuuk', 'name' => 'Chuuk (+10:00)'],
            ['id' => 'Pacific/Easter', 'name' => 'Easter (−06:00)'],
            ['id' => 'Pacific/Efate', 'name' => 'Efate (+11:00)'],
            ['id' => 'Pacific/Enderbury', 'name' => 'Enderbury (+13:00)'],
            ['id' => 'Pacific/Fakaofo', 'name' => 'Fakaofo (+13:00)'],
            ['id' => 'Pacific/Fiji', 'name' => 'Fiji (+12:00)'],
            ['id' => 'Pacific/Funafuti', 'name' => 'Funafuti (+12:00)'],
            ['id' => 'Pacific/Galapagos', 'name' => 'Galapagos (−06:00)'],
            ['id' => 'Pacific/Gambier', 'name' => 'Gambier (−09:00)'],
            ['id' => 'Pacific/Guadalcanal', 'name' => 'Guadalcanal (+11:00)'],
            ['id' => 'Pacific/Guam', 'name' => 'Guam (+10:00)'],
            ['id' => 'Pacific/Honolulu', 'name' => 'Honolulu (−10:00)'],
            ['id' => 'Pacific/Kiritimati', 'name' => 'Kiritimati (+14:00)'],
            ['id' => 'Pacific/Kosrae', 'name' => 'Kosrae (+11:00)'],
            ['id' => 'Pacific/Kwajalein', 'name' => 'Kwajalein (+12:00)'],
            ['id' => 'Pacific/Majuro', 'name' => 'Majuro (+12:00)'],
            ['id' => 'Pacific/Marquesas', 'name' => 'Marquesas (−09:30)'],
            ['id' => 'Pacific/Nauru', 'name' => 'Nauru (+12:00)'],
            ['id' => 'Pacific/Niue', 'name' => 'Niue (−11:00)'],
            ['id' => 'Pacific/Norfolk', 'name' => 'Norfolk (+11:00)'],
            ['id' => 'Pacific/Noumea', 'name' => 'Noumea (+11:00)'],
            ['id' => 'Pacific/Pago_Pago', 'name' => 'Pago_Pago (−11:00)'],
            ['id' => 'Pacific/Palau', 'name' => 'Palau (+09:00)'],
            ['id' => 'Pacific/Pitcairn', 'name' => 'Pitcairn (−08:00)'],
            ['id' => 'Pacific/Pohnpei', 'name' => 'Pohnpei (+11:00)'],
            ['id' => 'Pacific/Port_Moresby', 'name' => 'Port_Moresby (+10:00)'],
            ['id' => 'Pacific/Rarotonga', 'name' => 'Rarotonga (−10:00)'],
            ['id' => 'Pacific/Tahiti', 'name' => 'Tahiti (−10:00)'],
            ['id' => 'Pacific/Tarawa', 'name' => 'Tarawa (+12:00)'],
            ['id' => 'Pacific/Tongatapu', 'name' => 'Tongatapu (+13:00)'],
            ['id' => 'Pacific/Wake', 'name' => 'Wake (+12:00)'],
            ['id' => 'Pacific/Wallis', 'name' => 'Wallis (+12:00)'],
        ],
    ];
@endphp

<x-mary-select-group
    label="Timezone"
    :options="$options"
    wire:model="{{ $model }}"
/>

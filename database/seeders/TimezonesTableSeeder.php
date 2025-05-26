<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TimezonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('timezones')->delete();
        
        \DB::table('timezones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'zone_id' => '1',
                'country_code' => 'AD',
                'zone_name' => 'Europe/Andorra',
            ),
            1 => 
            array (
                'id' => 2,
                'zone_id' => '2',
                'country_code' => 'AE',
                'zone_name' => 'Asia/Dubai',
            ),
            2 => 
            array (
                'id' => 3,
                'zone_id' => '3',
                'country_code' => 'AF',
                'zone_name' => 'Asia/Kabul',
            ),
            3 => 
            array (
                'id' => 4,
                'zone_id' => '4',
                'country_code' => 'AG',
                'zone_name' => 'America/Antigua',
            ),
            4 => 
            array (
                'id' => 5,
                'zone_id' => '5',
                'country_code' => 'AI',
                'zone_name' => 'America/Anguilla',
            ),
            5 => 
            array (
                'id' => 6,
                'zone_id' => '6',
                'country_code' => 'AL',
                'zone_name' => 'Europe/Tirane',
            ),
            6 => 
            array (
                'id' => 7,
                'zone_id' => '7',
                'country_code' => 'AM',
                'zone_name' => 'Asia/Yerevan',
            ),
            7 => 
            array (
                'id' => 8,
                'zone_id' => '8',
                'country_code' => 'AO',
                'zone_name' => 'Africa/Luanda',
            ),
            8 => 
            array (
                'id' => 9,
                'zone_id' => '9',
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/McMurdo',
            ),
            9 => 
            array (
                'id' => 10,
                'zone_id' => '10',
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/Casey',
            ),
            10 => 
            array (
                'id' => 11,
                'zone_id' => '11',
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/Davis',
            ),
            11 => 
            array (
                'id' => 12,
                'zone_id' => '12',
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/DumontDUrville',
            ),
            12 => 
            array (
                'id' => 13,
                'zone_id' => '13',
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/Mawson',
            ),
            13 => 
            array (
                'id' => 14,
                'zone_id' => '14',
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/Palmer',
            ),
            14 => 
            array (
                'id' => 15,
                'zone_id' => '15',
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/Rothera',
            ),
            15 => 
            array (
                'id' => 16,
                'zone_id' => '16',
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/Syowa',
            ),
            16 => 
            array (
                'id' => 17,
                'zone_id' => '17',
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/Troll',
            ),
            17 => 
            array (
                'id' => 18,
                'zone_id' => '18',
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/Vostok',
            ),
            18 => 
            array (
                'id' => 19,
                'zone_id' => '19',
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Buenos_Aires',
            ),
            19 => 
            array (
                'id' => 20,
                'zone_id' => '20',
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Cordoba',
            ),
            20 => 
            array (
                'id' => 21,
                'zone_id' => '21',
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Salta',
            ),
            21 => 
            array (
                'id' => 22,
                'zone_id' => '22',
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Jujuy',
            ),
            22 => 
            array (
                'id' => 23,
                'zone_id' => '23',
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Tucuman',
            ),
            23 => 
            array (
                'id' => 24,
                'zone_id' => '24',
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Catamarca',
            ),
            24 => 
            array (
                'id' => 25,
                'zone_id' => '25',
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/La_Rioja',
            ),
            25 => 
            array (
                'id' => 26,
                'zone_id' => '26',
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/San_Juan',
            ),
            26 => 
            array (
                'id' => 27,
                'zone_id' => '27',
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Mendoza',
            ),
            27 => 
            array (
                'id' => 28,
                'zone_id' => '28',
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/San_Luis',
            ),
            28 => 
            array (
                'id' => 29,
                'zone_id' => '29',
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Rio_Gallegos',
            ),
            29 => 
            array (
                'id' => 30,
                'zone_id' => '30',
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Ushuaia',
            ),
            30 => 
            array (
                'id' => 31,
                'zone_id' => '31',
                'country_code' => 'AS',
                'zone_name' => 'Pacific/Pago_Pago',
            ),
            31 => 
            array (
                'id' => 32,
                'zone_id' => '32',
                'country_code' => 'AT',
                'zone_name' => 'Europe/Vienna',
            ),
            32 => 
            array (
                'id' => 33,
                'zone_id' => '33',
                'country_code' => 'AU',
                'zone_name' => 'Australia/Lord_Howe',
            ),
            33 => 
            array (
                'id' => 34,
                'zone_id' => '34',
                'country_code' => 'AU',
                'zone_name' => 'Antarctica/Macquarie',
            ),
            34 => 
            array (
                'id' => 35,
                'zone_id' => '35',
                'country_code' => 'AU',
                'zone_name' => 'Australia/Hobart',
            ),
            35 => 
            array (
                'id' => 36,
                'zone_id' => '36',
                'country_code' => 'AU',
                'zone_name' => 'Australia/Currie',
            ),
            36 => 
            array (
                'id' => 37,
                'zone_id' => '37',
                'country_code' => 'AU',
                'zone_name' => 'Australia/Melbourne',
            ),
            37 => 
            array (
                'id' => 38,
                'zone_id' => '38',
                'country_code' => 'AU',
                'zone_name' => 'Australia/Sydney',
            ),
            38 => 
            array (
                'id' => 39,
                'zone_id' => '39',
                'country_code' => 'AU',
                'zone_name' => 'Australia/Broken_Hill',
            ),
            39 => 
            array (
                'id' => 40,
                'zone_id' => '40',
                'country_code' => 'AU',
                'zone_name' => 'Australia/Brisbane',
            ),
            40 => 
            array (
                'id' => 41,
                'zone_id' => '41',
                'country_code' => 'AU',
                'zone_name' => 'Australia/Lindeman',
            ),
            41 => 
            array (
                'id' => 42,
                'zone_id' => '42',
                'country_code' => 'AU',
                'zone_name' => 'Australia/Adelaide',
            ),
            42 => 
            array (
                'id' => 43,
                'zone_id' => '43',
                'country_code' => 'AU',
                'zone_name' => 'Australia/Darwin',
            ),
            43 => 
            array (
                'id' => 44,
                'zone_id' => '44',
                'country_code' => 'AU',
                'zone_name' => 'Australia/Perth',
            ),
            44 => 
            array (
                'id' => 45,
                'zone_id' => '45',
                'country_code' => 'AU',
                'zone_name' => 'Australia/Eucla',
            ),
            45 => 
            array (
                'id' => 46,
                'zone_id' => '46',
                'country_code' => 'AW',
                'zone_name' => 'America/Aruba',
            ),
            46 => 
            array (
                'id' => 47,
                'zone_id' => '47',
                'country_code' => 'AX',
                'zone_name' => 'Europe/Mariehamn',
            ),
            47 => 
            array (
                'id' => 48,
                'zone_id' => '48',
                'country_code' => 'AZ',
                'zone_name' => 'Asia/Baku',
            ),
            48 => 
            array (
                'id' => 49,
                'zone_id' => '49',
                'country_code' => 'BA',
                'zone_name' => 'Europe/Sarajevo',
            ),
            49 => 
            array (
                'id' => 50,
                'zone_id' => '50',
                'country_code' => 'BB',
                'zone_name' => 'America/Barbados',
            ),
            50 => 
            array (
                'id' => 51,
                'zone_id' => '51',
                'country_code' => 'BD',
                'zone_name' => 'Asia/Dhaka',
            ),
            51 => 
            array (
                'id' => 52,
                'zone_id' => '52',
                'country_code' => 'BE',
                'zone_name' => 'Europe/Brussels',
            ),
            52 => 
            array (
                'id' => 53,
                'zone_id' => '53',
                'country_code' => 'BF',
                'zone_name' => 'Africa/Ouagadougou',
            ),
            53 => 
            array (
                'id' => 54,
                'zone_id' => '54',
                'country_code' => 'BG',
                'zone_name' => 'Europe/Sofia',
            ),
            54 => 
            array (
                'id' => 55,
                'zone_id' => '55',
                'country_code' => 'BH',
                'zone_name' => 'Asia/Bahrain',
            ),
            55 => 
            array (
                'id' => 56,
                'zone_id' => '56',
                'country_code' => 'BI',
                'zone_name' => 'Africa/Bujumbura',
            ),
            56 => 
            array (
                'id' => 57,
                'zone_id' => '57',
                'country_code' => 'BJ',
                'zone_name' => 'Africa/Porto-Novo',
            ),
            57 => 
            array (
                'id' => 58,
                'zone_id' => '58',
                'country_code' => 'BL',
                'zone_name' => 'America/St_Barthelemy',
            ),
            58 => 
            array (
                'id' => 59,
                'zone_id' => '59',
                'country_code' => 'BM',
                'zone_name' => 'Atlantic/Bermuda',
            ),
            59 => 
            array (
                'id' => 60,
                'zone_id' => '60',
                'country_code' => 'BN',
                'zone_name' => 'Asia/Brunei',
            ),
            60 => 
            array (
                'id' => 61,
                'zone_id' => '61',
                'country_code' => 'BO',
                'zone_name' => 'America/La_Paz',
            ),
            61 => 
            array (
                'id' => 62,
                'zone_id' => '62',
                'country_code' => 'BQ',
                'zone_name' => 'America/Kralendijk',
            ),
            62 => 
            array (
                'id' => 63,
                'zone_id' => '63',
                'country_code' => 'BR',
                'zone_name' => 'America/Noronha',
            ),
            63 => 
            array (
                'id' => 64,
                'zone_id' => '64',
                'country_code' => 'BR',
                'zone_name' => 'America/Belem',
            ),
            64 => 
            array (
                'id' => 65,
                'zone_id' => '65',
                'country_code' => 'BR',
                'zone_name' => 'America/Fortaleza',
            ),
            65 => 
            array (
                'id' => 66,
                'zone_id' => '66',
                'country_code' => 'BR',
                'zone_name' => 'America/Recife',
            ),
            66 => 
            array (
                'id' => 67,
                'zone_id' => '67',
                'country_code' => 'BR',
                'zone_name' => 'America/Araguaina',
            ),
            67 => 
            array (
                'id' => 68,
                'zone_id' => '68',
                'country_code' => 'BR',
                'zone_name' => 'America/Maceio',
            ),
            68 => 
            array (
                'id' => 69,
                'zone_id' => '69',
                'country_code' => 'BR',
                'zone_name' => 'America/Bahia',
            ),
            69 => 
            array (
                'id' => 70,
                'zone_id' => '70',
                'country_code' => 'BR',
                'zone_name' => 'America/Sao_Paulo',
            ),
            70 => 
            array (
                'id' => 71,
                'zone_id' => '71',
                'country_code' => 'BR',
                'zone_name' => 'America/Campo_Grande',
            ),
            71 => 
            array (
                'id' => 72,
                'zone_id' => '72',
                'country_code' => 'BR',
                'zone_name' => 'America/Cuiaba',
            ),
            72 => 
            array (
                'id' => 73,
                'zone_id' => '73',
                'country_code' => 'BR',
                'zone_name' => 'America/Santarem',
            ),
            73 => 
            array (
                'id' => 74,
                'zone_id' => '74',
                'country_code' => 'BR',
                'zone_name' => 'America/Porto_Velho',
            ),
            74 => 
            array (
                'id' => 75,
                'zone_id' => '75',
                'country_code' => 'BR',
                'zone_name' => 'America/Boa_Vista',
            ),
            75 => 
            array (
                'id' => 76,
                'zone_id' => '76',
                'country_code' => 'BR',
                'zone_name' => 'America/Manaus',
            ),
            76 => 
            array (
                'id' => 77,
                'zone_id' => '77',
                'country_code' => 'BR',
                'zone_name' => 'America/Eirunepe',
            ),
            77 => 
            array (
                'id' => 78,
                'zone_id' => '78',
                'country_code' => 'BR',
                'zone_name' => 'America/Rio_Branco',
            ),
            78 => 
            array (
                'id' => 79,
                'zone_id' => '79',
                'country_code' => 'BS',
                'zone_name' => 'America/Nassau',
            ),
            79 => 
            array (
                'id' => 80,
                'zone_id' => '80',
                'country_code' => 'BT',
                'zone_name' => 'Asia/Thimphu',
            ),
            80 => 
            array (
                'id' => 81,
                'zone_id' => '81',
                'country_code' => 'BW',
                'zone_name' => 'Africa/Gaborone',
            ),
            81 => 
            array (
                'id' => 82,
                'zone_id' => '82',
                'country_code' => 'BY',
                'zone_name' => 'Europe/Minsk',
            ),
            82 => 
            array (
                'id' => 83,
                'zone_id' => '83',
                'country_code' => 'BZ',
                'zone_name' => 'America/Belize',
            ),
            83 => 
            array (
                'id' => 84,
                'zone_id' => '84',
                'country_code' => 'CA',
                'zone_name' => 'America/St_Johns',
            ),
            84 => 
            array (
                'id' => 85,
                'zone_id' => '85',
                'country_code' => 'CA',
                'zone_name' => 'America/Halifax',
            ),
            85 => 
            array (
                'id' => 86,
                'zone_id' => '86',
                'country_code' => 'CA',
                'zone_name' => 'America/Glace_Bay',
            ),
            86 => 
            array (
                'id' => 87,
                'zone_id' => '87',
                'country_code' => 'CA',
                'zone_name' => 'America/Moncton',
            ),
            87 => 
            array (
                'id' => 88,
                'zone_id' => '88',
                'country_code' => 'CA',
                'zone_name' => 'America/Goose_Bay',
            ),
            88 => 
            array (
                'id' => 89,
                'zone_id' => '89',
                'country_code' => 'CA',
                'zone_name' => 'America/Blanc-Sablon',
            ),
            89 => 
            array (
                'id' => 90,
                'zone_id' => '90',
                'country_code' => 'CA',
                'zone_name' => 'America/Toronto',
            ),
            90 => 
            array (
                'id' => 91,
                'zone_id' => '91',
                'country_code' => 'CA',
                'zone_name' => 'America/Nipigon',
            ),
            91 => 
            array (
                'id' => 92,
                'zone_id' => '92',
                'country_code' => 'CA',
                'zone_name' => 'America/Thunder_Bay',
            ),
            92 => 
            array (
                'id' => 93,
                'zone_id' => '93',
                'country_code' => 'CA',
                'zone_name' => 'America/Iqaluit',
            ),
            93 => 
            array (
                'id' => 94,
                'zone_id' => '94',
                'country_code' => 'CA',
                'zone_name' => 'America/Pangnirtung',
            ),
            94 => 
            array (
                'id' => 95,
                'zone_id' => '95',
                'country_code' => 'CA',
                'zone_name' => 'America/Atikokan',
            ),
            95 => 
            array (
                'id' => 96,
                'zone_id' => '96',
                'country_code' => 'CA',
                'zone_name' => 'America/Winnipeg',
            ),
            96 => 
            array (
                'id' => 97,
                'zone_id' => '97',
                'country_code' => 'CA',
                'zone_name' => 'America/Rainy_River',
            ),
            97 => 
            array (
                'id' => 98,
                'zone_id' => '98',
                'country_code' => 'CA',
                'zone_name' => 'America/Resolute',
            ),
            98 => 
            array (
                'id' => 99,
                'zone_id' => '99',
                'country_code' => 'CA',
                'zone_name' => 'America/Rankin_Inlet',
            ),
            99 => 
            array (
                'id' => 100,
                'zone_id' => '100',
                'country_code' => 'CA',
                'zone_name' => 'America/Regina',
            ),
            100 => 
            array (
                'id' => 101,
                'zone_id' => '101',
                'country_code' => 'CA',
                'zone_name' => 'America/Swift_Current',
            ),
            101 => 
            array (
                'id' => 102,
                'zone_id' => '102',
                'country_code' => 'CA',
                'zone_name' => 'America/Edmonton',
            ),
            102 => 
            array (
                'id' => 103,
                'zone_id' => '103',
                'country_code' => 'CA',
                'zone_name' => 'America/Cambridge_Bay',
            ),
            103 => 
            array (
                'id' => 104,
                'zone_id' => '104',
                'country_code' => 'CA',
                'zone_name' => 'America/Yellowknife',
            ),
            104 => 
            array (
                'id' => 105,
                'zone_id' => '105',
                'country_code' => 'CA',
                'zone_name' => 'America/Inuvik',
            ),
            105 => 
            array (
                'id' => 106,
                'zone_id' => '106',
                'country_code' => 'CA',
                'zone_name' => 'America/Creston',
            ),
            106 => 
            array (
                'id' => 107,
                'zone_id' => '107',
                'country_code' => 'CA',
                'zone_name' => 'America/Dawson_Creek',
            ),
            107 => 
            array (
                'id' => 108,
                'zone_id' => '108',
                'country_code' => 'CA',
                'zone_name' => 'America/Fort_Nelson',
            ),
            108 => 
            array (
                'id' => 109,
                'zone_id' => '109',
                'country_code' => 'CA',
                'zone_name' => 'America/Vancouver',
            ),
            109 => 
            array (
                'id' => 110,
                'zone_id' => '110',
                'country_code' => 'CA',
                'zone_name' => 'America/Whitehorse',
            ),
            110 => 
            array (
                'id' => 111,
                'zone_id' => '111',
                'country_code' => 'CA',
                'zone_name' => 'America/Dawson',
            ),
            111 => 
            array (
                'id' => 112,
                'zone_id' => '112',
                'country_code' => 'CC',
                'zone_name' => 'Indian/Cocos',
            ),
            112 => 
            array (
                'id' => 113,
                'zone_id' => '113',
                'country_code' => 'CD',
                'zone_name' => 'Africa/Kinshasa',
            ),
            113 => 
            array (
                'id' => 114,
                'zone_id' => '114',
                'country_code' => 'CD',
                'zone_name' => 'Africa/Lubumbashi',
            ),
            114 => 
            array (
                'id' => 115,
                'zone_id' => '115',
                'country_code' => 'CF',
                'zone_name' => 'Africa/Bangui',
            ),
            115 => 
            array (
                'id' => 116,
                'zone_id' => '116',
                'country_code' => 'CG',
                'zone_name' => 'Africa/Brazzaville',
            ),
            116 => 
            array (
                'id' => 117,
                'zone_id' => '117',
                'country_code' => 'CH',
                'zone_name' => 'Europe/Zurich',
            ),
            117 => 
            array (
                'id' => 118,
                'zone_id' => '118',
                'country_code' => 'CI',
                'zone_name' => 'Africa/Abidjan',
            ),
            118 => 
            array (
                'id' => 119,
                'zone_id' => '119',
                'country_code' => 'CK',
                'zone_name' => 'Pacific/Rarotonga',
            ),
            119 => 
            array (
                'id' => 120,
                'zone_id' => '120',
                'country_code' => 'CL',
                'zone_name' => 'America/Santiago',
            ),
            120 => 
            array (
                'id' => 121,
                'zone_id' => '121',
                'country_code' => 'CL',
                'zone_name' => 'America/Punta_Arenas',
            ),
            121 => 
            array (
                'id' => 122,
                'zone_id' => '122',
                'country_code' => 'CL',
                'zone_name' => 'Pacific/Easter',
            ),
            122 => 
            array (
                'id' => 123,
                'zone_id' => '123',
                'country_code' => 'CM',
                'zone_name' => 'Africa/Douala',
            ),
            123 => 
            array (
                'id' => 124,
                'zone_id' => '124',
                'country_code' => 'CN',
                'zone_name' => 'Asia/Shanghai',
            ),
            124 => 
            array (
                'id' => 125,
                'zone_id' => '125',
                'country_code' => 'CN',
                'zone_name' => 'Asia/Urumqi',
            ),
            125 => 
            array (
                'id' => 126,
                'zone_id' => '126',
                'country_code' => 'CO',
                'zone_name' => 'America/Bogota',
            ),
            126 => 
            array (
                'id' => 127,
                'zone_id' => '127',
                'country_code' => 'CR',
                'zone_name' => 'America/Costa_Rica',
            ),
            127 => 
            array (
                'id' => 128,
                'zone_id' => '128',
                'country_code' => 'CU',
                'zone_name' => 'America/Havana',
            ),
            128 => 
            array (
                'id' => 129,
                'zone_id' => '129',
                'country_code' => 'CV',
                'zone_name' => 'Atlantic/Cape_Verde',
            ),
            129 => 
            array (
                'id' => 130,
                'zone_id' => '130',
                'country_code' => 'CW',
                'zone_name' => 'America/Curacao',
            ),
            130 => 
            array (
                'id' => 131,
                'zone_id' => '131',
                'country_code' => 'CX',
                'zone_name' => 'Indian/Christmas',
            ),
            131 => 
            array (
                'id' => 132,
                'zone_id' => '132',
                'country_code' => 'CY',
                'zone_name' => 'Asia/Nicosia',
            ),
            132 => 
            array (
                'id' => 133,
                'zone_id' => '133',
                'country_code' => 'CY',
                'zone_name' => 'Asia/Famagusta',
            ),
            133 => 
            array (
                'id' => 134,
                'zone_id' => '134',
                'country_code' => 'CZ',
                'zone_name' => 'Europe/Prague',
            ),
            134 => 
            array (
                'id' => 135,
                'zone_id' => '135',
                'country_code' => 'DE',
                'zone_name' => 'Europe/Berlin',
            ),
            135 => 
            array (
                'id' => 136,
                'zone_id' => '136',
                'country_code' => 'DE',
                'zone_name' => 'Europe/Busingen',
            ),
            136 => 
            array (
                'id' => 137,
                'zone_id' => '137',
                'country_code' => 'DJ',
                'zone_name' => 'Africa/Djibouti',
            ),
            137 => 
            array (
                'id' => 138,
                'zone_id' => '138',
                'country_code' => 'DK',
                'zone_name' => 'Europe/Copenhagen',
            ),
            138 => 
            array (
                'id' => 139,
                'zone_id' => '139',
                'country_code' => 'DM',
                'zone_name' => 'America/Dominica',
            ),
            139 => 
            array (
                'id' => 140,
                'zone_id' => '140',
                'country_code' => 'DO',
                'zone_name' => 'America/Santo_Domingo',
            ),
            140 => 
            array (
                'id' => 141,
                'zone_id' => '141',
                'country_code' => 'DZ',
                'zone_name' => 'Africa/Algiers',
            ),
            141 => 
            array (
                'id' => 142,
                'zone_id' => '142',
                'country_code' => 'EC',
                'zone_name' => 'America/Guayaquil',
            ),
            142 => 
            array (
                'id' => 143,
                'zone_id' => '143',
                'country_code' => 'EC',
                'zone_name' => 'Pacific/Galapagos',
            ),
            143 => 
            array (
                'id' => 144,
                'zone_id' => '144',
                'country_code' => 'EE',
                'zone_name' => 'Europe/Tallinn',
            ),
            144 => 
            array (
                'id' => 145,
                'zone_id' => '145',
                'country_code' => 'EG',
                'zone_name' => 'Africa/Cairo',
            ),
            145 => 
            array (
                'id' => 146,
                'zone_id' => '146',
                'country_code' => 'EH',
                'zone_name' => 'Africa/El_Aaiun',
            ),
            146 => 
            array (
                'id' => 147,
                'zone_id' => '147',
                'country_code' => 'ER',
                'zone_name' => 'Africa/Asmara',
            ),
            147 => 
            array (
                'id' => 148,
                'zone_id' => '148',
                'country_code' => 'ES',
                'zone_name' => 'Europe/Madrid',
            ),
            148 => 
            array (
                'id' => 149,
                'zone_id' => '149',
                'country_code' => 'ES',
                'zone_name' => 'Africa/Ceuta',
            ),
            149 => 
            array (
                'id' => 150,
                'zone_id' => '150',
                'country_code' => 'ES',
                'zone_name' => 'Atlantic/Canary',
            ),
            150 => 
            array (
                'id' => 151,
                'zone_id' => '151',
                'country_code' => 'ET',
                'zone_name' => 'Africa/Addis_Ababa',
            ),
            151 => 
            array (
                'id' => 152,
                'zone_id' => '152',
                'country_code' => 'FI',
                'zone_name' => 'Europe/Helsinki',
            ),
            152 => 
            array (
                'id' => 153,
                'zone_id' => '153',
                'country_code' => 'FJ',
                'zone_name' => 'Pacific/Fiji',
            ),
            153 => 
            array (
                'id' => 154,
                'zone_id' => '154',
                'country_code' => 'FK',
                'zone_name' => 'Atlantic/Stanley',
            ),
            154 => 
            array (
                'id' => 155,
                'zone_id' => '155',
                'country_code' => 'FM',
                'zone_name' => 'Pacific/Chuuk',
            ),
            155 => 
            array (
                'id' => 156,
                'zone_id' => '156',
                'country_code' => 'FM',
                'zone_name' => 'Pacific/Pohnpei',
            ),
            156 => 
            array (
                'id' => 157,
                'zone_id' => '157',
                'country_code' => 'FM',
                'zone_name' => 'Pacific/Kosrae',
            ),
            157 => 
            array (
                'id' => 158,
                'zone_id' => '158',
                'country_code' => 'FO',
                'zone_name' => 'Atlantic/Faroe',
            ),
            158 => 
            array (
                'id' => 159,
                'zone_id' => '159',
                'country_code' => 'FR',
                'zone_name' => 'Europe/Paris',
            ),
            159 => 
            array (
                'id' => 160,
                'zone_id' => '160',
                'country_code' => 'GA',
                'zone_name' => 'Africa/Libreville',
            ),
            160 => 
            array (
                'id' => 161,
                'zone_id' => '161',
                'country_code' => 'GB',
                'zone_name' => 'Europe/London',
            ),
            161 => 
            array (
                'id' => 162,
                'zone_id' => '162',
                'country_code' => 'GD',
                'zone_name' => 'America/Grenada',
            ),
            162 => 
            array (
                'id' => 163,
                'zone_id' => '163',
                'country_code' => 'GE',
                'zone_name' => 'Asia/Tbilisi',
            ),
            163 => 
            array (
                'id' => 164,
                'zone_id' => '164',
                'country_code' => 'GF',
                'zone_name' => 'America/Cayenne',
            ),
            164 => 
            array (
                'id' => 165,
                'zone_id' => '165',
                'country_code' => 'GG',
                'zone_name' => 'Europe/Guernsey',
            ),
            165 => 
            array (
                'id' => 166,
                'zone_id' => '166',
                'country_code' => 'GH',
                'zone_name' => 'Africa/Accra',
            ),
            166 => 
            array (
                'id' => 167,
                'zone_id' => '167',
                'country_code' => 'GI',
                'zone_name' => 'Europe/Gibraltar',
            ),
            167 => 
            array (
                'id' => 168,
                'zone_id' => '168',
                'country_code' => 'GL',
                'zone_name' => 'America/Godthab',
            ),
            168 => 
            array (
                'id' => 169,
                'zone_id' => '169',
                'country_code' => 'GL',
                'zone_name' => 'America/Danmarkshavn',
            ),
            169 => 
            array (
                'id' => 170,
                'zone_id' => '170',
                'country_code' => 'GL',
                'zone_name' => 'America/Scoresbysund',
            ),
            170 => 
            array (
                'id' => 171,
                'zone_id' => '171',
                'country_code' => 'GL',
                'zone_name' => 'America/Thule',
            ),
            171 => 
            array (
                'id' => 172,
                'zone_id' => '172',
                'country_code' => 'GM',
                'zone_name' => 'Africa/Banjul',
            ),
            172 => 
            array (
                'id' => 173,
                'zone_id' => '173',
                'country_code' => 'GN',
                'zone_name' => 'Africa/Conakry',
            ),
            173 => 
            array (
                'id' => 174,
                'zone_id' => '174',
                'country_code' => 'GP',
                'zone_name' => 'America/Guadeloupe',
            ),
            174 => 
            array (
                'id' => 175,
                'zone_id' => '175',
                'country_code' => 'GQ',
                'zone_name' => 'Africa/Malabo',
            ),
            175 => 
            array (
                'id' => 176,
                'zone_id' => '176',
                'country_code' => 'GR',
                'zone_name' => 'Europe/Athens',
            ),
            176 => 
            array (
                'id' => 177,
                'zone_id' => '177',
                'country_code' => 'GS',
                'zone_name' => 'Atlantic/South_Georgia',
            ),
            177 => 
            array (
                'id' => 178,
                'zone_id' => '178',
                'country_code' => 'GT',
                'zone_name' => 'America/Guatemala',
            ),
            178 => 
            array (
                'id' => 179,
                'zone_id' => '179',
                'country_code' => 'GU',
                'zone_name' => 'Pacific/Guam',
            ),
            179 => 
            array (
                'id' => 180,
                'zone_id' => '180',
                'country_code' => 'GW',
                'zone_name' => 'Africa/Bissau',
            ),
            180 => 
            array (
                'id' => 181,
                'zone_id' => '181',
                'country_code' => 'GY',
                'zone_name' => 'America/Guyana',
            ),
            181 => 
            array (
                'id' => 182,
                'zone_id' => '182',
                'country_code' => 'HK',
                'zone_name' => 'Asia/Hong_Kong',
            ),
            182 => 
            array (
                'id' => 183,
                'zone_id' => '183',
                'country_code' => 'HN',
                'zone_name' => 'America/Tegucigalpa',
            ),
            183 => 
            array (
                'id' => 184,
                'zone_id' => '184',
                'country_code' => 'HR',
                'zone_name' => 'Europe/Zagreb',
            ),
            184 => 
            array (
                'id' => 185,
                'zone_id' => '185',
                'country_code' => 'HT',
                'zone_name' => 'America/Port-au-Prince',
            ),
            185 => 
            array (
                'id' => 186,
                'zone_id' => '186',
                'country_code' => 'HU',
                'zone_name' => 'Europe/Budapest',
            ),
            186 => 
            array (
                'id' => 187,
                'zone_id' => '187',
                'country_code' => 'ID',
                'zone_name' => 'Asia/Jakarta',
            ),
            187 => 
            array (
                'id' => 188,
                'zone_id' => '188',
                'country_code' => 'ID',
                'zone_name' => 'Asia/Pontianak',
            ),
            188 => 
            array (
                'id' => 189,
                'zone_id' => '189',
                'country_code' => 'ID',
                'zone_name' => 'Asia/Makassar',
            ),
            189 => 
            array (
                'id' => 190,
                'zone_id' => '190',
                'country_code' => 'ID',
                'zone_name' => 'Asia/Jayapura',
            ),
            190 => 
            array (
                'id' => 191,
                'zone_id' => '191',
                'country_code' => 'IE',
                'zone_name' => 'Europe/Dublin',
            ),
            191 => 
            array (
                'id' => 192,
                'zone_id' => '192',
                'country_code' => 'IL',
                'zone_name' => 'Asia/Jerusalem',
            ),
            192 => 
            array (
                'id' => 193,
                'zone_id' => '193',
                'country_code' => 'IM',
                'zone_name' => 'Europe/Isle_of_Man',
            ),
            193 => 
            array (
                'id' => 194,
                'zone_id' => '194',
                'country_code' => 'IN',
                'zone_name' => 'Asia/Kolkata',
            ),
            194 => 
            array (
                'id' => 195,
                'zone_id' => '195',
                'country_code' => 'IO',
                'zone_name' => 'Indian/Chagos',
            ),
            195 => 
            array (
                'id' => 196,
                'zone_id' => '196',
                'country_code' => 'IQ',
                'zone_name' => 'Asia/Baghdad',
            ),
            196 => 
            array (
                'id' => 197,
                'zone_id' => '197',
                'country_code' => 'IR',
                'zone_name' => 'Asia/Tehran',
            ),
            197 => 
            array (
                'id' => 198,
                'zone_id' => '198',
                'country_code' => 'IS',
                'zone_name' => 'Atlantic/Reykjavik',
            ),
            198 => 
            array (
                'id' => 199,
                'zone_id' => '199',
                'country_code' => 'IT',
                'zone_name' => 'Europe/Rome',
            ),
            199 => 
            array (
                'id' => 200,
                'zone_id' => '200',
                'country_code' => 'JE',
                'zone_name' => 'Europe/Jersey',
            ),
            200 => 
            array (
                'id' => 201,
                'zone_id' => '201',
                'country_code' => 'JM',
                'zone_name' => 'America/Jamaica',
            ),
            201 => 
            array (
                'id' => 202,
                'zone_id' => '202',
                'country_code' => 'JO',
                'zone_name' => 'Asia/Amman',
            ),
            202 => 
            array (
                'id' => 203,
                'zone_id' => '203',
                'country_code' => 'JP',
                'zone_name' => 'Asia/Tokyo',
            ),
            203 => 
            array (
                'id' => 204,
                'zone_id' => '204',
                'country_code' => 'KE',
                'zone_name' => 'Africa/Nairobi',
            ),
            204 => 
            array (
                'id' => 205,
                'zone_id' => '205',
                'country_code' => 'KG',
                'zone_name' => 'Asia/Bishkek',
            ),
            205 => 
            array (
                'id' => 206,
                'zone_id' => '206',
                'country_code' => 'KH',
                'zone_name' => 'Asia/Phnom_Penh',
            ),
            206 => 
            array (
                'id' => 207,
                'zone_id' => '207',
                'country_code' => 'KI',
                'zone_name' => 'Pacific/Tarawa',
            ),
            207 => 
            array (
                'id' => 208,
                'zone_id' => '208',
                'country_code' => 'KI',
                'zone_name' => 'Pacific/Enderbury',
            ),
            208 => 
            array (
                'id' => 209,
                'zone_id' => '209',
                'country_code' => 'KI',
                'zone_name' => 'Pacific/Kiritimati',
            ),
            209 => 
            array (
                'id' => 210,
                'zone_id' => '210',
                'country_code' => 'KM',
                'zone_name' => 'Indian/Comoro',
            ),
            210 => 
            array (
                'id' => 211,
                'zone_id' => '211',
                'country_code' => 'KN',
                'zone_name' => 'America/St_Kitts',
            ),
            211 => 
            array (
                'id' => 212,
                'zone_id' => '212',
                'country_code' => 'KP',
                'zone_name' => 'Asia/Pyongyang',
            ),
            212 => 
            array (
                'id' => 213,
                'zone_id' => '213',
                'country_code' => 'KR',
                'zone_name' => 'Asia/Seoul',
            ),
            213 => 
            array (
                'id' => 214,
                'zone_id' => '214',
                'country_code' => 'KW',
                'zone_name' => 'Asia/Kuwait',
            ),
            214 => 
            array (
                'id' => 215,
                'zone_id' => '215',
                'country_code' => 'KY',
                'zone_name' => 'America/Cayman',
            ),
            215 => 
            array (
                'id' => 216,
                'zone_id' => '216',
                'country_code' => 'KZ',
                'zone_name' => 'Asia/Almaty',
            ),
            216 => 
            array (
                'id' => 217,
                'zone_id' => '217',
                'country_code' => 'KZ',
                'zone_name' => 'Asia/Qyzylorda',
            ),
            217 => 
            array (
                'id' => 218,
                'zone_id' => '218',
                'country_code' => 'KZ',
                'zone_name' => 'Asia/Qostanay',
            ),
            218 => 
            array (
                'id' => 219,
                'zone_id' => '219',
                'country_code' => 'KZ',
                'zone_name' => 'Asia/Aqtobe',
            ),
            219 => 
            array (
                'id' => 220,
                'zone_id' => '220',
                'country_code' => 'KZ',
                'zone_name' => 'Asia/Aqtau',
            ),
            220 => 
            array (
                'id' => 221,
                'zone_id' => '221',
                'country_code' => 'KZ',
                'zone_name' => 'Asia/Atyrau',
            ),
            221 => 
            array (
                'id' => 222,
                'zone_id' => '222',
                'country_code' => 'KZ',
                'zone_name' => 'Asia/Oral',
            ),
            222 => 
            array (
                'id' => 223,
                'zone_id' => '223',
                'country_code' => 'LA',
                'zone_name' => 'Asia/Vientiane',
            ),
            223 => 
            array (
                'id' => 224,
                'zone_id' => '224',
                'country_code' => 'LB',
                'zone_name' => 'Asia/Beirut',
            ),
            224 => 
            array (
                'id' => 225,
                'zone_id' => '225',
                'country_code' => 'LC',
                'zone_name' => 'America/St_Lucia',
            ),
            225 => 
            array (
                'id' => 226,
                'zone_id' => '226',
                'country_code' => 'LI',
                'zone_name' => 'Europe/Vaduz',
            ),
            226 => 
            array (
                'id' => 227,
                'zone_id' => '227',
                'country_code' => 'LK',
                'zone_name' => 'Asia/Colombo',
            ),
            227 => 
            array (
                'id' => 228,
                'zone_id' => '228',
                'country_code' => 'LR',
                'zone_name' => 'Africa/Monrovia',
            ),
            228 => 
            array (
                'id' => 229,
                'zone_id' => '229',
                'country_code' => 'LS',
                'zone_name' => 'Africa/Maseru',
            ),
            229 => 
            array (
                'id' => 230,
                'zone_id' => '230',
                'country_code' => 'LT',
                'zone_name' => 'Europe/Vilnius',
            ),
            230 => 
            array (
                'id' => 231,
                'zone_id' => '231',
                'country_code' => 'LU',
                'zone_name' => 'Europe/Luxembourg',
            ),
            231 => 
            array (
                'id' => 232,
                'zone_id' => '232',
                'country_code' => 'LV',
                'zone_name' => 'Europe/Riga',
            ),
            232 => 
            array (
                'id' => 233,
                'zone_id' => '233',
                'country_code' => 'LY',
                'zone_name' => 'Africa/Tripoli',
            ),
            233 => 
            array (
                'id' => 234,
                'zone_id' => '234',
                'country_code' => 'MA',
                'zone_name' => 'Africa/Casablanca',
            ),
            234 => 
            array (
                'id' => 235,
                'zone_id' => '235',
                'country_code' => 'MC',
                'zone_name' => 'Europe/Monaco',
            ),
            235 => 
            array (
                'id' => 236,
                'zone_id' => '236',
                'country_code' => 'MD',
                'zone_name' => 'Europe/Chisinau',
            ),
            236 => 
            array (
                'id' => 237,
                'zone_id' => '237',
                'country_code' => 'ME',
                'zone_name' => 'Europe/Podgorica',
            ),
            237 => 
            array (
                'id' => 238,
                'zone_id' => '238',
                'country_code' => 'MF',
                'zone_name' => 'America/Marigot',
            ),
            238 => 
            array (
                'id' => 239,
                'zone_id' => '239',
                'country_code' => 'MG',
                'zone_name' => 'Indian/Antananarivo',
            ),
            239 => 
            array (
                'id' => 240,
                'zone_id' => '240',
                'country_code' => 'MH',
                'zone_name' => 'Pacific/Majuro',
            ),
            240 => 
            array (
                'id' => 241,
                'zone_id' => '241',
                'country_code' => 'MH',
                'zone_name' => 'Pacific/Kwajalein',
            ),
            241 => 
            array (
                'id' => 242,
                'zone_id' => '242',
                'country_code' => 'MK',
                'zone_name' => 'Europe/Skopje',
            ),
            242 => 
            array (
                'id' => 243,
                'zone_id' => '243',
                'country_code' => 'ML',
                'zone_name' => 'Africa/Bamako',
            ),
            243 => 
            array (
                'id' => 244,
                'zone_id' => '244',
                'country_code' => 'MM',
                'zone_name' => 'Asia/Yangon',
            ),
            244 => 
            array (
                'id' => 245,
                'zone_id' => '245',
                'country_code' => 'MN',
                'zone_name' => 'Asia/Ulaanbaatar',
            ),
            245 => 
            array (
                'id' => 246,
                'zone_id' => '246',
                'country_code' => 'MN',
                'zone_name' => 'Asia/Hovd',
            ),
            246 => 
            array (
                'id' => 247,
                'zone_id' => '247',
                'country_code' => 'MN',
                'zone_name' => 'Asia/Choibalsan',
            ),
            247 => 
            array (
                'id' => 248,
                'zone_id' => '248',
                'country_code' => 'MO',
                'zone_name' => 'Asia/Macau',
            ),
            248 => 
            array (
                'id' => 249,
                'zone_id' => '249',
                'country_code' => 'MP',
                'zone_name' => 'Pacific/Saipan',
            ),
            249 => 
            array (
                'id' => 250,
                'zone_id' => '250',
                'country_code' => 'MQ',
                'zone_name' => 'America/Martinique',
            ),
            250 => 
            array (
                'id' => 251,
                'zone_id' => '251',
                'country_code' => 'MR',
                'zone_name' => 'Africa/Nouakchott',
            ),
            251 => 
            array (
                'id' => 252,
                'zone_id' => '252',
                'country_code' => 'MS',
                'zone_name' => 'America/Montserrat',
            ),
            252 => 
            array (
                'id' => 253,
                'zone_id' => '253',
                'country_code' => 'MT',
                'zone_name' => 'Europe/Malta',
            ),
            253 => 
            array (
                'id' => 254,
                'zone_id' => '254',
                'country_code' => 'MU',
                'zone_name' => 'Indian/Mauritius',
            ),
            254 => 
            array (
                'id' => 255,
                'zone_id' => '255',
                'country_code' => 'MV',
                'zone_name' => 'Indian/Maldives',
            ),
            255 => 
            array (
                'id' => 256,
                'zone_id' => '256',
                'country_code' => 'MW',
                'zone_name' => 'Africa/Blantyre',
            ),
            256 => 
            array (
                'id' => 257,
                'zone_id' => '257',
                'country_code' => 'MX',
                'zone_name' => 'America/Mexico_City',
            ),
            257 => 
            array (
                'id' => 258,
                'zone_id' => '258',
                'country_code' => 'MX',
                'zone_name' => 'America/Cancun',
            ),
            258 => 
            array (
                'id' => 259,
                'zone_id' => '259',
                'country_code' => 'MX',
                'zone_name' => 'America/Merida',
            ),
            259 => 
            array (
                'id' => 260,
                'zone_id' => '260',
                'country_code' => 'MX',
                'zone_name' => 'America/Monterrey',
            ),
            260 => 
            array (
                'id' => 261,
                'zone_id' => '261',
                'country_code' => 'MX',
                'zone_name' => 'America/Matamoros',
            ),
            261 => 
            array (
                'id' => 262,
                'zone_id' => '262',
                'country_code' => 'MX',
                'zone_name' => 'America/Mazatlan',
            ),
            262 => 
            array (
                'id' => 263,
                'zone_id' => '263',
                'country_code' => 'MX',
                'zone_name' => 'America/Chihuahua',
            ),
            263 => 
            array (
                'id' => 264,
                'zone_id' => '264',
                'country_code' => 'MX',
                'zone_name' => 'America/Ojinaga',
            ),
            264 => 
            array (
                'id' => 265,
                'zone_id' => '265',
                'country_code' => 'MX',
                'zone_name' => 'America/Hermosillo',
            ),
            265 => 
            array (
                'id' => 266,
                'zone_id' => '266',
                'country_code' => 'MX',
                'zone_name' => 'America/Tijuana',
            ),
            266 => 
            array (
                'id' => 267,
                'zone_id' => '267',
                'country_code' => 'MX',
                'zone_name' => 'America/Bahia_Banderas',
            ),
            267 => 
            array (
                'id' => 268,
                'zone_id' => '268',
                'country_code' => 'MY',
                'zone_name' => 'Asia/Kuala_Lumpur',
            ),
            268 => 
            array (
                'id' => 269,
                'zone_id' => '269',
                'country_code' => 'MY',
                'zone_name' => 'Asia/Kuching',
            ),
            269 => 
            array (
                'id' => 270,
                'zone_id' => '270',
                'country_code' => 'MZ',
                'zone_name' => 'Africa/Maputo',
            ),
            270 => 
            array (
                'id' => 271,
                'zone_id' => '271',
                'country_code' => 'NA',
                'zone_name' => 'Africa/Windhoek',
            ),
            271 => 
            array (
                'id' => 272,
                'zone_id' => '272',
                'country_code' => 'NC',
                'zone_name' => 'Pacific/Noumea',
            ),
            272 => 
            array (
                'id' => 273,
                'zone_id' => '273',
                'country_code' => 'NE',
                'zone_name' => 'Africa/Niamey',
            ),
            273 => 
            array (
                'id' => 274,
                'zone_id' => '274',
                'country_code' => 'NF',
                'zone_name' => 'Pacific/Norfolk',
            ),
            274 => 
            array (
                'id' => 275,
                'zone_id' => '275',
                'country_code' => 'NG',
                'zone_name' => 'Africa/Lagos',
            ),
            275 => 
            array (
                'id' => 276,
                'zone_id' => '276',
                'country_code' => 'NI',
                'zone_name' => 'America/Managua',
            ),
            276 => 
            array (
                'id' => 277,
                'zone_id' => '277',
                'country_code' => 'NL',
                'zone_name' => 'Europe/Amsterdam',
            ),
            277 => 
            array (
                'id' => 278,
                'zone_id' => '278',
                'country_code' => 'NO',
                'zone_name' => 'Europe/Oslo',
            ),
            278 => 
            array (
                'id' => 279,
                'zone_id' => '279',
                'country_code' => 'NP',
                'zone_name' => 'Asia/Kathmandu',
            ),
            279 => 
            array (
                'id' => 280,
                'zone_id' => '280',
                'country_code' => 'NR',
                'zone_name' => 'Pacific/Nauru',
            ),
            280 => 
            array (
                'id' => 281,
                'zone_id' => '281',
                'country_code' => 'NU',
                'zone_name' => 'Pacific/Niue',
            ),
            281 => 
            array (
                'id' => 282,
                'zone_id' => '282',
                'country_code' => 'NZ',
                'zone_name' => 'Pacific/Auckland',
            ),
            282 => 
            array (
                'id' => 283,
                'zone_id' => '283',
                'country_code' => 'NZ',
                'zone_name' => 'Pacific/Chatham',
            ),
            283 => 
            array (
                'id' => 284,
                'zone_id' => '284',
                'country_code' => 'OM',
                'zone_name' => 'Asia/Muscat',
            ),
            284 => 
            array (
                'id' => 285,
                'zone_id' => '285',
                'country_code' => 'PA',
                'zone_name' => 'America/Panama',
            ),
            285 => 
            array (
                'id' => 286,
                'zone_id' => '286',
                'country_code' => 'PE',
                'zone_name' => 'America/Lima',
            ),
            286 => 
            array (
                'id' => 287,
                'zone_id' => '287',
                'country_code' => 'PF',
                'zone_name' => 'Pacific/Tahiti',
            ),
            287 => 
            array (
                'id' => 288,
                'zone_id' => '288',
                'country_code' => 'PF',
                'zone_name' => 'Pacific/Marquesas',
            ),
            288 => 
            array (
                'id' => 289,
                'zone_id' => '289',
                'country_code' => 'PF',
                'zone_name' => 'Pacific/Gambier',
            ),
            289 => 
            array (
                'id' => 290,
                'zone_id' => '290',
                'country_code' => 'PG',
                'zone_name' => 'Pacific/Port_Moresby',
            ),
            290 => 
            array (
                'id' => 291,
                'zone_id' => '291',
                'country_code' => 'PG',
                'zone_name' => 'Pacific/Bougainville',
            ),
            291 => 
            array (
                'id' => 292,
                'zone_id' => '292',
                'country_code' => 'PH',
                'zone_name' => 'Asia/Manila',
            ),
            292 => 
            array (
                'id' => 293,
                'zone_id' => '293',
                'country_code' => 'PK',
                'zone_name' => 'Asia/Karachi',
            ),
            293 => 
            array (
                'id' => 294,
                'zone_id' => '294',
                'country_code' => 'PL',
                'zone_name' => 'Europe/Warsaw',
            ),
            294 => 
            array (
                'id' => 295,
                'zone_id' => '295',
                'country_code' => 'PM',
                'zone_name' => 'America/Miquelon',
            ),
            295 => 
            array (
                'id' => 296,
                'zone_id' => '296',
                'country_code' => 'PN',
                'zone_name' => 'Pacific/Pitcairn',
            ),
            296 => 
            array (
                'id' => 297,
                'zone_id' => '297',
                'country_code' => 'PR',
                'zone_name' => 'America/Puerto_Rico',
            ),
            297 => 
            array (
                'id' => 298,
                'zone_id' => '298',
                'country_code' => 'PS',
                'zone_name' => 'Asia/Gaza',
            ),
            298 => 
            array (
                'id' => 299,
                'zone_id' => '299',
                'country_code' => 'PS',
                'zone_name' => 'Asia/Hebron',
            ),
            299 => 
            array (
                'id' => 300,
                'zone_id' => '300',
                'country_code' => 'PT',
                'zone_name' => 'Europe/Lisbon',
            ),
            300 => 
            array (
                'id' => 301,
                'zone_id' => '301',
                'country_code' => 'PT',
                'zone_name' => 'Atlantic/Madeira',
            ),
            301 => 
            array (
                'id' => 302,
                'zone_id' => '302',
                'country_code' => 'PT',
                'zone_name' => 'Atlantic/Azores',
            ),
            302 => 
            array (
                'id' => 303,
                'zone_id' => '303',
                'country_code' => 'PW',
                'zone_name' => 'Pacific/Palau',
            ),
            303 => 
            array (
                'id' => 304,
                'zone_id' => '304',
                'country_code' => 'PY',
                'zone_name' => 'America/Asuncion',
            ),
            304 => 
            array (
                'id' => 305,
                'zone_id' => '305',
                'country_code' => 'QA',
                'zone_name' => 'Asia/Qatar',
            ),
            305 => 
            array (
                'id' => 306,
                'zone_id' => '306',
                'country_code' => 'RE',
                'zone_name' => 'Indian/Reunion',
            ),
            306 => 
            array (
                'id' => 307,
                'zone_id' => '307',
                'country_code' => 'RO',
                'zone_name' => 'Europe/Bucharest',
            ),
            307 => 
            array (
                'id' => 308,
                'zone_id' => '308',
                'country_code' => 'RS',
                'zone_name' => 'Europe/Belgrade',
            ),
            308 => 
            array (
                'id' => 309,
                'zone_id' => '309',
                'country_code' => 'RU',
                'zone_name' => 'Europe/Kaliningrad',
            ),
            309 => 
            array (
                'id' => 310,
                'zone_id' => '310',
                'country_code' => 'RU',
                'zone_name' => 'Europe/Moscow',
            ),
            310 => 
            array (
                'id' => 311,
                'zone_id' => '311',
                'country_code' => 'UA',
                'zone_name' => 'Europe/Simferopol',
            ),
            311 => 
            array (
                'id' => 312,
                'zone_id' => '312',
                'country_code' => 'RU',
                'zone_name' => 'Europe/Kirov',
            ),
            312 => 
            array (
                'id' => 313,
                'zone_id' => '313',
                'country_code' => 'RU',
                'zone_name' => 'Europe/Astrakhan',
            ),
            313 => 
            array (
                'id' => 314,
                'zone_id' => '314',
                'country_code' => 'RU',
                'zone_name' => 'Europe/Volgograd',
            ),
            314 => 
            array (
                'id' => 315,
                'zone_id' => '315',
                'country_code' => 'RU',
                'zone_name' => 'Europe/Saratov',
            ),
            315 => 
            array (
                'id' => 316,
                'zone_id' => '316',
                'country_code' => 'RU',
                'zone_name' => 'Europe/Ulyanovsk',
            ),
            316 => 
            array (
                'id' => 317,
                'zone_id' => '317',
                'country_code' => 'RU',
                'zone_name' => 'Europe/Samara',
            ),
            317 => 
            array (
                'id' => 318,
                'zone_id' => '318',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Yekaterinburg',
            ),
            318 => 
            array (
                'id' => 319,
                'zone_id' => '319',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Omsk',
            ),
            319 => 
            array (
                'id' => 320,
                'zone_id' => '320',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Novosibirsk',
            ),
            320 => 
            array (
                'id' => 321,
                'zone_id' => '321',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Barnaul',
            ),
            321 => 
            array (
                'id' => 322,
                'zone_id' => '322',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Tomsk',
            ),
            322 => 
            array (
                'id' => 323,
                'zone_id' => '323',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Novokuznetsk',
            ),
            323 => 
            array (
                'id' => 324,
                'zone_id' => '324',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Krasnoyarsk',
            ),
            324 => 
            array (
                'id' => 325,
                'zone_id' => '325',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Irkutsk',
            ),
            325 => 
            array (
                'id' => 326,
                'zone_id' => '326',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Chita',
            ),
            326 => 
            array (
                'id' => 327,
                'zone_id' => '327',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Yakutsk',
            ),
            327 => 
            array (
                'id' => 328,
                'zone_id' => '328',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Khandyga',
            ),
            328 => 
            array (
                'id' => 329,
                'zone_id' => '329',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Vladivostok',
            ),
            329 => 
            array (
                'id' => 330,
                'zone_id' => '330',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Ust-Nera',
            ),
            330 => 
            array (
                'id' => 331,
                'zone_id' => '331',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Magadan',
            ),
            331 => 
            array (
                'id' => 332,
                'zone_id' => '332',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Sakhalin',
            ),
            332 => 
            array (
                'id' => 333,
                'zone_id' => '333',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Srednekolymsk',
            ),
            333 => 
            array (
                'id' => 334,
                'zone_id' => '334',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Kamchatka',
            ),
            334 => 
            array (
                'id' => 335,
                'zone_id' => '335',
                'country_code' => 'RU',
                'zone_name' => 'Asia/Anadyr',
            ),
            335 => 
            array (
                'id' => 336,
                'zone_id' => '336',
                'country_code' => 'RW',
                'zone_name' => 'Africa/Kigali',
            ),
            336 => 
            array (
                'id' => 337,
                'zone_id' => '337',
                'country_code' => 'SA',
                'zone_name' => 'Asia/Riyadh',
            ),
            337 => 
            array (
                'id' => 338,
                'zone_id' => '338',
                'country_code' => 'SB',
                'zone_name' => 'Pacific/Guadalcanal',
            ),
            338 => 
            array (
                'id' => 339,
                'zone_id' => '339',
                'country_code' => 'SC',
                'zone_name' => 'Indian/Mahe',
            ),
            339 => 
            array (
                'id' => 340,
                'zone_id' => '340',
                'country_code' => 'SD',
                'zone_name' => 'Africa/Khartoum',
            ),
            340 => 
            array (
                'id' => 341,
                'zone_id' => '341',
                'country_code' => 'SE',
                'zone_name' => 'Europe/Stockholm',
            ),
            341 => 
            array (
                'id' => 342,
                'zone_id' => '342',
                'country_code' => 'SG',
                'zone_name' => 'Asia/Singapore',
            ),
            342 => 
            array (
                'id' => 343,
                'zone_id' => '343',
                'country_code' => 'SH',
                'zone_name' => 'Atlantic/St_Helena',
            ),
            343 => 
            array (
                'id' => 344,
                'zone_id' => '344',
                'country_code' => 'SI',
                'zone_name' => 'Europe/Ljubljana',
            ),
            344 => 
            array (
                'id' => 345,
                'zone_id' => '345',
                'country_code' => 'SJ',
                'zone_name' => 'Arctic/Longyearbyen',
            ),
            345 => 
            array (
                'id' => 346,
                'zone_id' => '346',
                'country_code' => 'SK',
                'zone_name' => 'Europe/Bratislava',
            ),
            346 => 
            array (
                'id' => 347,
                'zone_id' => '347',
                'country_code' => 'SL',
                'zone_name' => 'Africa/Freetown',
            ),
            347 => 
            array (
                'id' => 348,
                'zone_id' => '348',
                'country_code' => 'SM',
                'zone_name' => 'Europe/San_Marino',
            ),
            348 => 
            array (
                'id' => 349,
                'zone_id' => '349',
                'country_code' => 'SN',
                'zone_name' => 'Africa/Dakar',
            ),
            349 => 
            array (
                'id' => 350,
                'zone_id' => '350',
                'country_code' => 'SO',
                'zone_name' => 'Africa/Mogadishu',
            ),
            350 => 
            array (
                'id' => 351,
                'zone_id' => '351',
                'country_code' => 'SR',
                'zone_name' => 'America/Paramaribo',
            ),
            351 => 
            array (
                'id' => 352,
                'zone_id' => '352',
                'country_code' => 'SS',
                'zone_name' => 'Africa/Juba',
            ),
            352 => 
            array (
                'id' => 353,
                'zone_id' => '353',
                'country_code' => 'ST',
                'zone_name' => 'Africa/Sao_Tome',
            ),
            353 => 
            array (
                'id' => 354,
                'zone_id' => '354',
                'country_code' => 'SV',
                'zone_name' => 'America/El_Salvador',
            ),
            354 => 
            array (
                'id' => 355,
                'zone_id' => '355',
                'country_code' => 'SX',
                'zone_name' => 'America/Lower_Princes',
            ),
            355 => 
            array (
                'id' => 356,
                'zone_id' => '356',
                'country_code' => 'SY',
                'zone_name' => 'Asia/Damascus',
            ),
            356 => 
            array (
                'id' => 357,
                'zone_id' => '357',
                'country_code' => 'SZ',
                'zone_name' => 'Africa/Mbabane',
            ),
            357 => 
            array (
                'id' => 358,
                'zone_id' => '358',
                'country_code' => 'TC',
                'zone_name' => 'America/Grand_Turk',
            ),
            358 => 
            array (
                'id' => 359,
                'zone_id' => '359',
                'country_code' => 'TD',
                'zone_name' => 'Africa/Ndjamena',
            ),
            359 => 
            array (
                'id' => 360,
                'zone_id' => '360',
                'country_code' => 'TF',
                'zone_name' => 'Indian/Kerguelen',
            ),
            360 => 
            array (
                'id' => 361,
                'zone_id' => '361',
                'country_code' => 'TG',
                'zone_name' => 'Africa/Lome',
            ),
            361 => 
            array (
                'id' => 362,
                'zone_id' => '362',
                'country_code' => 'TH',
                'zone_name' => 'Asia/Bangkok',
            ),
            362 => 
            array (
                'id' => 363,
                'zone_id' => '363',
                'country_code' => 'TJ',
                'zone_name' => 'Asia/Dushanbe',
            ),
            363 => 
            array (
                'id' => 364,
                'zone_id' => '364',
                'country_code' => 'TK',
                'zone_name' => 'Pacific/Fakaofo',
            ),
            364 => 
            array (
                'id' => 365,
                'zone_id' => '365',
                'country_code' => 'TL',
                'zone_name' => 'Asia/Dili',
            ),
            365 => 
            array (
                'id' => 366,
                'zone_id' => '366',
                'country_code' => 'TM',
                'zone_name' => 'Asia/Ashgabat',
            ),
            366 => 
            array (
                'id' => 367,
                'zone_id' => '367',
                'country_code' => 'TN',
                'zone_name' => 'Africa/Tunis',
            ),
            367 => 
            array (
                'id' => 368,
                'zone_id' => '368',
                'country_code' => 'TO',
                'zone_name' => 'Pacific/Tongatapu',
            ),
            368 => 
            array (
                'id' => 369,
                'zone_id' => '369',
                'country_code' => 'TR',
                'zone_name' => 'Europe/Istanbul',
            ),
            369 => 
            array (
                'id' => 370,
                'zone_id' => '370',
                'country_code' => 'TT',
                'zone_name' => 'America/Port_of_Spain',
            ),
            370 => 
            array (
                'id' => 371,
                'zone_id' => '371',
                'country_code' => 'TV',
                'zone_name' => 'Pacific/Funafuti',
            ),
            371 => 
            array (
                'id' => 372,
                'zone_id' => '372',
                'country_code' => 'TW',
                'zone_name' => 'Asia/Taipei',
            ),
            372 => 
            array (
                'id' => 373,
                'zone_id' => '373',
                'country_code' => 'TZ',
                'zone_name' => 'Africa/Dar_es_Salaam',
            ),
            373 => 
            array (
                'id' => 374,
                'zone_id' => '374',
                'country_code' => 'UA',
                'zone_name' => 'Europe/Kiev',
            ),
            374 => 
            array (
                'id' => 375,
                'zone_id' => '375',
                'country_code' => 'UA',
                'zone_name' => 'Europe/Uzhgorod',
            ),
            375 => 
            array (
                'id' => 376,
                'zone_id' => '376',
                'country_code' => 'UA',
                'zone_name' => 'Europe/Zaporozhye',
            ),
            376 => 
            array (
                'id' => 377,
                'zone_id' => '377',
                'country_code' => 'UG',
                'zone_name' => 'Africa/Kampala',
            ),
            377 => 
            array (
                'id' => 378,
                'zone_id' => '378',
                'country_code' => 'UM',
                'zone_name' => 'Pacific/Midway',
            ),
            378 => 
            array (
                'id' => 379,
                'zone_id' => '379',
                'country_code' => 'UM',
                'zone_name' => 'Pacific/Wake',
            ),
            379 => 
            array (
                'id' => 380,
                'zone_id' => '380',
                'country_code' => 'US',
                'zone_name' => 'America/New_York',
            ),
            380 => 
            array (
                'id' => 381,
                'zone_id' => '381',
                'country_code' => 'US',
                'zone_name' => 'America/Detroit',
            ),
            381 => 
            array (
                'id' => 382,
                'zone_id' => '382',
                'country_code' => 'US',
                'zone_name' => 'America/Kentucky/Louisville',
            ),
            382 => 
            array (
                'id' => 383,
                'zone_id' => '383',
                'country_code' => 'US',
                'zone_name' => 'America/Kentucky/Monticello',
            ),
            383 => 
            array (
                'id' => 384,
                'zone_id' => '384',
                'country_code' => 'US',
                'zone_name' => 'America/Indiana/Indianapolis',
            ),
            384 => 
            array (
                'id' => 385,
                'zone_id' => '385',
                'country_code' => 'US',
                'zone_name' => 'America/Indiana/Vincennes',
            ),
            385 => 
            array (
                'id' => 386,
                'zone_id' => '386',
                'country_code' => 'US',
                'zone_name' => 'America/Indiana/Winamac',
            ),
            386 => 
            array (
                'id' => 387,
                'zone_id' => '387',
                'country_code' => 'US',
                'zone_name' => 'America/Indiana/Marengo',
            ),
            387 => 
            array (
                'id' => 388,
                'zone_id' => '388',
                'country_code' => 'US',
                'zone_name' => 'America/Indiana/Petersburg',
            ),
            388 => 
            array (
                'id' => 389,
                'zone_id' => '389',
                'country_code' => 'US',
                'zone_name' => 'America/Indiana/Vevay',
            ),
            389 => 
            array (
                'id' => 390,
                'zone_id' => '390',
                'country_code' => 'US',
                'zone_name' => 'America/Chicago',
            ),
            390 => 
            array (
                'id' => 391,
                'zone_id' => '391',
                'country_code' => 'US',
                'zone_name' => 'America/Indiana/Tell_City',
            ),
            391 => 
            array (
                'id' => 392,
                'zone_id' => '392',
                'country_code' => 'US',
                'zone_name' => 'America/Indiana/Knox',
            ),
            392 => 
            array (
                'id' => 393,
                'zone_id' => '393',
                'country_code' => 'US',
                'zone_name' => 'America/Menominee',
            ),
            393 => 
            array (
                'id' => 394,
                'zone_id' => '394',
                'country_code' => 'US',
                'zone_name' => 'America/North_Dakota/Center',
            ),
            394 => 
            array (
                'id' => 395,
                'zone_id' => '395',
                'country_code' => 'US',
                'zone_name' => 'America/North_Dakota/New_Salem',
            ),
            395 => 
            array (
                'id' => 396,
                'zone_id' => '396',
                'country_code' => 'US',
                'zone_name' => 'America/North_Dakota/Beulah',
            ),
            396 => 
            array (
                'id' => 397,
                'zone_id' => '397',
                'country_code' => 'US',
                'zone_name' => 'America/Denver',
            ),
            397 => 
            array (
                'id' => 398,
                'zone_id' => '398',
                'country_code' => 'US',
                'zone_name' => 'America/Boise',
            ),
            398 => 
            array (
                'id' => 399,
                'zone_id' => '399',
                'country_code' => 'US',
                'zone_name' => 'America/Phoenix',
            ),
            399 => 
            array (
                'id' => 400,
                'zone_id' => '400',
                'country_code' => 'US',
                'zone_name' => 'America/Los_Angeles',
            ),
            400 => 
            array (
                'id' => 401,
                'zone_id' => '401',
                'country_code' => 'US',
                'zone_name' => 'America/Anchorage',
            ),
            401 => 
            array (
                'id' => 402,
                'zone_id' => '402',
                'country_code' => 'US',
                'zone_name' => 'America/Juneau',
            ),
            402 => 
            array (
                'id' => 403,
                'zone_id' => '403',
                'country_code' => 'US',
                'zone_name' => 'America/Sitka',
            ),
            403 => 
            array (
                'id' => 404,
                'zone_id' => '404',
                'country_code' => 'US',
                'zone_name' => 'America/Metlakatla',
            ),
            404 => 
            array (
                'id' => 405,
                'zone_id' => '405',
                'country_code' => 'US',
                'zone_name' => 'America/Yakutat',
            ),
            405 => 
            array (
                'id' => 406,
                'zone_id' => '406',
                'country_code' => 'US',
                'zone_name' => 'America/Nome',
            ),
            406 => 
            array (
                'id' => 407,
                'zone_id' => '407',
                'country_code' => 'US',
                'zone_name' => 'America/Adak',
            ),
            407 => 
            array (
                'id' => 408,
                'zone_id' => '408',
                'country_code' => 'US',
                'zone_name' => 'Pacific/Honolulu',
            ),
            408 => 
            array (
                'id' => 409,
                'zone_id' => '409',
                'country_code' => 'UY',
                'zone_name' => 'America/Montevideo',
            ),
            409 => 
            array (
                'id' => 410,
                'zone_id' => '410',
                'country_code' => 'UZ',
                'zone_name' => 'Asia/Samarkand',
            ),
            410 => 
            array (
                'id' => 411,
                'zone_id' => '411',
                'country_code' => 'UZ',
                'zone_name' => 'Asia/Tashkent',
            ),
            411 => 
            array (
                'id' => 412,
                'zone_id' => '412',
                'country_code' => 'VA',
                'zone_name' => 'Europe/Vatican',
            ),
            412 => 
            array (
                'id' => 413,
                'zone_id' => '413',
                'country_code' => 'VC',
                'zone_name' => 'America/St_Vincent',
            ),
            413 => 
            array (
                'id' => 414,
                'zone_id' => '414',
                'country_code' => 'VE',
                'zone_name' => 'America/Caracas',
            ),
            414 => 
            array (
                'id' => 415,
                'zone_id' => '415',
                'country_code' => 'VG',
                'zone_name' => 'America/Tortola',
            ),
            415 => 
            array (
                'id' => 416,
                'zone_id' => '416',
                'country_code' => 'VI',
                'zone_name' => 'America/St_Thomas',
            ),
            416 => 
            array (
                'id' => 417,
                'zone_id' => '417',
                'country_code' => 'VN',
                'zone_name' => 'Asia/Ho_Chi_Minh',
            ),
            417 => 
            array (
                'id' => 418,
                'zone_id' => '418',
                'country_code' => 'VU',
                'zone_name' => 'Pacific/Efate',
            ),
            418 => 
            array (
                'id' => 419,
                'zone_id' => '419',
                'country_code' => 'WF',
                'zone_name' => 'Pacific/Wallis',
            ),
            419 => 
            array (
                'id' => 420,
                'zone_id' => '420',
                'country_code' => 'WS',
                'zone_name' => 'Pacific/Apia',
            ),
            420 => 
            array (
                'id' => 421,
                'zone_id' => '421',
                'country_code' => 'YE',
                'zone_name' => 'Asia/Aden',
            ),
            421 => 
            array (
                'id' => 422,
                'zone_id' => '422',
                'country_code' => 'YT',
                'zone_name' => 'Indian/Mayotte',
            ),
            422 => 
            array (
                'id' => 423,
                'zone_id' => '423',
                'country_code' => 'ZA',
                'zone_name' => 'Africa/Johannesburg',
            ),
            423 => 
            array (
                'id' => 424,
                'zone_id' => '424',
                'country_code' => 'ZM',
                'zone_name' => 'Africa/Lusaka',
            ),
            424 => 
            array (
                'id' => 425,
                'zone_id' => '425',
                'country_code' => 'ZW',
                'zone_name' => 'Africa/Harare',
            ),
        ));
        
        
    }
}
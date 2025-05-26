<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sortname' => 'AF',
                'name' => 'Afghanistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'sortname' => 'AL',
                'name' => 'Albania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'sortname' => 'DZ',
                'name' => 'Algeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'sortname' => 'AS',
                'name' => 'American Samoa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'sortname' => 'AD',
                'name' => 'Andorra',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'sortname' => 'AO',
                'name' => 'Angola',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'sortname' => 'AI',
                'name' => 'Anguilla',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'sortname' => 'AQ',
                'name' => 'Antarctica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'sortname' => 'AG',
                'name' => 'Antigua And Barbuda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'sortname' => 'AR',
                'name' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'sortname' => 'AM',
                'name' => 'Armenia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'sortname' => 'AW',
                'name' => 'Aruba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'sortname' => 'AU',
                'name' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'sortname' => 'AT',
                'name' => 'Austria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'sortname' => 'AZ',
                'name' => 'Azerbaijan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'sortname' => 'BS',
                'name' => 'Bahamas The',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'sortname' => 'BH',
                'name' => 'Bahrain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'sortname' => 'BD',
                'name' => 'Bangladesh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'sortname' => 'BB',
                'name' => 'Barbados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'sortname' => 'BY',
                'name' => 'Belarus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'sortname' => 'BE',
                'name' => 'Belgium',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'sortname' => 'BZ',
                'name' => 'Belize',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'sortname' => 'BJ',
                'name' => 'Benin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'sortname' => 'BM',
                'name' => 'Bermuda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'sortname' => 'BT',
                'name' => 'Bhutan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'sortname' => 'BO',
                'name' => 'Bolivia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'sortname' => 'BA',
                'name' => 'Bosnia and Herzegovina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'sortname' => 'BW',
                'name' => 'Botswana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'sortname' => 'BV',
                'name' => 'Bouvet Island',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'sortname' => 'BR',
                'name' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'sortname' => 'IO',
                'name' => 'British Indian Ocean Territory',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'sortname' => 'BN',
                'name' => 'Brunei',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'sortname' => 'BG',
                'name' => 'Bulgaria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'sortname' => 'BF',
                'name' => 'Burkina Faso',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'sortname' => 'BI',
                'name' => 'Burundi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'sortname' => 'KH',
                'name' => 'Cambodia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'sortname' => 'CM',
                'name' => 'Cameroon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'sortname' => 'CA',
                'name' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'sortname' => 'CV',
                'name' => 'Cape Verde',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'sortname' => 'KY',
                'name' => 'Cayman Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'sortname' => 'CF',
                'name' => 'Central African Republic',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'sortname' => 'TD',
                'name' => 'Chad',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'sortname' => 'CL',
                'name' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'sortname' => 'CN',
                'name' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'sortname' => 'CX',
                'name' => 'Christmas Island',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'sortname' => 'CC',
            'name' => 'Cocos (Keeling) Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'sortname' => 'CO',
                'name' => 'Colombia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'sortname' => 'KM',
                'name' => 'Comoros',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'sortname' => 'CG',
                'name' => 'Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'sortname' => 'CD',
                'name' => 'Congo The Democratic Republic Of The',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'sortname' => 'CK',
                'name' => 'Cook Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'sortname' => 'CR',
                'name' => 'Costa Rica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'sortname' => 'CI',
            'name' => 'Cote D\'Ivoire (Ivory Coast)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'sortname' => 'HR',
            'name' => 'Croatia (Hrvatska)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'sortname' => 'CU',
                'name' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'sortname' => 'CY',
                'name' => 'Cyprus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'sortname' => 'CZ',
                'name' => 'Czech Republic',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'sortname' => 'DK',
                'name' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'sortname' => 'DJ',
                'name' => 'Djibouti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'sortname' => 'DM',
                'name' => 'Dominica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'sortname' => 'DO',
                'name' => 'Dominican Republic',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'sortname' => 'TP',
                'name' => 'East Timor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'sortname' => 'EC',
                'name' => 'Ecuador',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'sortname' => 'EG',
                'name' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'sortname' => 'SV',
                'name' => 'El Salvador',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'sortname' => 'GQ',
                'name' => 'Equatorial Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'sortname' => 'ER',
                'name' => 'Eritrea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'sortname' => 'EE',
                'name' => 'Estonia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'sortname' => 'ET',
                'name' => 'Ethiopia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'sortname' => 'XA',
                'name' => 'External Territories of Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'sortname' => 'FK',
                'name' => 'Falkland Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'sortname' => 'FO',
                'name' => 'Faroe Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'sortname' => 'FJ',
                'name' => 'Fiji Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'sortname' => 'FI',
                'name' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'sortname' => 'FR',
                'name' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'sortname' => 'GF',
                'name' => 'French Guiana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'sortname' => 'PF',
                'name' => 'French Polynesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'sortname' => 'TF',
                'name' => 'French Southern Territories',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'sortname' => 'GA',
                'name' => 'Gabon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'sortname' => 'GM',
                'name' => 'Gambia The',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'sortname' => 'GE',
                'name' => 'Georgia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'sortname' => 'DE',
                'name' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'sortname' => 'GH',
                'name' => 'Ghana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'sortname' => 'GI',
                'name' => 'Gibraltar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'sortname' => 'GR',
                'name' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'sortname' => 'GL',
                'name' => 'Greenland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'sortname' => 'GD',
                'name' => 'Grenada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'sortname' => 'GP',
                'name' => 'Guadeloupe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'sortname' => 'GU',
                'name' => 'Guam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'sortname' => 'GT',
                'name' => 'Guatemala',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'sortname' => 'XU',
                'name' => 'Guernsey and Alderney',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'sortname' => 'GN',
                'name' => 'Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'sortname' => 'GW',
                'name' => 'Guinea-Bissau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'sortname' => 'GY',
                'name' => 'Guyana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'sortname' => 'HT',
                'name' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'sortname' => 'HM',
                'name' => 'Heard and McDonald Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'sortname' => 'HN',
                'name' => 'Honduras',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'sortname' => 'HK',
                'name' => 'Hong Kong S.A.R.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'sortname' => 'HU',
                'name' => 'Hungary',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'sortname' => 'IS',
                'name' => 'Iceland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'sortname' => 'IN',
                'name' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'sortname' => 'ID',
                'name' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'sortname' => 'IR',
                'name' => 'Iran',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'sortname' => 'IQ',
                'name' => 'Iraq',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'sortname' => 'IE',
                'name' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'sortname' => 'IL',
                'name' => 'Israel',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'sortname' => 'IT',
                'name' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'sortname' => 'JM',
                'name' => 'Jamaica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'sortname' => 'JP',
                'name' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'sortname' => 'XJ',
                'name' => 'Jersey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'sortname' => 'JO',
                'name' => 'Jordan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'sortname' => 'KZ',
                'name' => 'Kazakhstan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'sortname' => 'KE',
                'name' => 'Kenya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'sortname' => 'KI',
                'name' => 'Kiribati',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'sortname' => 'KP',
                'name' => 'Korea North',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'sortname' => 'KR',
                'name' => 'Korea South',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'sortname' => 'KW',
                'name' => 'Kuwait',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'sortname' => 'KG',
                'name' => 'Kyrgyzstan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'sortname' => 'LA',
                'name' => 'Laos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'sortname' => 'LV',
                'name' => 'Latvia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'sortname' => 'LB',
                'name' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'sortname' => 'LS',
                'name' => 'Lesotho',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'sortname' => 'LR',
                'name' => 'Liberia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'sortname' => 'LY',
                'name' => 'Libya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'sortname' => 'LI',
                'name' => 'Liechtenstein',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'sortname' => 'LT',
                'name' => 'Lithuania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'sortname' => 'LU',
                'name' => 'Luxembourg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'sortname' => 'MO',
                'name' => 'Macau S.A.R.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'sortname' => 'MK',
                'name' => 'Macedonia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'sortname' => 'MG',
                'name' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'sortname' => 'MW',
                'name' => 'Malawi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'sortname' => 'MY',
                'name' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'sortname' => 'MV',
                'name' => 'Maldives',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'sortname' => 'ML',
                'name' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'sortname' => 'MT',
                'name' => 'Malta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'sortname' => 'XM',
            'name' => 'Man (Isle of)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'sortname' => 'MH',
                'name' => 'Marshall Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'sortname' => 'MQ',
                'name' => 'Martinique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'sortname' => 'MR',
                'name' => 'Mauritania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'sortname' => 'MU',
                'name' => 'Mauritius',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'sortname' => 'YT',
                'name' => 'Mayotte',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'sortname' => 'MX',
                'name' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'sortname' => 'FM',
                'name' => 'Micronesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'sortname' => 'MD',
                'name' => 'Moldova',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'sortname' => 'MC',
                'name' => 'Monaco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'sortname' => 'MN',
                'name' => 'Mongolia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'sortname' => 'MS',
                'name' => 'Montserrat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'sortname' => 'MA',
                'name' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'sortname' => 'MZ',
                'name' => 'Mozambique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'sortname' => 'MM',
                'name' => 'Myanmar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'sortname' => 'NA',
                'name' => 'Namibia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'sortname' => 'NR',
                'name' => 'Nauru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'sortname' => 'NP',
                'name' => 'Nepal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'sortname' => 'AN',
                'name' => 'Netherlands Antilles',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'sortname' => 'NL',
                'name' => 'Netherlands The',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'sortname' => 'NC',
                'name' => 'New Caledonia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'sortname' => 'NZ',
                'name' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'sortname' => 'NI',
                'name' => 'Nicaragua',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'sortname' => 'NE',
                'name' => 'Niger',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'sortname' => 'NG',
                'name' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'sortname' => 'NU',
                'name' => 'Niue',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'sortname' => 'NF',
                'name' => 'Norfolk Island',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'sortname' => 'MP',
                'name' => 'Northern Mariana Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'sortname' => 'NO',
                'name' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'sortname' => 'OM',
                'name' => 'Oman',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'sortname' => 'PK',
                'name' => 'Pakistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'sortname' => 'PW',
                'name' => 'Palau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'sortname' => 'PS',
                'name' => 'Palestinian Territory Occupied',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'sortname' => 'PA',
                'name' => 'Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'sortname' => 'PG',
                'name' => 'Papua new Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'sortname' => 'PY',
                'name' => 'Paraguay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'sortname' => 'PE',
                'name' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'sortname' => 'PH',
                'name' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'sortname' => 'PN',
                'name' => 'Pitcairn Island',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'sortname' => 'PL',
                'name' => 'Poland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'sortname' => 'PT',
                'name' => 'Portugal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'sortname' => 'PR',
                'name' => 'Puerto Rico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'sortname' => 'QA',
                'name' => 'Qatar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'sortname' => 'RE',
                'name' => 'Reunion',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'sortname' => 'RO',
                'name' => 'Romania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'sortname' => 'RU',
                'name' => 'Russia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'sortname' => 'RW',
                'name' => 'Rwanda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'sortname' => 'SH',
                'name' => 'Saint Helena',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'sortname' => 'KN',
                'name' => 'Saint Kitts And Nevis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'sortname' => 'LC',
                'name' => 'Saint Lucia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'sortname' => 'PM',
                'name' => 'Saint Pierre and Miquelon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'sortname' => 'VC',
                'name' => 'Saint Vincent And The Grenadines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'sortname' => 'WS',
                'name' => 'Samoa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'sortname' => 'SM',
                'name' => 'San Marino',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'sortname' => 'ST',
                'name' => 'Sao Tome and Principe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'sortname' => 'SA',
                'name' => 'Saudi Arabia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'sortname' => 'SN',
                'name' => 'Senegal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'sortname' => 'RS',
                'name' => 'Serbia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'sortname' => 'SC',
                'name' => 'Seychelles',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'sortname' => 'SL',
                'name' => 'Sierra Leone',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'sortname' => 'SG',
                'name' => 'Singapore',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'sortname' => 'SK',
                'name' => 'Slovakia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'sortname' => 'SI',
                'name' => 'Slovenia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'sortname' => 'XG',
                'name' => 'Smaller Territories of the UK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'sortname' => 'SB',
                'name' => 'Solomon Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'sortname' => 'SO',
                'name' => 'Somalia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'sortname' => 'ZA',
                'name' => 'South Africa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'sortname' => 'GS',
                'name' => 'South Georgia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'sortname' => 'SS',
                'name' => 'South Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'sortname' => 'ES',
                'name' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'sortname' => 'LK',
                'name' => 'Sri Lanka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'sortname' => 'SD',
                'name' => 'Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'sortname' => 'SR',
                'name' => 'Suriname',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'sortname' => 'SJ',
                'name' => 'Svalbard And Jan Mayen Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'sortname' => 'SZ',
                'name' => 'Swaziland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'sortname' => 'SE',
                'name' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'sortname' => 'CH',
                'name' => 'Switzerland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'sortname' => 'SY',
                'name' => 'Syria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'sortname' => 'TW',
                'name' => 'Taiwan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'sortname' => 'TJ',
                'name' => 'Tajikistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'sortname' => 'TZ',
                'name' => 'Tanzania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'sortname' => 'TH',
                'name' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'sortname' => 'TG',
                'name' => 'Togo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'sortname' => 'TK',
                'name' => 'Tokelau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'sortname' => 'TO',
                'name' => 'Tonga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'sortname' => 'TT',
                'name' => 'Trinidad And Tobago',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'sortname' => 'TN',
                'name' => 'Tunisia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'sortname' => 'TR',
                'name' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'sortname' => 'TM',
                'name' => 'Turkmenistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'sortname' => 'TC',
                'name' => 'Turks And Caicos Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'sortname' => 'TV',
                'name' => 'Tuvalu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'sortname' => 'UG',
                'name' => 'Uganda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'sortname' => 'UA',
                'name' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'sortname' => 'AE',
                'name' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'sortname' => 'GB',
                'name' => 'United Kingdom',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'sortname' => 'US',
                'name' => 'United States',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'sortname' => 'UM',
                'name' => 'United States Minor Outlying Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'sortname' => 'UY',
                'name' => 'Uruguay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'sortname' => 'UZ',
                'name' => 'Uzbekistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'sortname' => 'VU',
                'name' => 'Vanuatu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'sortname' => 'VA',
            'name' => 'Vatican City State (Holy See)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'sortname' => 'VE',
                'name' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'sortname' => 'VN',
                'name' => 'Vietnam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'sortname' => 'VG',
            'name' => 'Virgin Islands (British)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'sortname' => 'VI',
            'name' => 'Virgin Islands (US)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'sortname' => 'WF',
                'name' => 'Wallis And Futuna Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'sortname' => 'EH',
                'name' => 'Western Sahara',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'sortname' => 'YE',
                'name' => 'Yemen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'sortname' => 'YU',
                'name' => 'Yugoslavia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'sortname' => 'ZM',
                'name' => 'Zambia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'sortname' => 'ZW',
                'name' => 'Zimbabwe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
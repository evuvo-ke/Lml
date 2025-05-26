<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2019_07_06_133107_create_settings_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2018_08_08_100000_create_telescope_entries_table',
                'batch' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2019_07_06_135714_create_countries_table',
                'batch' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2019_07_06_140045_create_currencies_table',
                'batch' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2019_07_06_140908_create_timezones_table',
                'batch' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2019_07_07_110645_create_payment_types_table',
                'batch' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2019_07_07_110717_create_payment_details_table',
                'batch' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2019_07_10_225923_create_notifications_table',
                'batch' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2019_07_27_080313_create_jobs_table',
                'batch' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2019_09_07_001758_create_menus_table',
                'batch' => 2,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2019_11_04_152950_create_tax_rates_table',
                'batch' => 2,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2020_01_14_114056_create_failed_jobs_table',
                'batch' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 3,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 3,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2019_07_01_214429_create_permission_tables',
                'batch' => 3,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2019_08_03_085238_create_widgets_table',
                'batch' => 4,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2019_07_06_111125_create_branches_table',
                'batch' => 5,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2019_07_06_111419_create_branch_users_table',
                'batch' => 5,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2019_07_07_093258_create_chart_of_accounts_table',
                'batch' => 6,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2019_07_07_093648_create_journal_entries_table',
                'batch' => 6,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2019_09_26_153830_create_asset_types_table',
                'batch' => 7,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2019_09_26_153906_create_assets_table',
                'batch' => 7,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2019_09_26_153953_create_asset_notes_table',
                'batch' => 7,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2019_09_26_153954_create_asset_maintenance_types_table',
                'batch' => 7,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2019_09_26_154012_create_asset_maintenance_table',
                'batch' => 7,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2019_09_26_154050_create_asset_files_table',
                'batch' => 7,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2019_09_26_154103_create_asset_pictures_table',
                'batch' => 7,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2019_09_27_063335_create_asset_depreciation_table',
                'batch' => 7,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2019_07_08_130052_create_titles_table',
                'batch' => 8,
            ),
            29 => 
            array (
                'id' => 30,
                'migration' => '2019_07_08_130053_create_client_relationships_table',
                'batch' => 8,
            ),
            30 => 
            array (
                'id' => 31,
                'migration' => '2019_07_08_130533_create_professions_table',
                'batch' => 8,
            ),
            31 => 
            array (
                'id' => 32,
                'migration' => '2019_07_08_150347_create_client_types_table',
                'batch' => 8,
            ),
            32 => 
            array (
                'id' => 33,
                'migration' => '2019_07_08_151636_create_client_identification_types_table',
                'batch' => 8,
            ),
            33 => 
            array (
                'id' => 34,
                'migration' => '2019_07_08_182818_create_clients_table',
                'batch' => 8,
            ),
            34 => 
            array (
                'id' => 35,
                'migration' => '2019_07_08_182911_create_client_files_table',
                'batch' => 8,
            ),
            35 => 
            array (
                'id' => 36,
                'migration' => '2019_07_08_182938_create_client_identification_table',
                'batch' => 8,
            ),
            36 => 
            array (
                'id' => 37,
                'migration' => '2019_07_08_183031_create_client_next_of_kin_table',
                'batch' => 8,
            ),
            37 => 
            array (
                'id' => 38,
                'migration' => '2019_07_11_180428_create_client_users_table',
                'batch' => 8,
            ),
            38 => 
            array (
                'id' => 39,
                'migration' => '2022_02_02_095410_add_status_to_client_files_table',
                'batch' => 8,
            ),
            39 => 
            array (
                'id' => 40,
                'migration' => '2022_02_02_095838_create_client_file_types_table',
                'batch' => 8,
            ),
            40 => 
            array (
                'id' => 41,
                'migration' => '2022_02_02_100625_add_status_to_client_identification_table',
                'batch' => 8,
            ),
            41 => 
            array (
                'id' => 42,
                'migration' => '2022_10_21_131227_add_client_inactive_days_to_settings_table',
                'batch' => 8,
            ),
            42 => 
            array (
                'id' => 43,
                'migration' => '2019_08_05_093954_create_savings_charge_options_table',
                'batch' => 9,
            ),
            43 => 
            array (
                'id' => 44,
                'migration' => '2019_08_05_094221_create_savings_charge_types_table',
                'batch' => 9,
            ),
            44 => 
            array (
                'id' => 45,
                'migration' => '2019_08_05_094458_create_savings_charges_table',
                'batch' => 9,
            ),
            45 => 
            array (
                'id' => 46,
                'migration' => '2019_08_05_094544_create_savings_transaction_types_table',
                'batch' => 9,
            ),
            46 => 
            array (
                'id' => 47,
                'migration' => '2019_08_05_094956_create_savings_products_table',
                'batch' => 9,
            ),
            47 => 
            array (
                'id' => 48,
                'migration' => '2019_08_05_095030_create_savings_table',
                'batch' => 9,
            ),
            48 => 
            array (
                'id' => 49,
                'migration' => '2019_08_05_095031_create_savings_linked_charges_table',
                'batch' => 9,
            ),
            49 => 
            array (
                'id' => 50,
                'migration' => '2019_08_05_095048_create_savings_transactions_table',
                'batch' => 9,
            ),
            50 => 
            array (
                'id' => 51,
                'migration' => '2019_08_05_095148_create_savings_product_linked_charges_table',
                'batch' => 9,
            ),
            51 => 
            array (
                'id' => 52,
                'migration' => '2022_08_25_175418_create_savings_files_table',
                'batch' => 9,
            ),
            52 => 
            array (
                'id' => 53,
                'migration' => '2022_08_25_182108_create_savings_file_types_table',
                'batch' => 9,
            ),
            53 => 
            array (
                'id' => 54,
                'migration' => '2019_07_15_094401_create_loan_transaction_processing_strategies_table',
                'batch' => 10,
            ),
            54 => 
            array (
                'id' => 55,
                'migration' => '2019_07_15_100526_create_loan_charge_types_table',
                'batch' => 10,
            ),
            55 => 
            array (
                'id' => 56,
                'migration' => '2019_07_15_100649_create_loan_charge_options_table',
                'batch' => 10,
            ),
            56 => 
            array (
                'id' => 57,
                'migration' => '2019_07_15_104331_create_loan_credit_checks_table',
                'batch' => 10,
            ),
            57 => 
            array (
                'id' => 58,
                'migration' => '2019_07_15_141230_create_loan_purposes_table',
                'batch' => 10,
            ),
            58 => 
            array (
                'id' => 59,
                'migration' => '2019_07_15_201056_create_loan_transaction_types_table',
                'batch' => 10,
            ),
            59 => 
            array (
                'id' => 60,
                'migration' => '2019_07_15_214326_create_funds_table',
                'batch' => 10,
            ),
            60 => 
            array (
                'id' => 61,
                'migration' => '2019_07_15_214410_create_loan_charges_table',
                'batch' => 10,
            ),
            61 => 
            array (
                'id' => 62,
                'migration' => '2019_07_15_214940_create_loan_products_table',
                'batch' => 10,
            ),
            62 => 
            array (
                'id' => 63,
                'migration' => '2019_07_15_215017_create_loan_product_linked_charges_table',
                'batch' => 10,
            ),
            63 => 
            array (
                'id' => 64,
                'migration' => '2019_07_15_215107_create_loan_disbursement_channels_table',
                'batch' => 10,
            ),
            64 => 
            array (
                'id' => 65,
                'migration' => '2019_07_15_215314_create_loan_collateral_types_table',
                'batch' => 10,
            ),
            65 => 
            array (
                'id' => 66,
                'migration' => '2019_07_15_215355_create_loans_table',
                'batch' => 10,
            ),
            66 => 
            array (
                'id' => 67,
                'migration' => '2019_07_15_215451_create_loan_collateral_table',
                'batch' => 10,
            ),
            67 => 
            array (
                'id' => 68,
                'migration' => '2019_07_15_215546_create_loan_repayment_schedules_table',
                'batch' => 10,
            ),
            68 => 
            array (
                'id' => 69,
                'migration' => '2019_07_15_215604_create_loan_transactions_table',
                'batch' => 10,
            ),
            69 => 
            array (
                'id' => 70,
                'migration' => '2019_07_15_221258_create_loan_linked_charges_table',
                'batch' => 10,
            ),
            70 => 
            array (
                'id' => 71,
                'migration' => '2019_07_17_130522_create_loan_product_linked_credit_checks_table',
                'batch' => 10,
            ),
            71 => 
            array (
                'id' => 72,
                'migration' => '2019_07_17_130536_create_loan_linked_credit_checks_table',
                'batch' => 10,
            ),
            72 => 
            array (
                'id' => 73,
                'migration' => '2019_07_17_162121_create_loan_guarantors_table',
                'batch' => 10,
            ),
            73 => 
            array (
                'id' => 74,
                'migration' => '2019_07_17_194223_create_loan_officer_history_table',
                'batch' => 10,
            ),
            74 => 
            array (
                'id' => 75,
                'migration' => '2019_07_17_194247_create_loan_history_table',
                'batch' => 10,
            ),
            75 => 
            array (
                'id' => 76,
                'migration' => '2019_07_17_194817_create_loan_files_table',
                'batch' => 10,
            ),
            76 => 
            array (
                'id' => 77,
                'migration' => '2019_07_17_194827_create_loan_notes_table',
                'batch' => 10,
            ),
            77 => 
            array (
                'id' => 78,
                'migration' => '2019_08_30_074012_create_loan_applications_table',
                'batch' => 10,
            ),
            78 => 
            array (
                'id' => 79,
                'migration' => '2022_02_02_095622_add_status_to_loan_files_table',
                'batch' => 10,
            ),
            79 => 
            array (
                'id' => 80,
                'migration' => '2022_02_02_095909_create_loan_file_types_table',
                'batch' => 10,
            ),
            80 => 
            array (
                'id' => 81,
                'migration' => '2022_10_14_112319_add_classification_to_loans_table',
                'batch' => 10,
            ),
            81 => 
            array (
                'id' => 82,
                'migration' => '2022_10_14_115558_add_simple_interest_to_loan_products_table',
                'batch' => 10,
            ),
            82 => 
            array (
                'id' => 83,
                'migration' => '2022_10_21_133419_create_loan_provisioning_table',
                'batch' => 10,
            ),
            83 => 
            array (
                'id' => 84,
                'migration' => '2022_10_21_140121_add_loan_provisioning_id_to_loans_table',
                'batch' => 10,
            ),
            84 => 
            array (
                'id' => 85,
                'migration' => '2019_07_27_161835_create_communication_campaign_business_rules_table',
                'batch' => 11,
            ),
            85 => 
            array (
                'id' => 86,
                'migration' => '2019_07_27_161902_create_communication_campaign_attachment_types_table',
                'batch' => 11,
            ),
            86 => 
            array (
                'id' => 87,
                'migration' => '2019_07_28_150020_create_sms_gateways_table',
                'batch' => 11,
            ),
            87 => 
            array (
                'id' => 88,
                'migration' => '2019_07_28_150053_create_communication_campaigns_table',
                'batch' => 11,
            ),
            88 => 
            array (
                'id' => 89,
                'migration' => '2019_07_28_161940_create_communication_campaign_logs_table',
                'batch' => 11,
            ),
            89 => 
            array (
                'id' => 90,
                'migration' => '2016_06_01_000001_create_oauth_auth_codes_table',
                'batch' => 12,
            ),
            90 => 
            array (
                'id' => 91,
                'migration' => '2016_06_01_000002_create_oauth_access_tokens_table',
                'batch' => 12,
            ),
            91 => 
            array (
                'id' => 92,
                'migration' => '2016_06_01_000003_create_oauth_refresh_tokens_table',
                'batch' => 12,
            ),
            92 => 
            array (
                'id' => 93,
                'migration' => '2016_06_01_000004_create_oauth_clients_table',
                'batch' => 12,
            ),
            93 => 
            array (
                'id' => 94,
                'migration' => '2016_06_01_000005_create_oauth_personal_access_clients_table',
                'batch' => 12,
            ),
            94 => 
            array (
                'id' => 95,
                'migration' => '2019_09_22_080345_create_payroll_items_table',
                'batch' => 13,
            ),
            95 => 
            array (
                'id' => 96,
                'migration' => '2019_09_22_081303_create_payroll_templates_table',
                'batch' => 13,
            ),
            96 => 
            array (
                'id' => 97,
                'migration' => '2019_09_22_081304_create_payroll_template_items_table',
                'batch' => 13,
            ),
            97 => 
            array (
                'id' => 98,
                'migration' => '2019_09_22_081326_create_payroll_table',
                'batch' => 13,
            ),
            98 => 
            array (
                'id' => 99,
                'migration' => '2019_09_22_081441_create_payroll_items_meta_table',
                'batch' => 13,
            ),
            99 => 
            array (
                'id' => 100,
                'migration' => '2019_09_22_082657_create_payroll_payments_table',
                'batch' => 13,
            ),
            100 => 
            array (
                'id' => 101,
                'migration' => '2019_09_15_164302_create_custom_fields_table',
                'batch' => 14,
            ),
            101 => 
            array (
                'id' => 102,
                'migration' => '2019_09_15_164434_create_custom_fields_meta_table',
                'batch' => 14,
            ),
            102 => 
            array (
                'id' => 103,
                'migration' => '2022_10_21_130720_add_view_in_report_to_custom_fields_table',
                'batch' => 14,
            ),
            103 => 
            array (
                'id' => 104,
                'migration' => '2020_02_24_114006_create_expense_types_table',
                'batch' => 15,
            ),
            104 => 
            array (
                'id' => 105,
                'migration' => '2020_02_24_114018_create_expenses_table',
                'batch' => 15,
            ),
            105 => 
            array (
                'id' => 106,
                'migration' => '2020_02_24_114052_create_income_types_table',
                'batch' => 16,
            ),
            106 => 
            array (
                'id' => 107,
                'migration' => '2020_02_24_114104_create_income_table',
                'batch' => 16,
            ),
            107 => 
            array (
                'id' => 108,
                'migration' => '2020_09_10_171351_create_share_charge_options_table',
                'batch' => 17,
            ),
            108 => 
            array (
                'id' => 109,
                'migration' => '2020_09_10_171936_create_share_transaction_types_table',
                'batch' => 17,
            ),
            109 => 
            array (
                'id' => 110,
                'migration' => '2020_09_10_171940_create_share_charge_types_table',
                'batch' => 17,
            ),
            110 => 
            array (
                'id' => 111,
                'migration' => '2020_09_10_171940_create_share_charges_table',
                'batch' => 17,
            ),
            111 => 
            array (
                'id' => 112,
                'migration' => '2020_09_10_171959_create_share_products_table',
                'batch' => 17,
            ),
            112 => 
            array (
                'id' => 113,
                'migration' => '2020_09_10_172033_create_share_product_linked_charges_table',
                'batch' => 17,
            ),
            113 => 
            array (
                'id' => 114,
                'migration' => '2020_09_10_172054_create_shares_table',
                'batch' => 17,
            ),
            114 => 
            array (
                'id' => 115,
                'migration' => '2020_09_10_172110_create_share_linked_charges_table',
                'batch' => 17,
            ),
            115 => 
            array (
                'id' => 116,
                'migration' => '2020_09_10_172120_create_share_transactions_table',
                'batch' => 17,
            ),
            116 => 
            array (
                'id' => 117,
                'migration' => '2020_09_10_172155_create_share_market_periods_table',
                'batch' => 17,
            ),
            117 => 
            array (
                'id' => 118,
                'migration' => '2019_07_15_125704_create_activity_log_table',
                'batch' => 18,
            ),
            118 => 
            array (
                'id' => 119,
                'migration' => '2022_07_13_135728_add_event_column_to_activity_log_table',
                'batch' => 18,
            ),
            119 => 
            array (
                'id' => 120,
                'migration' => '2022_07_13_135729_add_batch_uuid_column_to_activity_log_table',
                'batch' => 18,
            ),
            120 => 
            array (
                'id' => 121,
                'migration' => '2020_08_31_141646_create_wallets_table',
                'batch' => 19,
            ),
            121 => 
            array (
                'id' => 122,
                'migration' => '2020_08_31_150716_create_wallet_transactions_table',
                'batch' => 19,
            ),
            122 => 
            array (
                'id' => 123,
                'migration' => '2025_03_30_214911_create_activity_log_table',
                'batch' => 0,
            ),
            123 => 
            array (
                'id' => 124,
                'migration' => '2025_03_30_214911_create_asset_depreciation_table',
                'batch' => 0,
            ),
            124 => 
            array (
                'id' => 125,
                'migration' => '2025_03_30_214911_create_asset_files_table',
                'batch' => 0,
            ),
            125 => 
            array (
                'id' => 126,
                'migration' => '2025_03_30_214911_create_asset_maintenance_table',
                'batch' => 0,
            ),
            126 => 
            array (
                'id' => 127,
                'migration' => '2025_03_30_214911_create_asset_maintenance_types_table',
                'batch' => 0,
            ),
            127 => 
            array (
                'id' => 128,
                'migration' => '2025_03_30_214911_create_asset_notes_table',
                'batch' => 0,
            ),
            128 => 
            array (
                'id' => 129,
                'migration' => '2025_03_30_214911_create_asset_pictures_table',
                'batch' => 0,
            ),
            129 => 
            array (
                'id' => 130,
                'migration' => '2025_03_30_214911_create_asset_types_table',
                'batch' => 0,
            ),
            130 => 
            array (
                'id' => 131,
                'migration' => '2025_03_30_214911_create_assets_table',
                'batch' => 0,
            ),
            131 => 
            array (
                'id' => 132,
                'migration' => '2025_03_30_214911_create_branch_users_table',
                'batch' => 0,
            ),
            132 => 
            array (
                'id' => 133,
                'migration' => '2025_03_30_214911_create_branches_table',
                'batch' => 0,
            ),
            133 => 
            array (
                'id' => 134,
                'migration' => '2025_03_30_214911_create_chart_of_accounts_table',
                'batch' => 0,
            ),
            134 => 
            array (
                'id' => 135,
                'migration' => '2025_03_30_214911_create_client_file_types_table',
                'batch' => 0,
            ),
            135 => 
            array (
                'id' => 136,
                'migration' => '2025_03_30_214911_create_client_files_table',
                'batch' => 0,
            ),
            136 => 
            array (
                'id' => 137,
                'migration' => '2025_03_30_214911_create_client_identification_table',
                'batch' => 0,
            ),
            137 => 
            array (
                'id' => 138,
                'migration' => '2025_03_30_214911_create_client_identification_types_table',
                'batch' => 0,
            ),
            138 => 
            array (
                'id' => 139,
                'migration' => '2025_03_30_214911_create_client_next_of_kin_table',
                'batch' => 0,
            ),
            139 => 
            array (
                'id' => 140,
                'migration' => '2025_03_30_214911_create_client_relationships_table',
                'batch' => 0,
            ),
            140 => 
            array (
                'id' => 141,
                'migration' => '2025_03_30_214911_create_client_types_table',
                'batch' => 0,
            ),
            141 => 
            array (
                'id' => 142,
                'migration' => '2025_03_30_214911_create_client_users_table',
                'batch' => 0,
            ),
            142 => 
            array (
                'id' => 143,
                'migration' => '2025_03_30_214911_create_clients_table',
                'batch' => 0,
            ),
            143 => 
            array (
                'id' => 144,
                'migration' => '2025_03_30_214911_create_communication_campaign_attachment_types_table',
                'batch' => 0,
            ),
            144 => 
            array (
                'id' => 145,
                'migration' => '2025_03_30_214911_create_communication_campaign_business_rules_table',
                'batch' => 0,
            ),
            145 => 
            array (
                'id' => 146,
                'migration' => '2025_03_30_214911_create_communication_campaign_logs_table',
                'batch' => 0,
            ),
            146 => 
            array (
                'id' => 147,
                'migration' => '2025_03_30_214911_create_communication_campaigns_table',
                'batch' => 0,
            ),
            147 => 
            array (
                'id' => 148,
                'migration' => '2025_03_30_214911_create_countries_table',
                'batch' => 0,
            ),
            148 => 
            array (
                'id' => 149,
                'migration' => '2025_03_30_214911_create_currencies_table',
                'batch' => 0,
            ),
            149 => 
            array (
                'id' => 150,
                'migration' => '2025_03_30_214911_create_custom_fields_table',
                'batch' => 0,
            ),
            150 => 
            array (
                'id' => 151,
                'migration' => '2025_03_30_214911_create_custom_fields_meta_table',
                'batch' => 0,
            ),
            151 => 
            array (
                'id' => 152,
                'migration' => '2025_03_30_214911_create_expense_types_table',
                'batch' => 0,
            ),
            152 => 
            array (
                'id' => 153,
                'migration' => '2025_03_30_214911_create_expenses_table',
                'batch' => 0,
            ),
            153 => 
            array (
                'id' => 154,
                'migration' => '2025_03_30_214911_create_failed_jobs_table',
                'batch' => 0,
            ),
            154 => 
            array (
                'id' => 155,
                'migration' => '2025_03_30_214911_create_funds_table',
                'batch' => 0,
            ),
            155 => 
            array (
                'id' => 156,
                'migration' => '2025_03_30_214911_create_income_table',
                'batch' => 0,
            ),
            156 => 
            array (
                'id' => 157,
                'migration' => '2025_03_30_214911_create_income_types_table',
                'batch' => 0,
            ),
            157 => 
            array (
                'id' => 158,
                'migration' => '2025_03_30_214911_create_jobs_table',
                'batch' => 0,
            ),
            158 => 
            array (
                'id' => 159,
                'migration' => '2025_03_30_214911_create_journal_entries_table',
                'batch' => 0,
            ),
            159 => 
            array (
                'id' => 160,
                'migration' => '2025_03_30_214911_create_loan_applications_table',
                'batch' => 0,
            ),
            160 => 
            array (
                'id' => 161,
                'migration' => '2025_03_30_214911_create_loan_charge_options_table',
                'batch' => 0,
            ),
            161 => 
            array (
                'id' => 162,
                'migration' => '2025_03_30_214911_create_loan_charge_types_table',
                'batch' => 0,
            ),
            162 => 
            array (
                'id' => 163,
                'migration' => '2025_03_30_214911_create_loan_charges_table',
                'batch' => 0,
            ),
            163 => 
            array (
                'id' => 164,
                'migration' => '2025_03_30_214911_create_loan_collateral_table',
                'batch' => 0,
            ),
            164 => 
            array (
                'id' => 165,
                'migration' => '2025_03_30_214911_create_loan_collateral_types_table',
                'batch' => 0,
            ),
            165 => 
            array (
                'id' => 166,
                'migration' => '2025_03_30_214911_create_loan_credit_checks_table',
                'batch' => 0,
            ),
            166 => 
            array (
                'id' => 167,
                'migration' => '2025_03_30_214911_create_loan_disbursement_channels_table',
                'batch' => 0,
            ),
            167 => 
            array (
                'id' => 168,
                'migration' => '2025_03_30_214911_create_loan_file_types_table',
                'batch' => 0,
            ),
            168 => 
            array (
                'id' => 169,
                'migration' => '2025_03_30_214911_create_loan_files_table',
                'batch' => 0,
            ),
            169 => 
            array (
                'id' => 170,
                'migration' => '2025_03_30_214911_create_loan_guarantors_table',
                'batch' => 0,
            ),
            170 => 
            array (
                'id' => 171,
                'migration' => '2025_03_30_214911_create_loan_history_table',
                'batch' => 0,
            ),
            171 => 
            array (
                'id' => 172,
                'migration' => '2025_03_30_214911_create_loan_linked_charges_table',
                'batch' => 0,
            ),
            172 => 
            array (
                'id' => 173,
                'migration' => '2025_03_30_214911_create_loan_linked_credit_checks_table',
                'batch' => 0,
            ),
            173 => 
            array (
                'id' => 174,
                'migration' => '2025_03_30_214911_create_loan_notes_table',
                'batch' => 0,
            ),
            174 => 
            array (
                'id' => 175,
                'migration' => '2025_03_30_214911_create_loan_officer_history_table',
                'batch' => 0,
            ),
            175 => 
            array (
                'id' => 176,
                'migration' => '2025_03_30_214911_create_loan_product_linked_charges_table',
                'batch' => 0,
            ),
            176 => 
            array (
                'id' => 177,
                'migration' => '2025_03_30_214911_create_loan_product_linked_credit_checks_table',
                'batch' => 0,
            ),
            177 => 
            array (
                'id' => 178,
                'migration' => '2025_03_30_214911_create_loan_products_table',
                'batch' => 0,
            ),
            178 => 
            array (
                'id' => 179,
                'migration' => '2025_03_30_214911_create_loan_provisioning_table',
                'batch' => 0,
            ),
            179 => 
            array (
                'id' => 180,
                'migration' => '2025_03_30_214911_create_loan_purposes_table',
                'batch' => 0,
            ),
            180 => 
            array (
                'id' => 181,
                'migration' => '2025_03_30_214911_create_loan_repayment_schedules_table',
                'batch' => 0,
            ),
            181 => 
            array (
                'id' => 182,
                'migration' => '2025_03_30_214911_create_loan_transaction_processing_strategies_table',
                'batch' => 0,
            ),
            182 => 
            array (
                'id' => 183,
                'migration' => '2025_03_30_214911_create_loan_transaction_types_table',
                'batch' => 0,
            ),
            183 => 
            array (
                'id' => 184,
                'migration' => '2025_03_30_214911_create_loan_transactions_table',
                'batch' => 0,
            ),
            184 => 
            array (
                'id' => 185,
                'migration' => '2025_03_30_214911_create_loans_table',
                'batch' => 0,
            ),
            185 => 
            array (
                'id' => 186,
                'migration' => '2025_03_30_214911_create_menus_table',
                'batch' => 0,
            ),
            186 => 
            array (
                'id' => 187,
                'migration' => '2025_03_30_214911_create_model_has_permissions_table',
                'batch' => 0,
            ),
            187 => 
            array (
                'id' => 188,
                'migration' => '2025_03_30_214911_create_model_has_roles_table',
                'batch' => 0,
            ),
            188 => 
            array (
                'id' => 189,
                'migration' => '2025_03_30_214911_create_notifications_table',
                'batch' => 0,
            ),
            189 => 
            array (
                'id' => 190,
                'migration' => '2025_03_30_214911_create_oauth_access_tokens_table',
                'batch' => 0,
            ),
            190 => 
            array (
                'id' => 191,
                'migration' => '2025_03_30_214911_create_oauth_auth_codes_table',
                'batch' => 0,
            ),
            191 => 
            array (
                'id' => 192,
                'migration' => '2025_03_30_214911_create_oauth_clients_table',
                'batch' => 0,
            ),
            192 => 
            array (
                'id' => 193,
                'migration' => '2025_03_30_214911_create_oauth_personal_access_clients_table',
                'batch' => 0,
            ),
            193 => 
            array (
                'id' => 194,
                'migration' => '2025_03_30_214911_create_oauth_refresh_tokens_table',
                'batch' => 0,
            ),
            194 => 
            array (
                'id' => 195,
                'migration' => '2025_03_30_214911_create_password_resets_table',
                'batch' => 0,
            ),
            195 => 
            array (
                'id' => 196,
                'migration' => '2025_03_30_214911_create_payment_details_table',
                'batch' => 0,
            ),
            196 => 
            array (
                'id' => 197,
                'migration' => '2025_03_30_214911_create_payment_types_table',
                'batch' => 0,
            ),
            197 => 
            array (
                'id' => 198,
                'migration' => '2025_03_30_214911_create_payroll_table',
                'batch' => 0,
            ),
            198 => 
            array (
                'id' => 199,
                'migration' => '2025_03_30_214911_create_payroll_items_table',
                'batch' => 0,
            ),
            199 => 
            array (
                'id' => 200,
                'migration' => '2025_03_30_214911_create_payroll_items_meta_table',
                'batch' => 0,
            ),
            200 => 
            array (
                'id' => 201,
                'migration' => '2025_03_30_214911_create_payroll_payments_table',
                'batch' => 0,
            ),
            201 => 
            array (
                'id' => 202,
                'migration' => '2025_03_30_214911_create_payroll_template_items_table',
                'batch' => 0,
            ),
            202 => 
            array (
                'id' => 203,
                'migration' => '2025_03_30_214911_create_payroll_templates_table',
                'batch' => 0,
            ),
            203 => 
            array (
                'id' => 204,
                'migration' => '2025_03_30_214911_create_permissions_table',
                'batch' => 0,
            ),
            204 => 
            array (
                'id' => 205,
                'migration' => '2025_03_30_214911_create_professions_table',
                'batch' => 0,
            ),
            205 => 
            array (
                'id' => 206,
                'migration' => '2025_03_30_214911_create_role_has_permissions_table',
                'batch' => 0,
            ),
            206 => 
            array (
                'id' => 207,
                'migration' => '2025_03_30_214911_create_roles_table',
                'batch' => 0,
            ),
            207 => 
            array (
                'id' => 208,
                'migration' => '2025_03_30_214911_create_savings_table',
                'batch' => 0,
            ),
            208 => 
            array (
                'id' => 209,
                'migration' => '2025_03_30_214911_create_savings_charge_options_table',
                'batch' => 0,
            ),
            209 => 
            array (
                'id' => 210,
                'migration' => '2025_03_30_214911_create_savings_charge_types_table',
                'batch' => 0,
            ),
            210 => 
            array (
                'id' => 211,
                'migration' => '2025_03_30_214911_create_savings_charges_table',
                'batch' => 0,
            ),
            211 => 
            array (
                'id' => 212,
                'migration' => '2025_03_30_214911_create_savings_file_types_table',
                'batch' => 0,
            ),
            212 => 
            array (
                'id' => 213,
                'migration' => '2025_03_30_214911_create_savings_files_table',
                'batch' => 0,
            ),
            213 => 
            array (
                'id' => 214,
                'migration' => '2025_03_30_214911_create_savings_linked_charges_table',
                'batch' => 0,
            ),
            214 => 
            array (
                'id' => 215,
                'migration' => '2025_03_30_214911_create_savings_product_linked_charges_table',
                'batch' => 0,
            ),
            215 => 
            array (
                'id' => 216,
                'migration' => '2025_03_30_214911_create_savings_products_table',
                'batch' => 0,
            ),
            216 => 
            array (
                'id' => 217,
                'migration' => '2025_03_30_214911_create_savings_transaction_types_table',
                'batch' => 0,
            ),
            217 => 
            array (
                'id' => 218,
                'migration' => '2025_03_30_214911_create_savings_transactions_table',
                'batch' => 0,
            ),
            218 => 
            array (
                'id' => 219,
                'migration' => '2025_03_30_214911_create_settings_table',
                'batch' => 0,
            ),
            219 => 
            array (
                'id' => 220,
                'migration' => '2025_03_30_214911_create_share_charge_options_table',
                'batch' => 0,
            ),
            220 => 
            array (
                'id' => 221,
                'migration' => '2025_03_30_214911_create_share_charge_types_table',
                'batch' => 0,
            ),
            221 => 
            array (
                'id' => 222,
                'migration' => '2025_03_30_214911_create_share_charges_table',
                'batch' => 0,
            ),
            222 => 
            array (
                'id' => 223,
                'migration' => '2025_03_30_214911_create_share_linked_charges_table',
                'batch' => 0,
            ),
            223 => 
            array (
                'id' => 224,
                'migration' => '2025_03_30_214911_create_share_market_periods_table',
                'batch' => 0,
            ),
            224 => 
            array (
                'id' => 225,
                'migration' => '2025_03_30_214911_create_share_product_linked_charges_table',
                'batch' => 0,
            ),
            225 => 
            array (
                'id' => 226,
                'migration' => '2025_03_30_214911_create_share_products_table',
                'batch' => 0,
            ),
            226 => 
            array (
                'id' => 227,
                'migration' => '2025_03_30_214911_create_share_transaction_types_table',
                'batch' => 0,
            ),
            227 => 
            array (
                'id' => 228,
                'migration' => '2025_03_30_214911_create_share_transactions_table',
                'batch' => 0,
            ),
            228 => 
            array (
                'id' => 229,
                'migration' => '2025_03_30_214911_create_shares_table',
                'batch' => 0,
            ),
            229 => 
            array (
                'id' => 230,
                'migration' => '2025_03_30_214911_create_sms_gateways_table',
                'batch' => 0,
            ),
            230 => 
            array (
                'id' => 231,
                'migration' => '2025_03_30_214911_create_tax_rates_table',
                'batch' => 0,
            ),
            231 => 
            array (
                'id' => 232,
                'migration' => '2025_03_30_214911_create_telescope_entries_table',
                'batch' => 0,
            ),
            232 => 
            array (
                'id' => 233,
                'migration' => '2025_03_30_214911_create_telescope_entries_tags_table',
                'batch' => 0,
            ),
            233 => 
            array (
                'id' => 234,
                'migration' => '2025_03_30_214911_create_telescope_monitoring_table',
                'batch' => 0,
            ),
            234 => 
            array (
                'id' => 235,
                'migration' => '2025_03_30_214911_create_timezones_table',
                'batch' => 0,
            ),
            235 => 
            array (
                'id' => 236,
                'migration' => '2025_03_30_214911_create_titles_table',
                'batch' => 0,
            ),
            236 => 
            array (
                'id' => 237,
                'migration' => '2025_03_30_214911_create_users_table',
                'batch' => 0,
            ),
            237 => 
            array (
                'id' => 238,
                'migration' => '2025_03_30_214911_create_wallet_transactions_table',
                'batch' => 0,
            ),
            238 => 
            array (
                'id' => 239,
                'migration' => '2025_03_30_214911_create_wallets_table',
                'batch' => 0,
            ),
            239 => 
            array (
                'id' => 240,
                'migration' => '2025_03_30_214911_create_widgets_table',
                'batch' => 0,
            ),
            240 => 
            array (
                'id' => 241,
                'migration' => '2025_03_30_214914_add_foreign_keys_to_loan_credit_checks_table',
                'batch' => 0,
            ),
            241 => 
            array (
                'id' => 242,
                'migration' => '2025_03_30_214914_add_foreign_keys_to_model_has_permissions_table',
                'batch' => 0,
            ),
            242 => 
            array (
                'id' => 243,
                'migration' => '2025_03_30_214914_add_foreign_keys_to_model_has_roles_table',
                'batch' => 0,
            ),
            243 => 
            array (
                'id' => 244,
                'migration' => '2025_03_30_214914_add_foreign_keys_to_role_has_permissions_table',
                'batch' => 0,
            ),
            244 => 
            array (
                'id' => 245,
                'migration' => '2025_03_30_214914_add_foreign_keys_to_savings_charges_table',
                'batch' => 0,
            ),
            245 => 
            array (
                'id' => 246,
                'migration' => '2025_03_30_214914_add_foreign_keys_to_sms_gateways_table',
                'batch' => 0,
            ),
            246 => 
            array (
                'id' => 247,
                'migration' => '2025_03_30_214914_add_foreign_keys_to_telescope_entries_tags_table',
                'batch' => 0,
            ),
            247 => 
            array (
                'id' => 248,
                'migration' => '2025_03_30_214914_add_foreign_keys_to_widgets_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}
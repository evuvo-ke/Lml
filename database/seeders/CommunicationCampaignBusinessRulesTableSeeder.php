<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommunicationCampaignBusinessRulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('communication_campaign_business_rules')->delete();
        
        \DB::table('communication_campaign_business_rules')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Active Clients',
                'translated_name' => NULL,
                'description' => 'All clients with the status ‘Active’',
                'active' => 1,
                'is_trigger' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Prospective Clients',
                'translated_name' => NULL,
                'description' => 'All clients with the status ‘Active’ who have never had a loan before',
                'active' => 1,
                'is_trigger' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Active Loan Clients',
                'translated_name' => NULL,
                'description' => 'All clients with an outstanding loan',
                'active' => 1,
                'is_trigger' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Loans in arrears',
                'translated_name' => NULL,
                'description' => 'All clients with an outstanding loan in arrears between X and Y days',
                'active' => 1,
                'is_trigger' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Loans disbursed to clients',
                'translated_name' => NULL,
                'description' => 'All clients who have had a loan disbursed to them in the last X to Y days',
                'active' => 1,
                'is_trigger' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Loan payments due',
                'translated_name' => NULL,
                'description' => 'All clients with an unpaid installment due on their loan between X and Y days',
                'active' => 1,
                'is_trigger' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Dormant Prospects',
                'translated_name' => NULL,
                'description' => 'All individuals who have not yet received a loan but were also entered into the system more than 3 months',
                'active' => 0,
                'is_trigger' => 0,
            ),
            7 => 
            array (
                'id' => 8,
            'name' => 'Loan Payments Due (Overdue Loans)',
                'translated_name' => NULL,
                'description' => 'Loan Payments Due between X to Y days for clients in arrears between X and Y days',
                'active' => 0,
                'is_trigger' => 0,
            ),
            8 => 
            array (
                'id' => 9,
            'name' => 'Loan Payments Received (Active Loans)',
                'translated_name' => NULL,
            'description' => 'Payments received in the last X to Y days for any loan with the status Active (on-time)',
                'active' => 0,
                'is_trigger' => 0,
            ),
            9 => 
            array (
                'id' => 10,
            'name' => 'Loan Payments Received (Overdue Loans) ',
                'translated_name' => NULL,
            'description' => 'Payments received in the last X to Y days for any loan with the status Overdue (arrears) between X and Y days',
                'active' => 0,
                'is_trigger' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Happy Birthday',
                'translated_name' => NULL,
                'description' => 'This sends a message to all clients with the status Active on their Birthday',
                'active' => 0,
                'is_trigger' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Loan Fully Repaid',
                'translated_name' => NULL,
            'description' => 'All loans that have been fully repaid (Closed or Overpaid) in the last X to Y days',
                'active' => 0,
                'is_trigger' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Loans Outstanding after final instalment date',
                'translated_name' => NULL,
            'description' => 'All active loans (with an outstanding balance) between X to Y days after the final instalment date on their loan schedule',
                'active' => 0,
                'is_trigger' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Past Loan Clients',
                'translated_name' => NULL,
                'description' => 'Past Loan Clients who have previously had a loan but do not currently have one and finished repaying their most recent loan in the last X to Y days.',
                'active' => 0,
                'is_trigger' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Loan Submitted',
                'translated_name' => NULL,
                'description' => 'Loan and client data of submitted loan',
                'active' => 1,
                'is_trigger' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Loan Rejected',
                'translated_name' => NULL,
                'description' => 'Loan and client data of rejected loan',
                'active' => 1,
                'is_trigger' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Loan Approved',
                'translated_name' => NULL,
                'description' => 'Loan and client data of approved loan',
                'active' => 1,
                'is_trigger' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Loan Disbursed',
                'translated_name' => NULL,
                'description' => 'Loan Disbursed',
                'active' => 1,
                'is_trigger' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Loan Rescheduled',
                'translated_name' => NULL,
                'description' => 'Loan Rescheduled',
                'active' => 1,
                'is_trigger' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Loan Closed',
                'translated_name' => NULL,
                'description' => 'Loan Closed',
                'active' => 1,
                'is_trigger' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Loan Repayment',
                'translated_name' => NULL,
                'description' => 'Loan Repayment',
                'active' => 1,
                'is_trigger' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Savings Submitted',
                'translated_name' => NULL,
                'description' => 'Savings and client data of submitted savings',
                'active' => 1,
                'is_trigger' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Savings Rejected',
                'translated_name' => NULL,
                'description' => 'Savings and client data of rejected savings',
                'active' => 1,
                'is_trigger' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Savings Approved',
                'translated_name' => NULL,
                'description' => 'Savings and client data of approved savings',
                'active' => 1,
                'is_trigger' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Savings Activated',
                'translated_name' => NULL,
                'description' => 'Savings Activated',
                'active' => 1,
                'is_trigger' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Savings Dormant',
                'translated_name' => NULL,
                'description' => 'Savings Dormant',
                'active' => 1,
                'is_trigger' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Savings Inactive',
                'translated_name' => NULL,
                'description' => 'Savings Inactive',
                'active' => 1,
                'is_trigger' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Savings Closed',
                'translated_name' => NULL,
                'description' => 'Savings Closed',
                'active' => 1,
                'is_trigger' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Savings Deposit',
                'translated_name' => NULL,
                'description' => 'Savings Deposit',
                'active' => 1,
                'is_trigger' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Savings Withdrawal',
                'translated_name' => NULL,
                'description' => 'Savings Withdrawal',
                'active' => 1,
                'is_trigger' => 1,
            ),
        ));
        
        
    }
}
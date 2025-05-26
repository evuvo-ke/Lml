<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LoanCreditChecksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('loan_credit_checks')->delete();
        
        \DB::table('loan_credit_checks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_by_id' => NULL,
                'name' => 'Client Written-Off Loans Check',
                'translated_name' => 'Client Written-Off Loans Check',
                'security_level' => 'block',
                'rating_type' => 'boolean',
                'pass_min_amount' => NULL,
                'pass_max_amount' => NULL,
                'warn_min_amount' => NULL,
                'warn_max_amount' => NULL,
                'fail_min_amount' => NULL,
                'fail_max_amount' => NULL,
                'general_error_msg' => 'The client has one or more written-off loans',
                'user_friendly_error_msg' => 'The client has one or more written-off loans',
                'general_warning_msg' => 'The client has one or more written-off loans',
                'user_friendly_warning_msg' => 'The client has one or more written-off loans',
                'general_success_msg' => 'The client has one or more written-off loans',
                'user_friendly_success_msg' => 'The client has one or more written-off loans',
                'active' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_by_id' => NULL,
                'name' => 'Same Product Outstanding',
                'translated_name' => 'Same Product Outstanding',
                'security_level' => 'block',
                'rating_type' => 'boolean',
                'pass_min_amount' => NULL,
                'pass_max_amount' => NULL,
                'warn_min_amount' => NULL,
                'warn_max_amount' => NULL,
                'fail_min_amount' => NULL,
                'fail_max_amount' => NULL,
                'general_error_msg' => 'The client has an active loan for the same product',
                'user_friendly_error_msg' => 'The client has an active loan for the same product',
                'general_warning_msg' => 'The client has an active loan for the same product',
                'user_friendly_warning_msg' => 'The client has an active loan for the same product',
                'general_success_msg' => 'The client has an active loan for the same product',
                'user_friendly_success_msg' => 'The client has an active loan for the same product',
                'active' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'created_by_id' => NULL,
                'name' => 'Client Arrears',
                'translated_name' => 'Client Arrears',
                'security_level' => 'block',
                'rating_type' => 'boolean',
                'pass_min_amount' => NULL,
                'pass_max_amount' => NULL,
                'warn_min_amount' => NULL,
                'warn_max_amount' => NULL,
                'fail_min_amount' => NULL,
                'fail_max_amount' => NULL,
                'general_error_msg' => 'Client has arrears on existing loans',
                'user_friendly_error_msg' => 'Client has arrears on existing loans',
                'general_warning_msg' => 'Client has arrears on existing loans',
                'user_friendly_warning_msg' => 'Client has arrears on existing loans',
                'general_success_msg' => 'Client has arrears on existing loans',
                'user_friendly_success_msg' => 'Client has arrears on existing loans',
                'active' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'created_by_id' => NULL,
                'name' => 'Outstanding Loan Balance',
                'translated_name' => 'Outstanding Loan Balance',
                'security_level' => 'block',
                'rating_type' => 'boolean',
                'pass_min_amount' => NULL,
                'pass_max_amount' => NULL,
                'warn_min_amount' => NULL,
                'warn_max_amount' => NULL,
                'fail_min_amount' => NULL,
                'fail_max_amount' => NULL,
                'general_error_msg' => 'Client has outstanding balance on existing loans',
                'user_friendly_error_msg' => 'Client has outstanding balance on existing loans',
                'general_warning_msg' => 'Client has outstanding balance on existing loans',
                'user_friendly_warning_msg' => 'Client has outstanding balance on existing loans',
                'general_success_msg' => 'Client has outstanding balance on existing loans',
                'user_friendly_success_msg' => 'Client has outstanding balance on existing loans',
                'active' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'created_by_id' => NULL,
                'name' => 'Rejected and withdrawn loans',
                'translated_name' => 'Rejected and withdrawn loans',
                'security_level' => 'block',
                'rating_type' => 'boolean',
                'pass_min_amount' => NULL,
                'pass_max_amount' => NULL,
                'warn_min_amount' => NULL,
                'warn_max_amount' => NULL,
                'fail_min_amount' => NULL,
                'fail_max_amount' => NULL,
                'general_error_msg' => 'This client has had one or more rejected or withdrawn loans',
                'user_friendly_error_msg' => 'This client has had one or more rejected or withdrawn loans',
                'general_warning_msg' => 'This client has had one or more rejected or withdrawn loans',
                'user_friendly_warning_msg' => 'This client has had one or more rejected or withdrawn loans',
                'general_success_msg' => 'This client has had one or more rejected or withdrawn loans',
                'user_friendly_success_msg' => 'This client has had one or more rejected or withdrawn loans',
                'active' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'created_by_id' => NULL,
                'name' => 'Total collateral items value',
                'translated_name' => 'Total collateral items value',
                'security_level' => 'block',
                'rating_type' => 'boolean',
                'pass_min_amount' => NULL,
                'pass_max_amount' => NULL,
                'warn_min_amount' => NULL,
                'warn_max_amount' => NULL,
                'fail_min_amount' => NULL,
                'fail_max_amount' => NULL,
                'general_error_msg' => 'The total value of collateral items for this loan is less than the principal loanamount',
                'user_friendly_error_msg' => 'The total value of collateral items for this loan is less than the principal loanamount',
                'general_warning_msg' => 'The total value of collateral items for this loan is less than the principal loanamount',
                'user_friendly_warning_msg' => 'The total value of collateral items for this loan is less than the principal loanamount',
                'general_success_msg' => 'The total value of collateral items for this loan is less than the principal loanamount',
                'user_friendly_success_msg' => 'The total value of collateral items for this loan is less than the principal loanamount',
                'active' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
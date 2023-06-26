<?php
class Donations
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function __destruct()
    {
    }
    
    /**
     * Set friendly columns\' names to order tables\' entries
     */
    public function setOrderingValues()
    {
        $ordering = [
            'donate_id' => 'ID',
            'donor_name' => 'Name',
            'donor_email' => 'Email',
            'donor_phone' => 'Phone',
            'donate_towards' => 'Donate For',
            'donated_amount' => 'Amount',
            'donate_mode' => 'Mode',
			'transaction_number' => 'Tx. No.',
			'donated_date' => 'Donated Date'
        ];

        return $ordering;
    }
}
?>

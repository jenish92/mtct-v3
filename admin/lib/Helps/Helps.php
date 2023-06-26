<?php
class Helps
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
    public function setOrderingValues($help_type)
    {
        if($help_type == 2){
            
            $ordering = [
            'id' => 'Request ID',
            'requestor_name' => 'Name',
            'requestor_age' => 'Age',
            'requestor_gender' => 'Gender',
            'requestor_place' => 'Place',
            'requestor_ailment' => 'Nature of Ailment',
            'requestor_amount' => 'Amount Requested',
            'treatment_in' => 'Treatment in',
            'requestor_background' => 'Family Background',
            'requestor_photo' => 'Photo',
            'requestor_profile' => 'Profile',
            'created_date' => 'Created On',
            'modified_date' => 'Modified On',
			'created_by' => 'Created By',
			'modified_by' => 'Modified By'
        ];
            
        }
        else{
            $ordering = [
            'id' => 'Request ID',
            'requestor_name' => 'Name',
            'requestor_age' => 'Age',
            'requestor_gender' => 'Gender',
            'requestor_place' => 'Place',
            'requestor_education' => 'Education',
            'requestor_amount' => 'Amount Requested',
            'requestor_background' => 'Family Background',
            'requestor_photo' => 'Photo',
            'requestor_profile' => 'Profile',
            'created_date' => 'Created On',
            'modified_date' => 'Modified On',
			'created_by' => 'Created By',
			'modified_by' => 'Modified By'
        ];
        }

        return $ordering;
    }
}
?>

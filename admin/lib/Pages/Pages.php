<?php
class Pages
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
            'page_id' => 'ID',
            'page_url' => 'URL',
            'meta_title' => 'Title',
            'meta_keywords' => 'Keywords',
            'meta_description' => 'Description',
            'created_date' => 'Created On',
            'modified_date' => 'Modified On',
			'created_by' => 'Created By',
			'modified_by' => 'Modified By'
        ];

        return $ordering;
    }
}
?>

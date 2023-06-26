<?php
class Projects
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
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'img_link' => 'Image',
            'more_link' => 'URL'
        ];

        return $ordering;
    }
}
?>

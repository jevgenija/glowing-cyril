<?php

namespace Plugin\SlideShow;

/**
 * Class Config
 * @package Plugin\SlideShow
 */

class Config
{
    /**
     * Table name to store records
     */
    const TABLE_NAME = 'slideshow';

    /**
     * GRID config
     */
    public static function grid()
    {
        $gridConfig = array(
            'title' => 'Slide Show',
            'table' => Config::TABLE_NAME,
            'deleteWarning' => 'Are you sure?',
            'sortField' => 'slideshowOrder',
            'createPosition' => 'top',
            'createFilter' => function($data) {
                $data['widgetId'] = ipRequest()->getQuery('widgetId');
                return $data;
            },
            'pageSize' => 20,
            'fields' => array(
                array(
                    'label' => 'Title',
                    'field' => 'title',
                    'validators' => array('Required')
                ),               
                array(
                    'label' => 'Text',
                    'field' => 'text',
                ),
                array(
                    'label' => 'Url',
                    'field' => 'url',
                ),
                array(
                    'type' => 'RepositoryFile',
                    'label' => 'Image',
                    'showInList' => true,
                    'field' => 'image',
					'preview' => 'Plugin\SlideShow\Model::showImage'
                ),
				array(
					'type' => 'Checkbox',
                    'label' => 'Visible',
                    'field' => 'isVisible',
					'checked' => 1,
					'defaultValue' => 1 
                ),

            )
        );
        return $gridConfig;
    }
}

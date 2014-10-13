<?php

namespace Plugin\SlideShow;


class Event
{
    public static function ipBeforeController()
    {
        if (ipIsManagementState()) {
            ipAddCss('assets/gridWidget.css');
            ipAddCss('assets/admin_custom.css');
        }
		ipAddCss('assets/style.css');
		
		ipAddJs('assets/scripts.js');
    }
}


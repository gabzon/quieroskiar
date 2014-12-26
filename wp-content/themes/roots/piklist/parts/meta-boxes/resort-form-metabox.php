<?php
/*
Title: Include a new resort
Post Type: resort
*/

/*******************************************************************************
** Resort and/or Tourist office Information
** Address, NPA, Location, Phone, Fax, Email, Website
*******************************************************************************/
piklist('field', array(
   'type'         => 'group',
   'field'        => 'resort_tourist_office_group',
   'label'        => _x('Tourism Office','Piklist metaboxes','roots'),
   'fields'       => array(
         array(
            'type'         => 'text',
            'field'        => 'address',
            'label'        => 'Address',
            'columns'      => 12,
            'attributes'   => array('placeholder' => 'Enter the addres here')
         ),
         array(
            'type'         => 'text',
            'field'        => 'npa',
            'label'        => _x('NPA','Piklist metaboxes','roots'),
            'columns'      => 2
         ),
         array(
            'type'         => 'text',
            'field'        => 'location',
            'label'        => _x('Location','Piklist metaboxes','roots'),
            'columns'      => 5,
         ),
         array(
            'type'         => 'text',
            'field'        => 'phone',
            'label'        => _x('Phone Number', 'Pikilist metaboxes', 'roots'),
            'required'     => false,
            'columns'      => 6,
            'attributes'   => array('placeholder' => '+41 xx xxx xx xx')
         ),
         array(
            'type'         => 'text',
            'field'        => 'fax',
            'label'        => 'Fax',
            'columns'      => 6,
            'attributes'   => array('placeholder' => '+41 xx xxx xx xx')
         ),
         array(
            'type'         => 'text',
            'field'        => 'email',
            'label'        => 'Email',
            'columns'      => 6,
            'attributes'   => array('placeholder' => 'mail@want2ski.ch'),
            //'validate'     => array(
                  //array('type' => 'email'),
            //)
         ),
         array(
            'type' => 'text',
            'field' => 'website',
            'label' => 'Website',
            'columns' => 6,
            'attributes' => array('placeholder' => 'Example: www.wan2ski.ch')
         )
      )
));

/*******************************************************************************
** Resort and/or Tourist office contact Information
** Name, job title, Phone, Mobile, Email
*******************************************************************************/

piklist('field', array(
   'type'      => 'group',
   'field'     => 'contact_info',
   'label'     => _x('Contact Information','Piklist metaboxes','roots'),
   'add_more'  => true,
   'fields'    => array(
      array(
         'type'      => 'text',
         'field'     => 'contact',
         'label'     => _x('Contact','Piklist metaboxes','roots'),
         'columns'   => 6,
      ),
      array(
         'type'      => 'text',
         'field'     => 'job_title',
         'label'     => _x('Job Title','Piklist metaboxes','roots'),
         'columns'   => 6,
      ),
      array(
         'type'         => 'text',
         'field'        => 'phone_contact',
         'label'        => _x('Phone',''),
         'columns'      => 4,
         'attributes'   => array('placeholder' => '+41 xx xxx xx xx')
      ),
      array(
         'type'         => 'text',
         'field'        => 'mobile_contact',
         'label'        => _x('Mobile','Piklist metaboxes','roots'),
         'columns'      => 4,
         'attributes'   => array('placeholder' => '+41 xx xxx xx xx')
      ),
      array(
         'type'         => 'text',
         'field'        => 'email_contact',
         'label'        => _x('Email','Piklist metaboxes','roots'),
         'columns'      => 4,
         'attributes'   => array('placeholder' => 'info@want2ski.com')
      )
   )
));

/*******************************************************************************
** Resort Social media Information
** Links to Facebook, Twitter, Google+, Pinterest, Instagram, YouTube, Vimeo
*******************************************************************************/
piklist('field', array(
   'type'      => 'group',
   'field'     => 'social_media_info',
   'label'     => _x('Social Media Information','Piklist metaboxes','roots'),
   'add_more'  => true,
   'fields'    => array(
      array(
         'type'      => 'text',
         'field'     => 'social_url',
         'label'     => _x('Social Media URL','Piklist metaboxes','roots'),
         'columns'   => 6
      ),
      array(
         'type'         => 'select',
         'field'        => 'social_type',
         'value'        => '1',
         'label'        => 'Social Type',
         'columns'      => 6,
         'choices'      => array(
            '1' => 'Facebook',
            '2' => 'Twitter',
            '3' => 'Instagram',
            '4' => 'YouTube',
            '5' => 'Pinterest',
            '6' => 'Vimeo',
            '7' => 'Google+'
         )
      )
   )
));

/*******************************************************************************
** Resort Seasonal dates
** Conditional option for displaying the opening & closing season
*******************************************************************************/
piklist('field', array(
   'type'      => 'group',
   'label'     => 'Seasonal dates',
   'columns'   => 12,
   'fields'    => array(
      array(
         'type'            => 'checkbox',
         'field'           => 'seasonal',
         'label'           => __('If yes then add opening and closing dates'),
         'choices'         => array('show' => 'Yes'),
         'on_post_status'  => array('value' => 'lock')
      ),
      array(
         'type'            => 'datepicker',
         'field'           => 'opening_date',
         'label'           => 'Opening Date',
         'columns'         => 6,
         'options'         => array('dateFormat' => 'M d, yy'),
         'attributes'      => array('size' => 12),
         'value'           => date('M d, Y', time()),
         'on_post_status'  => array('value' => 'lock'),
         'conditions'      => array(
            array('field' => 'seasonal','value' => 'show')
         )
      ),
      array(
         'type'            => 'datepicker',
         'field'           => 'closing_date',
         'label'           => 'Closing Date',
         'columns'         => 6,
         'options'         => array('dateFormat' => 'M d, yy'),
         'attributes'      => array('size' => 12),
         'value'           => date('M d, Y', time()),
         'on_post_status'  => array('value' => 'lock'),
         'conditions'      => array(
            array('field' => 'seasonal','value' => 'show')
         )
      )
   )
));

/*******************************************************************************
** Resort Opening/Close Hours
** Conditional option for displaying the opening & closing season
*******************************************************************************/

piklist('field', array(
   'type'   => 'group',
   'label'  => 'Opening/Close Hours',
   'fields' => array(
      array(
         'type'            => 'select',
         'field'           => 'open_hour',
         'label'           => 'Opening Hours',
         'columns'         => 6,
         'attributes'      => array('multiple' => 'multiple'),
         'on_post_status'  => array('value' => 'lock'),
         'choices'         => array(
            '1' => '05:00', '2'   => '05:30',
            '3' => '06:00', '4'   => '06:30',
            '5' => '07:00', '6'   => '07:30',
            '7' => '08:00', '8'   => '08:30',
            '9' => '09:00', '10'  => '09:30',
            '11'=> '10:00',
         )
      ),
      array(
         'type'            => 'select',
         'field'           => 'close_hour',
         'label'           => 'Close Hours',
         'columns'         => 6,
         'attributes'      => array('multiple' => 'multiple'),
         'on_post_status'  => array('value' => 'lock'),
         'choices'         => array(
            '1'   => '16:00', '2'  => '16:30',
            '3'   => '17:00', '4'  => '17:30',
            '5'   => '18:00', '6'  => '18:30',
            '7'   => '19:00', '8'  => '19:30',
            '9'   => '20:00', '10' => '20:30',
            '11'  => '21:00', '12' => '21:30',
         ),
      )
   )
));

/*******************************************************************************
** Resort Hotel Acomodations
** Conditional option for displaying the opening & closing season
*******************************************************************************/

piklist('field', array(
   'type'    => 'group',
   'label'   => _x('Hotel / Accomodation','Piklist metaboxes','roots'),
   'field'   => 'resort_accomodation_group',
   'fields'  => array(
      array(
         'type'      => 'text',
         'field'     => 'five_stars',
         'label'     => _x('5 Stars','Piklist metaboxes hotels','roots'),
         'columns'   => 2,
      ),
      array(
         'type'      => 'text',
         'field'     => 'four_star',
         'label'     => _x('4 Stars','Piklist metaboxes hotels','roots'),
         'columns'   => 2,
      ),
      array(
         'type'      => 'text',
         'field'     => 'three_stars',
         'label'     => _x('3 Stars','Piklist metaboxes hotels','roots'),
         'columns'   => 2
      ),
      array(
         'type'      => 'text',
         'field'     => 'two_starts',
         'label'     => _x('2 Stars','Piklist metaboxes hotels','roots'),
         'columns'   => 2
      ),
      array(
         'type'      => 'text',
         'field'     => 'hostels',
         'label'     => _x('Hostels','Piklist metaboxes hotels','roots'),
         'columns'   => 2
      ),
      array(
         'type'      => 'text',
         'field'     => 'bed_breakfast',
         'label'     => _x('B&B','Piklist metaboxes hotels','roots'),
         'columns'   => 2
      )
   )
));

/*******************************************************************************
** Resort Altitude
** Altitude of the highest mountain + altitude of the resort city
*******************************************************************************/

piklist('field', array(
   'type'         => 'text',
   'field'        => 'resort_altitude_highest_mountain',
   'description'  => 'Altitude of highest mountain (in Meters)',
   'label'        => __('Altitude Highest Mountain','roots'),
   'columns'      => 6
));

piklist('field', array(
   'type'         => 'text',
   'field'        => 'resort_altitude_city',
   'description'  => 'Altitude of resort city (in Meters)',
   'label'        => __('Altitude Resort Location','roots'),
   'columns'      => 6
));

/*******************************************************************************
** Resort Image Gallery
** Upload good quality photo for Slideshow
*******************************************************************************/
piklist('field', array(
   'type'      => 'file',
   'field'     => 'upload_photos',
   'label'     => _x('Resort Photo Gallery','Pikilist metaboxes','roots'),
   'options'   => array(
      'modal_title' => __('Resort Photo Gallery','roots'),
      'button' => __('Add Photo(s)','roots')
   )
));

/*******************************************************************************
** Resort Extra options
** List of services & activies proposed by the resort
*******************************************************************************/
piklist('field', array(
   'type'        => 'checkbox',
   'field'       => 'resort_options',
   'label'       => 'Options',
   'description' => 'Select when true.',
   'choices' => array(
      '1'   => 'Parking',
      '2'   => 'Babysitter',
      '3'   => 'Discotheque/Club',
      '4'   => 'Bars/pubs',
      '5'   => 'Après-ski',
      '6'   => 'Festival',
      '7'   => 'Cinema',
      '8'   => 'Spa',
      '9'   => 'Family Discount',
      '10'  => 'Indoor Swimming Pool',
      '11'  => 'Freeride',
      '12'  => 'Snow park',
      '13'  => 'Ski school',
      '14'  => 'Bus service in resort',
      '15'  => 'Bus service to train station',
      '16'  => 'Newsletter'
   ),
   'list'        => true,
   'serialize'   => true,
));


/*******************************************************************************
** Resort Slopes
** Quantity & level of slopes proposed
*******************************************************************************/
piklist('field', array(
   'type' => 'group',
   'label' => 'Slopes',
   'field' => 'resort_slope_group',
   'fields' => array(
      array(
         'type' => 'text',
         'field' => 'black_slopes',
         'label' => 'Black Slope',
         'columns' => 3
      ),
      array(
         'type' => 'text',
         'field' => 'red_slopes',
         'label' => 'Red Slope',
         'columns' => 3
      ),
      array(
         'type' => 'text',
         'field' => 'blue_slopes',
         'label' => 'Blue Slope',
         'columns' => 3
      ),
      array(
         'type' => 'text',
         'field' => 'Cross_country_skiing',
         'label' => 'Cross-country',
         'columns' => 3
      )
   )
));

/*******************************************************************************
** Resort Prices as well as the default currency
** Prices for adults, kids, seniors, groups, as well as the curreny
*******************************************************************************/

piklist('field', array(
   'type' => 'text',
   'field' => 'resort_price_adult',
   'label' => _x('Adult Price','Piklist metaboxes','roots'),
   'columns' => 6
));

piklist('field', array(
   'type' => 'text',
   'field' => 'resort_price_children',
   'label' => _x('Children Price','Piklist metaboxes','roots'),
   'columns' => 6
));

piklist('field', array(
   'type' => 'text',
   'field' => 'resort_price_senior',
   'label' => _x('Senior Price','Piklist metaboxes','roots'),
   'columns' => 6
));

piklist('field', array(
   'type' => 'text',
   'field' => 'resort_price_groups',
   'label' => _x('Group Price','Piklist metaboxes','roots'),
   'columns' => 6
));

piklist('field', array(
   'type' => 'select',
   'field' => 'resort_price_currency',
   'label' => 'Currency',
   'columns' => 3,
   'choices' => array(
      'CHF' => 'CHF',
      'EUR' => 'EUR',
      'USD' => 'USD',
      'GBP' => 'GBP',
   )
));

/*******************************************************************************
** Resort Weather status, maps & webcams
** Prices for adults, kids, seniors, groups, as well as the curreny
*******************************************************************************/

piklist('field', array(
   'type' => 'text',
   'field' => 'ski_area_status',
   'label' => 'Ski area status',
   'columns' => 12
));

piklist('field', array(
   'type' => 'text',
   'field' => 'webcam',
   'label' => 'webcam',
   'columns' => 12
));

piklist('field', array(
   'type' => 'text',
   'field' => 'ski_area_map',
   'label' => 'Ski area map',
   'columns' => 12
));

piklist('field', array(
   'type'      => 'file',
   'field'     => 'resort_map',
   'label'     => __('Map image','roots'),
));

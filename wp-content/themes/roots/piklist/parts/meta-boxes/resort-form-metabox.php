<?php
/*
Title: Include a new resort
Post Type: resort
*/

/*
  Basic Information
*/
piklist('field', array(
    'type' => 'group'
    ,'label' => 'Tourism Office'
    ,'description' => 'Select y the contact type (Want2Ski or Tourist contact)'
    ,'fields' => array(
      array(
          'type' => 'text'
          ,'field' => 'address'
          ,'label' => 'Address'
          ,'required' => false
          ,'columns' => 12
          ,'attributes' => array(
              'placeholder' => 'Enter the addres here'
            )
      )
      ,array(
          'type' => 'text'
          ,'field' => 'npa'
          ,'label' => 'NPA'
          ,'required' => false
          ,'columns' => 2
      )
      ,array(
          'type' => 'text'
          ,'field' => 'location'
          ,'label' => 'Location'
          ,'required' => false
          ,'columns' => 5
      )
      ,array(
          'type' => 'text'
          ,'field' => 'phone'
          ,'label' => 'Phone Number'
          ,'required' => false
          ,'columns' => 6
          ,'attributes' => array(
              'placeholder' => '+41 xx xxx xx xx'
          )
      )
      ,array(
          'type' => 'text'
          ,'field' => 'fax'
          ,'label' => 'Fax'
          ,'required' => false
          ,'columns' => 6
          ,'attributes' => array(
              'placeholder' => '+41 xx xxx xx xx'
            )
      )
        ,array(
        'type' => 'text'
        ,'field' => 'email'
        ,'label' => 'Email Address'
        ,'required' => false
        ,'columns' => 6
        ,'attributes' => array(
            'placeholder' => 'mail@want2ski.ch'
          )
      ,'validate' => array(
          array(
            'type' => 'email'
          )
          ,array(
            'type' => 'email_domain'
          )
        ))
        ,array(
        'type' => 'text'
        ,'field' => 'website'
        ,'label' => 'Website'
        ,'required' => false
        ,'columns' => 6
        ,'attributes' => array(
            'placeholder' => 'Example: www.wan2ski.ch'
          )
        )
      )

  ));

/*
  Contact Information
*/
piklist('field', array(
  'type' => 'group'
  ,'field' => 'contact_info'
  ,'label' => 'Contact Information'
  ,'add_more' => true
  ,'fields' => array(
    array(
      'type' => 'text'
      ,'field' => 'contact'
      ,'label' => 'Contact'
      ,'required' => false
      ,'columns' => 6
    )
    ,array(
      'type' => 'text'
      ,'field' => 'job_title'
      ,'label' => 'Job Title'
      ,'required' => false
      ,'columns' => 6
    )
    ,array(
        'type' => 'text'
        ,'field' => 'phone_contact'
        ,'label' => 'Phone'
        ,'required' => false
        ,'columns' => 4
        ,'attributes' => array(
            'placeholder' => '+41 xx xxx xx xx'
        )
    )
    ,array(
        'type' => 'text'
        ,'field' => 'mobile_contact'
        ,'label' => 'Mobile'
        ,'required' => false
        ,'columns' => 4
        ,'attributes' => array(
            'placeholder' => '+41 xx xxx xx xx'
        )
    )
    ,array(
        'type' => 'text'
        ,'field' => 'email_contact'
        ,'label' => 'Email'
        ,'required' => false
        ,'columns' => 4
        ,'attributes' => array(
            'placeholder' => 'info@want2ski.com'
        )
    )
  )
));

/*
  Social Media Information
*/
piklist('field', array(
  'type' => 'group'
  ,'field' => 'social_media_info'
  ,'label' => 'Social Media Information'
  ,'add_more' => true
  ,'fields' => array(
    array(
      'type' => 'text'
      ,'field' => 'social_url'
      ,'label' => 'Social Media URL'
      ,'required' => false
      ,'columns' => 6
    )
    ,array(
      'type' => 'select'
      ,'field' => 'social_type'
      ,'value' => '1' // Sets default to Option 2
      ,'label' => 'Social Type'
      ,'columns' => 6
      ,'attributes' => array(
        'class' => 'text'
      )
      ,'choices' => array(
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
/*
  Photo Gallery
*/
piklist('field', array(
  'type' => 'file'
  ,'field' => 'upload_photos'
  ,'label' => 'Photo Gallery'
  ,'scope' => 'post_meta'
  ,'label' => __('Add File(s)','resort')
  ,'options' => array(
    'modal_title' => __('Add File(s)','resort')
    ,'button' => __('Add Photos Here','resort')
  )
));

/*
  Opening/Close Hours
*/
piklist('field', array(
  'type' => 'group'
  ,'label' => 'Opening/Close Hours'
  ,'fields' => array(
    array(
      'type' => 'select'
      ,'field' => 'open_hour'
      ,'label' => 'Opening Hours'
      ,'required' => false
      ,'columns' => 6
      ,'attributes' => array(
        'multiple' => 'multiple'
      )
      ,'choices' => array(
        '1' => '06:00'
        ,'2' => '07:00'
        ,'3' => '08:00'
        ,'4' => '09:00'
        ,'5' => '10:00'
      )
      ,'on_post_status' => array(
        'value' => 'lock'
      )
    )
    ,array(
      'type' => 'select'
      ,'field' => 'close_hour'
      ,'label' => 'Close Hours'
      ,'required' => false
      ,'columns' => 6
      ,'attributes' => array(
        'multiple' => 'multiple'
      )
      ,'choices' => array(
        '1' => '16:00'
        ,'2' => '17:00'
        ,'3' => '18:00'
        ,'4' => '19:00'
        ,'5' => '20:00'
        ,'6' => '21:00'
      )
      ,'on_post_status' => array(
        'value' => 'lock'
      )
    )
  )
));
/*
* Seasonal dates
*/
piklist('field', array(
  'type' => 'group'
  ,'label' => 'Seasonal dates'
  ,'columns' => 12
  ,'fields' => array(
    array(
      'type' => 'checkbox'
      ,'field' => 'seasonal'
      ,'label' => 'If yes then add opening and closing dates'
      ,'choices' => array(
        'show' => 'Yes'
      )
      ,'on_post_status' => array(
          'value' => 'lock'
        )
    )
    , array(
      'type' => 'datepicker'
      ,'field' => 'opening_date'
      ,'label' => 'Opening Date'
      ,'columns' => 6
      ,'options' => array(
        'dateFormat' => 'M d, yy'
      )
      ,'conditions' => array(
        array(
          'field' => 'seasonal'
          ,'value' => 'show'
        )
      )
      ,'attributes' => array(
        'size' => 12
      )
      ,'value' => date('M d, Y', time())
      ,'on_post_status' => array(
        'value' => 'lock'
      )
    )
    , array(
      'type' => 'datepicker'
      ,'field' => 'closing_date'
      ,'label' => 'Closing Date'
      ,'columns' => 6
      ,'options' => array(
        'dateFormat' => 'M d, yy'
      )
      ,'conditions' => array(
        array(
          'field' => 'seasonal'
          ,'value' => 'show'
        )
      )
      ,'attributes' => array(
        'size' => 12
      )
      ,'value' => date('M d, Y', time())
      ,'on_post_status' => array(
        'value' => 'lock'
      )
    )
  )
));
/*
  Options
*/


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


/*
  Altitude Range
*/
piklist('field', array(
    'type' => 'group',
    'label' => 'Altitude',
    'fields' => array(
      array(
          'type' => 'text',
          'field' => 'altitude_top',
          'label' => 'Altitude Top',
          'columns' => 6
      ),
      array(
          'type' => 'text',
          'field' => 'altitude_bottom',
          'label' => 'Altitude Bottom',
          'columns' => 6
      ),
    )
  )
);

/*
  Hotel Acomodation
*/
piklist('field', array(
  'type' => 'group'
  ,'label' => 'Hotel / Accomodation'
  ,'fields' => array(
    array(
      'type' => 'radio'
      ,'field' => '5stars'
      ,'label' => '5 Stars'
      ,'columns' => 3
      ,'value' => 'y'
      ,'choices' => array(
        'y' => 'Yes'
        ,'n' => 'No'
      )
      ,'on_post_status' => array(
        'value' => 'lock'
      )
     )
     ,array(
       'type' => 'radio'
       ,'field' => '4star'
       ,'label' => '4 Stars'
       ,'columns' => 3
       ,'value' => 'y'
       ,'choices' => array(
         'y' => 'Yes'
         ,'n' => 'No'
       )
       ,'on_post_status' => array(
         'value' => 'lock'
       )
     )
     ,array(
       'type' => 'radio'
       ,'field' => '3stars'
       ,'label' => '3 Stars'
       ,'columns' => 3
       ,'value' => 'y'
       ,'choices' => array(
         'y' => 'Yes'
         ,'n' => 'No'
       )
       ,'on_post_status' => array(
         'value' => 'lock'
       )
     )
    ,array(
      'type' => 'radio'
      ,'field' => 'hostel'
      ,'label' => 'Hostel'
      ,'columns' => 3
      ,'value' => 'y'
      ,'choices' => array(
        'y' => 'Yes'
        ,'n' => 'No'
      )
      ,'on_post_status' => array(
        'value' => 'lock'
      )
    )
  )
));

piklist('field', array(
    'type' => 'group',
    'label' => 'Slopes',
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
  )
);


piklist('field', array(
    'type' => 'group',
    'label' => 'Price',
    'fields' => array(
      array(
          'type' => 'text',
          'field' => 'price_adult',
          'label' => 'Price adult',
          'columns' => 3
      ),
      array(
          'type' => 'text',
          'field' => 'Price_children',
          'label' => 'Price children',
          'columns' => 3
      ),
      array(
          'type' => 'text',
          'field' => 'Price_special',
          'label' => 'Price others',
          'columns' => 3
      ),
      array(
          'type' => 'select',
          'field' => 'price_currency',
          'label' => 'Currency',
          'columns' => 3,
          'choices' => array(
            '0' => 'Swiss Francs (CHF)',
            '1' => 'Euros (EUR)'
          )
      )
    )
  )
);

piklist('field', array(
 'type' => 'text',
 'field' => 'ski_area_map',
 'label' => 'Ski area map',
 'columns' => 12
 )
);

piklist('field', array(
 'type' => 'text',
 'field' => 'ski_area_status',
 'label' => 'Ski area status',
 'columns' => 12
 )
);

piklist('field', array(
 'type' => 'text',
 'field' => 'webcam',
 'label' => 'webcam',
 'columns' => 12
 )
);

?>

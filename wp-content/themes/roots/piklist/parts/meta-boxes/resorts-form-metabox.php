<?php
/*
Title: Include a new resort
Post Type: resort
*/
piklist('field',array(
	'type' => 'text'
	,'field' => 'resort_name'
	,'label' => 'Resort name'
	,'required' => true
	,'columns' => 12
	,'attributes' => array(
		'placeholder' => 'Enter the resort name'
		)
	)
);
piklist('field', array(
    'type' => 'group'
    ,'label' => 'Tourism Office'
    ,'description' => 'Select first the contact type (Want2Ski or Tourist contact)'
    ,'fields' => array(
		array(
			'type' => 'radio'
			,'field' => 'contact_type'
			,'label' => 'You are a want2Ski contact? (Yes or not)'
			,'value' => 'y'
			,'required' => true
			,'columns' => 12
			,'choices' => array(
			  'y' => 'Yes'
			  ,'n' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			)
		)
		,array(
        'type' => 'text'
        ,'field' => 'contact'
        ,'label' => 'Contact Person'
        ,'required' => true
        ,'columns' => 12
        ,'attributes' => array(
          	'placeholder' => 'Contact Person or Website'
        	)
      	)
		,array(
        'type' => 'text'
        ,'field' => 'phone'
        ,'label' => 'Phone Number'
        ,'required' => true
        ,'columns' => 6
        ,'attributes' => array(
          	'placeholder' => '+41 xx xxx xx xx'
        	)
      	)
      	,array(
        'type' => 'text'
        ,'field' => 'email'
        ,'label' => 'Email Address'
        ,'required' => true
        ,'columns' => 6
        ,'attributes' => array(
          	'placeholder' => 'mail@want2ski.ch'
        	)
      	)
	)
));
	##
	piklist('field', array(
		'type' => 'group'
		,'label' => 'General Information'
		,'fields' => array(
		array(
			'type' => 'text'
			,'field' => 'altitude_range'
			,'label' => 'Altitude Range'
			,'description' => 'Village - Top of ski area'
			,'required' => true
			,'columns' => 12
			,'attributes' => array(
			  'placeholder' => 'Insert the altitude range'
			)
		)
		,array(
			'type' => 'select'
			,'field' => 'ski_season'
			,'value' => '1' // Sets default to Option 2
			,'label' => 'Ski Season opening date'
			,'description' => '(Stimate)'
			,'attributes' => array(
			  'class' => 'text'
			)
			,'choices' => array(
			  '1' => 'Junuary'
			  ,'2' => 'February '
			  ,'3' => 'March'
			  ,'4' => 'April'
			  ,'5' => 'May'
			  ,'6' => 'June'
			  ,'7' => 'July'
			  ,'8' => 'August'
			  ,'9' => 'September'
			  ,'10' => 'October'
			  ,'11' => 'November'
			  ,'12' => 'December'
			)
		)
		, array(
			'type' => 'group'
			,'field' => 'want2ski_contact_group'
			,'label' => 'Price range for one day ski pass'
			,'list' => false
			,'description' => '(Full day - Cheapest)'
			,'fields' => array(
			  array(
				'type' => 'text'
				,'field' => 'adult_price'
				,'label' => 'For Adult'
				,'columns' => 6
				)
			  ,array(
				'type' => 'text'
				,'field' => 'children_price'
				,'label' => 'For Children'
				,'columns' => 6
				)
			)
		)
		, array(
			'type' => 'radio'
			,'field' => 'family_discount'
			,'label' => 'Family discounts'
			,'value' => 'y'
			,'choices' => array(
			  'y' => 'Yes'
			  ,'n' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			)
		))
	));
	###
	piklist('field', array(
		'type' => 'group'
		,'label' => 'Hotel / Accomodation'
		,'fields' => array(
			array(
				'type' => 'radio'
				,'field' => 'place'
				,'label' => '5* / Place'
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
				,'field' => 'yhostel'
				,'label' => 'Youth hostel/ 2*'
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
	####
	piklist('field', array(
		'type' => 'group'
		,'label' => 'Entertainment'
		,'fields' => array(
			array(
			'type' => 'radio'
			,'field' => 'discoteque'
			,'label' => 'Discoteque / Club'
			,'value' => 'second'
			,'choices' => array(
			  'first' => 'Yes'
			  ,'second' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			))
		  ,array(
			'type' => 'radio'
			,'field' => 'bars'
			,'label' => 'Bars'
			,'value' => 'second'
			,'choices' => array(
			  'first' => 'Yes'
			  ,'second' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			))
		  ,array(
			'type' => 'radio'
			,'field' => 'apres_ski'
			,'label' => 'Apres-Ski'
			,'value' => 'second'
			,'choices' => array(
			  'first' => 'Yes'
			  ,'second' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			))
  
		  ,array(
			'type' => 'radio'
			,'field' => 'festival'
			,'label' => 'Festival'
			,'value' => 'second'
			,'choices' => array(
			  'first' => 'Yes'
			  ,'second' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			))

		  ,array(
			'type' => 'radio'
			,'field' => 'cinema'
			,'label' => 'Cinema'
			,'value' => 'second'
			,'choices' => array(
			  'first' => 'Yes'
			  ,'second' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			))
		)
	));
	
	piklist('field', array(
		'type' => 'group'
		,'label' => 'Services'
		,'fields' => array(
		array(
			'type' => 'radio'
			,'field' => 'babysitter'
			,'label' => 'Babysitter'
			,'value' => 'y'
			,'choices' => array(
			  'y' => 'Yes'
			  ,'n' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			)
		 )
		, array(
			'type' => 'radio'
			,'field' => 'spa'
			,'label' => 'Spa'
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
			,'field' => 'pool'
			,'label' => 'Swimming pool'
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

?>
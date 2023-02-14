<?php

// Editor translations
function wcdp_editor_translations(){   
    $translations = array( 
		'error_allowed_font'  => __( 'Files supported: ttf,otf,eot,woff,woff2', 'wcdp' ),
		'search_in'           => __( 'Search in', 'wcdp' ),
		'no_fonts'            => __( 'No selected fonts found', 'wcdp' ),
		'font_selected'       => __( 'This font is already selected', 'wcdp' ),
		'no_search_tpl'       => __( 'No templates found in search', 'wcdp' ),
		'no_cliparts'         => __( 'No uploaded cliparts found', 'wcdp' ),
		'no_search_clip'      => __( 'No cliparts found in search', 'wcdp' ),
		'no_caz'              => __( 'No uploaded calendars found', 'wcdp' ),
		'no_search_caz'       => __( 'No calendars found in search', 'wcdp' ),
        'no_resources'        => __( 'No images found in search', 'wcdp' ),	
		'no_files'            => __( 'Please choose at least one file', 'wcdp' ),
		'no_layers'           => __( 'No layers', 'wcdp' ),
		'no_mask'             => __( 'Cover the image with the mask layer', 'wcdp' ),
		'select_mask'         => __( 'Select mask layer', 'wcdp' ),
		'new_layer'           => __( 'New layer', 'wcdp' ),
		'layer_options'       => __( 'Layer options', 'wcdp' ),
		'show_layer'          => __( 'Show layer in the output files', 'wcdp' ),
		'sort_layer'          => __( 'Sorting layer', 'wcdp' ),
		'lock_layer'          => __( 'Lock layer', 'wcdp' ),
		'unlock_layer'        => __( 'Unlock layer', 'wcdp' ),
		'unlock_layer_user'   => __( 'Unlock layer to user', 'wcdp' ),
		'delete_layer'        => __( 'Delete layer', 'wcdp' ),
		'text'                => __( 'Text', 'wcdp' ),
		'img'                 => __( 'Image', 'wcdp' ),
		'svg'                 => __( 'Vector', 'wcdp' ),
		'shap'                => __( 'Shape', 'wcdp' ),
		'qr'                  => __( 'QR Code', 'wcdp' ),
		'map'                 => __( 'Map', 'wcdp' ),
        'error_icc'           => __( 'There is a conflict with the selected CMYK / RGB profiles.<br>They may be damaged or reversed. Check the settings.', 'wcdp' ),
	    'imagick_disabled'    => __( 'ImageMagick is disabled or not installed.', 'wcdp' ),	
        'upload'              => __( 'Select a file to upload', 'wcdp' ),
	    'file'                => __( 'Use this file', 'wcdp' ),
	    'supported'           => __( 'Files supported:', 'wcdp' ),
		'unsupported'         => __( 'File is not supported. Please upload a valid file.', 'wcdp' ),
	    'confirm_question'    => __( 'ATTENTION!! ARE YOU SURE?', 'wcdp' ),
	    'success'             => __( 'Restore successful.', 'wcdp' ),
		'update_content'      => __( 'You will proceed to update the color picker table with the profiles', 'wcdp' ),
		'update_info'         => __( 'If the profiles are not correct, make sure to save the changes after selecting them. Keep in mind that generating a new table may take a few minutes depending on the speed and memory of your server. If everything is correct, you can continue.', 'wcdp' ),		
		'update'              => __( 'Update successful.', 'wcdp' ),
		'title_update'        => __( 'UPDATING COLORS PICKER TABLE', 'wcdp' ),
		'cancel_update'       => __( 'CANCELED UPDATE!!', 'wcdp' ),
		'error_chunk'         => __( 'Max colors chunk by conversion is too high.<br>Try change to a lower value.', 'wcdp' ),	
		'save'                => __( 'Save design successful.', 'wcdp' ),
		'save_design'         => __( 'Save', 'wcdp' ),
		'design_title'        => __( 'Enter a title for the design (Optional):', 'wcdp' ),
		'design_new_title'    => __( 'Enter a new title for the design:', 'wcdp' ),
		'untitled'            => __( 'Untitled', 'wcdp' ),
        'save_process'        => __( 'Saving the design wait a moment', 'wcdp' ),
		'save_files'          => __( 'Saving files wait a moment', 'wcdp' ),
		'zip_files'           => __( 'Compressing files wait a moment', 'wcdp' ),
		'cart_process'        => __( 'Processing wait a moment', 'wcdp' ),
		'error_process'       => __( 'There was an error in the process, please try again.', 'wcdp' ),
	    'error_reset'         => __( 'Error reset to defaults.', 'wcdp' ),
		'error_file'          => __( 'Error loading file', 'wcdp' ),
	    'remove'              => __( 'Remove', 'wcdp' ),	  
	    'new_text'            => __( 'Enter your text', 'wcdp' ),		
		'clear'               => __( 'Are you sure to erase all objects?', 'wcdp' ),
		'load'                => __( 'You want to load this design?', 'wcdp' ),
		'delete'              => __( 'Are you sure to remove this design?', 'wcdp' ),
		'delete_success'      => __( 'Delete successful', 'wcdp' ), 
		'no_designs'          => __( 'No saved designs found', 'wcdp' ),
		'save_max_user'       => __( 'You cannot save more designs the maximum allowed is', 'wcdp' ),
		'save_content'        => __( 'Do you want to save the design?', 'wcdp' ),
		'download_content'    => __( 'Do you want to download the design?', 'wcdp' ),
		'cancel'              => __( 'Cancel', 'wcdp' ),
		'confirm'             => __( 'Confirm!', 'wcdp' ),
		'install'             => __( 'Install', 'wcdp' ),
		'all_demos'           => __( 'All demos', 'wcdp' ),
		'demo_select'         => __( 'Installation of the demo', 'wcdp' ),
		'demo_page'           => __( 'Select a page where you want to display the editor', 'wcdp' ),
		'none_demo_page'      => __( 'The installer cannot continue because no page is selected for the editor.', 'wcdp' ),
		'demo_install'        => __( 'Installing demo', 'wcdp' ),
		'wait'                => __( 'wait a moment', 'wcdp' ),
		'save_crop'           => __( 'Save', 'wcdp' ),		
		'move'                => __( 'Move', 'wcdp' ),
		'crop'                => __( 'Crop', 'wcdp' ),
		'zoom_in'             => __( 'Zoom In', 'wcdp' ),
		'zoom_out'            => __( 'Zoom Out', 'wcdp' ),
		'square'              => __( 'Square', 'wcdp' ),
		'reset'               => __( 'Reset', 'wcdp' ),
        'lock'                => __( 'Lock', 'wcdp' ),		
		'unlock'              => __( 'Unlock', 'wcdp' ),
		'group'               => __( 'Group', 'wcdp' ),		
		'ungroup'             => __( 'Ungroup', 'wcdp' ),
		'preview'             => __( 'Preview', 'wcdp' ),		
		'api_maps'            => __( 'Static Maps API not found please check the settings.', 'wcdp' ),
		'product_id'          => __( 'Product ID:', 'wcdp' ),
		'template_id'         => __( 'Template ID:', 'wcdp' ),
		'load_template'       => __( 'You want to load this template?', 'wcdp' ),
		'product_unavailable' => __( 'not available, for more information please contact the administrator.', 'wcdp' ),
		'addtocart_disabled'  => __( 'Choose the product options before adding this product to your cart.', 'wcdp' ),
		'product_added'       => __( 'Product successfully added to shopping cart.', 'wcdp' ),
		'view_cart'           => __( 'View my cart?', 'wcdp' ),
		'qty_zero'            => __( 'The quantity must be greater than or equal to 1.', 'wcdp' ),
		'out_stock'           => __( 'This product is currently out of stock and unavailable.', 'wcdp' ),		
		'shortcuts'           => wcdp_shortcuts_translations()
    );
    return $translations;
}

// Shortcuts translations
function wcdp_shortcuts_translations(){	
    $shortcuts = array(
		'moveup'            => __( 'Move up', 'wcdp' ),
		'movedown'          => __( 'Move down', 'wcdp' ),
        'moveleft'          => __( 'Move left', 'wcdp' ),
        'moveright'         => __( 'Move right', 'wcdp' ),		
		'select_all'        => __( 'Select all', 'wcdp' ),
		'erase_all'         => __( 'Erase all', 'wcdp' ),
		'grid'              => __( 'Grid', 'wcdp' ),
		'center_vertical'   => __( 'Center vertically', 'wcdp' ),
		'center_horizontal' => __( 'Center horizontally', 'wcdp' ),
		'flip_vertical'     => __( 'Flip vertically', 'wcdp' ),
		'flip_horizontal'   => __( 'Flip horizontally', 'wcdp' ),		
        'bring_front'       => __( 'Bring to front', 'wcdp' ),
        'send_back'         => __( 'Send to back', 'wcdp' ),
        'lock'              => __( 'Lock/Unlock', 'wcdp' ),
        'duplicate'         => __( 'Duplicate', 'wcdp' ),
		'clone_sides'       => __( 'Duplicate from side to side', 'wcdp' ),
		'magic_more'        => __( 'Align vertically with more space', 'wcdp' ),
		'magic_less'        => __( 'Align vertically with less space', 'wcdp' ),
		'align_left'        => __( 'Align to left', 'wcdp' ),
		'align_right'       => __( 'Align to right', 'wcdp' ),
		'rotate'            => __( 'Rotate', 'wcdp' ),
		'return_state'      => __( 'Return to original state', 'wcdp' ),
		'align_vertical'    => __( 'Align vertically', 'wcdp' ),
		'align_horizontal'  => __( 'Align horizontally', 'wcdp' ),
		'group'             => __( 'Group/Ungroup', 'wcdp' ),
		'delete'            => __( 'Delete', 'wcdp' ),		
		'undo'              => __( 'Undo', 'wcdp' ),
		'redo'              => __( 'Redo', 'wcdp' ),		
		'line_text_small'   => __( 'Smaller line of text', 'wcdp' ),
		'line_text_large'   => __( 'Larger line of text', 'wcdp' ),
		'key_duplicate'     => __( 'key is already in use, try another combination.', 'wcdp' ),
        'keys_empty'        => __( 'No keyboard shortcuts found!', 'wcdp' ),
		'title'             => __( 'Keyboard shortcuts', 'wcdp' ),
		
		// https://github.com/wesbos/keycodes
		'keyCodes' => array(
            3   => __( 'break', 'wcdp' ),
            8   => __( 'backspace / delete', 'wcdp' ),
            9   => __( 'tab', 'wcdp' ),
            12  => __( 'clear', 'wcdp' ),
            13  => __( 'enter', 'wcdp' ),
            16  => __( 'shift', 'wcdp' ),
            17  => __( 'ctrl', 'wcdp' ),
            18  => __( 'alt', 'wcdp' ),
            19  => __( 'pause/break', 'wcdp' ),
            20  => __( 'caps lock', 'wcdp' ),
            27  => __( 'escape', 'wcdp' ),
            28  => __( 'conversion', 'wcdp' ),
            29  => __( 'non-conversion', 'wcdp' ),
            32  => __( 'spacebar', 'wcdp' ),
            33  => __( 'page up', 'wcdp' ),
            34  => __( 'page down', 'wcdp' ),
            35  => __( 'end', 'wcdp' ),
            36  => __( 'home', 'wcdp' ),
            37  => __( 'Left arrow', 'wcdp' ),
            38  => __( 'Up arrow', 'wcdp' ),
            39  => __( 'Right arrow', 'wcdp' ),
            40  => __( 'Down arrow', 'wcdp' ),
            41  => __( 'select', 'wcdp' ),
            42  => __( 'print', 'wcdp' ),
            43  => __( 'execute', 'wcdp' ),
            44  => __( 'Print Screen', 'wcdp' ),
            45  => __( 'insert', 'wcdp' ),
            46  => __( 'Delete', 'wcdp' ),
            48  => '0',
            49  => '1',
            50  => '2',
            51  => '3',
            52  => '4',
            53  => '5',
            54  => '6',
            55  => '7',
            56  => '8',
            57  => '9',
            58  => ':',
            59  => __( 'semicolon (firefox), equals', 'wcdp' ),
            60  => '<',
            61  => __( 'equals (firefox)', 'wcdp' ),
            63  => 'ß',
            64  => '@ (firefox)',
            65  => 'a',
            66  => 'b',
            67  => 'c',
            68  => 'd',
            69  => 'e',
            70  => 'f',
            71  => 'g',
            72  => 'h',
            73  => 'i',
            74  => 'j',
            75  => 'k',
            76  => 'l',
            77  => 'm',
            78  => 'n',
            79  => 'o',
            80  => 'p',
            81  => 'q',
            82  => 'r',
            83  => 's',
            84  => 't',
            85  => 'u',
            86  => 'v',
            87  => 'w',
            88  => 'x',
            89  => 'y',
            90  => 'z',
            91  => __( 'Windows Key / Left ⌘ / Chromebook Search key', 'wcdp' ),
            92  => __( 'right window key', 'wcdp' ),
            93  => __( 'Windows Menu / Right ⌘', 'wcdp' ),
            96  => __( 'numpad 0', 'wcdp' ),
            97  => __( 'numpad 1', 'wcdp' ),
            98  => __( 'numpad 2', 'wcdp' ),
            99  => __( 'numpad 3', 'wcdp' ),
            100 => __( 'numpad 4', 'wcdp' ),
            101 => __( 'numpad 5', 'wcdp' ),
            102 => __( 'numpad 6', 'wcdp' ),
            103 => __( 'numpad 7', 'wcdp' ),
            104 => __( 'numpad 8', 'wcdp' ),
            105 => __( 'numpad 9', 'wcdp' ),
            106 => __( 'multiply', 'wcdp' ),
            107 => __( 'add', 'wcdp' ),
            108 => __( 'numpad period (firefox)', 'wcdp' ),
            109 => __( 'subtract', 'wcdp' ),
            110 => __( 'decimal point', 'wcdp' ),
            111 => __( 'divide', 'wcdp' ),
            112 => 'f1',
            113 => 'f2',
            114 => 'f3',
            115 => 'f4',
            116 => 'f5',
            117 => 'f6',
            118 => 'f7',
            119 => 'f8',
            120 => 'f9',
            121 => 'f10',
            122 => 'f11',
            123 => 'f12',
            124 => 'f13',
            125 => 'f14',
            126 => 'f15',
            127 => 'f16',
            128 => 'f17',
            129 => 'f18',
            130 => 'f19',
            131 => 'f20',
            132 => 'f21',
            133 => 'f22',
            134 => 'f23',
            135 => 'f24',
            144 => __( 'num lock', 'wcdp' ),
            145 => __( 'scroll lock', 'wcdp' ),
            160 => '^',
            161 => '!',
            163 => '#',
            164 => '$',
            165 => 'ù',
            166 => __( 'page backward', 'wcdp' ),
            167 => __( 'page forward', 'wcdp' ),
            169 => __( 'closing paren (AZERTY)', 'wcdp' ),
            170 => '*',
            171 => __( '~ + * key', 'wcdp' ),
            173 => __( 'minus (firefox), mute/unmute', 'wcdp' ),
            174 => __( 'decrease volume level', 'wcdp' ),
            175 => __( 'increase volume level', 'wcdp' ),
            176 => __( 'next', 'wcdp' ),
            177 => __( 'previous', 'wcdp' ),
            178 => __( 'stop', 'wcdp' ),
            179 => __( 'play/pause', 'wcdp' ),
            180 => __( 'e-mail', 'wcdp' ),
            181 => __( 'mute/unmute (firefox)', 'wcdp' ),
            182 => __( 'decrease volume level (firefox)', 'wcdp' ),
            183 => __( 'increase volume level (firefox)', 'wcdp' ),
            186 => __( 'semi-colon / ñ', 'wcdp' ),
            187 => __( 'equal sign', 'wcdp' ),
            188 => __( 'comma', 'wcdp' ),
            189 => __( 'dash', 'wcdp' ),
            190 => __( 'period', 'wcdp' ),
            191 => __( 'forward slash / ç', 'wcdp' ),
            192 => __( 'grave accent / ñ / æ', 'wcdp' ),
            193 => __( '?, / or °', 'wcdp' ),
            194 => __( 'numpad period (chrome)', 'wcdp' ),
            219 => __( 'open bracket', 'wcdp' ),
            220 => __( 'back slash', 'wcdp' ),
            221 => __( 'close bracket / å', 'wcdp' ),
            222 => __( 'single quote / ø', 'wcdp' ),
            223 => '`',
            224 => __( 'left or right ⌘ key (firefox)', 'wcdp' ),
            225 => 'altgr',
            226 => '< /git >',
            230 => __( 'GNOME Compose Key', 'wcdp' ),
            231 => 'ç',
            233 => __( 'XF86Forward', 'wcdp' ),
            234 => __( 'XF86Back', 'wcdp' ),
            240 => __( 'alphanumeric', 'wcdp' ),
            242 => __( 'hiragana/katakana', 'wcdp' ),
            243 => __( 'half-width/full-width', 'wcdp' ),
            244 => __( 'kanji', 'wcdp' ),
            255 => __( 'toggle touchpad', 'wcdp' )
		)		
	);
    return $shortcuts;
}
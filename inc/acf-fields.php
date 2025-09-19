<?php
if (! function_exists('acf_add_local_field_group')) return;

acf_add_local_field_group(array(
    'key' => 'group_home_cta',
    'title' => 'Home — CTA Texts',
    'fields' => array(

        // CTA 1 Group
        array(
            'key' => 'group_cta1',
            'label' => 'CTA Block 1',
            'name' => 'cta_block_1',
            'type' => 'group',
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_cta1_text',
                    'label' => 'Heading Text',
                    'name' => 'text',
                    'type' => 'text',
                    'wrapper' => array('width' => '25')
                ),
                array(
                    'key' => 'field_cta1_sub',
                    'label' => 'Description',
                    'name' => 'sub',
                    'type' => 'text',
                    'wrapper' => array('width' => '25')
                ),
                array(
                    'key' => 'field_cta1_url',
                    'label' => 'Button URL',
                    'name' => 'url',
                    'type' => 'text',
                    'wrapper' => array('width' => '25')
                ),
                array(
                    'key' => 'field_cta1_heading',
                    'label' => 'Block Label',
                    'type' => 'text',
                    'name' => 'heading',
                    'wrapper' => array('width' => '25')
                ),
                array(
                    'key' => 'field_cta1_image',
                    'label' => 'Image',
                    'name' => 'image',
                    'type' => 'image',
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'wrapper' => array('width' => '25'),
                ),
            )
        ),

        // CTA 2 Group
        array(
            'key' => 'group_cta2',
            'label' => 'CTA Block 2',
            'name' => 'cta_block_2',
            'type' => 'group',
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_cta2_text',
                    'label' => 'Heading Text',
                    'name' => 'text',
                    'type' => 'text',
                    'wrapper' => array('width' => '25')
                ),
                array(
                    'key' => 'field_cta2_sub',
                    'label' => 'Description',
                    'name' => 'sub',
                    'type' => 'text',
                    'wrapper' => array('width' => '25')
                ),
                array(
                    'key' => 'field_cta2_url',
                    'label' => 'Button URL',
                    'name' => 'url',
                    'type' => 'text',
                    'wrapper' => array('width' => '25')
                ),
                array(
                    'key' => 'field_cta2_heading',
                    'label' => 'Block Label',
                    'name' => 'heading',
                    'type' => 'text',
                    'wrapper' => array('width' => '25')
                ),
                array(
                    'key' => 'field_cta2_image',
                    'label' => 'Image',
                    'name' => 'image',
                    'type' => 'image',
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'wrapper' => array('width' => '25'),
                ),
            )
        ),

        // CTA 3 Group
        array(
            'key' => 'group_cta3',
            'label' => 'CTA Block 3',
            'name' => 'cta_block_3',
            'type' => 'group',
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_cta3_text',
                    'label' => 'Heading Text',
                    'name' => 'text',
                    'type' => 'text',
                    'wrapper' => array('width' => '25')
                ),
                array(
                    'key' => 'field_cta3_sub',
                    'label' => 'Description',
                    'name' => 'sub',
                    'type' => 'text',
                    'wrapper' => array('width' => '25')
                ),
                array(
                    'key' => 'field_cta3_url',
                    'label' => 'Button URL',
                    'name' => 'url',
                    'type' => 'text',
                    'wrapper' => array('width' => '25')
                ),
                array(
                    'key' => 'field_cta3_heading',
                    'label' => 'Block Label',
                    'name' => 'heading',
                    'type' => 'text',
                    'wrapper' => array('width' => '25')
                ),
                array(
                    'key' => 'field_cta3_image',
                    'label' => 'Image',
                    'name' => 'image',
                    'type' => 'image',
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'wrapper' => array('width' => '25'),
                ),
            )
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page',
                'operator' => '==',
                'value' => get_option('page_on_front') // Gets the front page ID
            )
        )
    ),
));

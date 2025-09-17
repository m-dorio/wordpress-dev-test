<?php
if (! function_exists('acf_add_local_field_group')) return;

/**
 * Basic ACF groups: Hero, Features, Testimonials, CTA
 * Names/keys intentionally simple. Adjust as needed.
 */

// acf_add_local_field_group(array(
//     'key' => 'group_home_hero',
//     'title' => 'Home — Hero',
//     'fields' => array(
//         array(
//             'key' => 'field_hero_headline',
//             'label' => 'Headline',
//             'name' => 'hero_headline',
//             'type' => 'text'
//         ),
//         array(
//             'key' => 'field_hero_sub',
//             'label' => 'Subheadline',
//             'name' => 'hero_sub',
//             'type' => 'text'
//         ),
//         array(
//             'key' => 'field_hero_image',
//             'label' => 'Hero image',
//             'name' => 'hero_image',
//             'type' => 'image',
//             'return_format' => 'array',
//             'preview_size' => 'medium'
//         ),
//         array(
//             'key' => 'field_hero_cta_text',
//             'label' => 'CTA text',
//             'name' => 'hero_cta_text',
//             'type' => 'text'
//         ),
//         array(
//             'key' => 'field_hero_cta_url',
//             'label' => 'CTA URL',
//             'name' => 'hero_cta_url',
//             'type' => 'url'
//         ),
//     ),
//     'location' => array(
//         array(
//             array(
//                 'param' => 'page_template',
//                 'operator' => '==',
//                 'value' => 'default',
//             ),
//         ),
//     ),
// ));

/* Features — repeater */
// acf_add_local_field_group(array(
//     'key' => 'group_home_features',
//     'title' => 'Home — Features',
//     'fields' => array(
//         array(
//             'key' => 'field_features',
//             'label' => 'Features',
//             'name' => 'features',
//             'type' => 'repeater',
//             'sub_fields' => array(
//                 array('key' => 'f_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'),
//                 array('key' => 'f_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'text'),
//                 array('key' => 'f_icon', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'array'),
//             ),
//             'min' => 0,
//             'max' => 6,
//             'layout' => 'block'
//         ),
//     ),
//     'location' => array(
//         array(array('param' => 'post_type', 'operator' => '==', 'value' => 'page'))
//     )
// ));

/* Testimonials */
// acf_add_local_field_group(array(
//     'key' => 'group_home_testimonials',
//     'title' => 'Home — Testimonials',
//     'fields' => array(
//         array(
//             'key' => 'field_testimonials',
//             'label' => 'Testimonials',
//             'name' => 'testimonials',
//             'type' => 'repeater',
//             'sub_fields' => array(
//                 array('key' => 't_quote', 'label' => 'Quote', 'name' => 'quote', 'type' => 'text'),
//                 array('key' => 't_author', 'label' => 'Author', 'name' => 'author', 'type' => 'text'),
//                 array('key' => 't_role', 'label' => 'Role', 'name' => 'role', 'type' => 'text'),
//             ),
//             'min' => 0,
//             'max' => 10,
//             'layout' => 'block'
//         ),
//     ),
//     'location' => array(array(array('param' => 'post_type', 'operator' => '==', 'value' => 'page')))
// ));


//  CTA Text  GLOBAL
acf_add_local_field_group(array(
    'key' => 'group_home_cta',
    'title' => 'Home — CTA Texts',
    'fields' => array(
        // CTA Text 1
        array(
            'key' => 'field_cta1_text',
            'label' => 'Heading Text',
            'name' => 'cta1_text',
            'type' => 'text',
            'wrapper' => array('width' => '25')
        ),
        array(
            'key' => 'field_cta1_sub',
            'label' => 'Description',
            'name' => 'cta1_sub',
            'type' => 'text',
            'rows' => 3,
            'wrapper' => array('width' => '25')
        ),
        array(
            'key' => 'field_cta1_url',
            'label' => 'Button URL',
            'name' => 'cta1_url',
            'type' => 'text',
            'wrapper' => array('width' => '25')
        ),
        array(
            'key' => 'field_cta1_heading',
            'label' => 'CTA Text 1',
            'type' => 'text',
            'name' => 'cta_sub_1',
            'message' => 'First Call-to-Action Block',
            'wrapper' => array('width' => '25')
        ),

        // CTA Text 2
       
        array(
            'key' => 'field_cta2_text',
            'label' => 'Heading Text',
            'name' => 'cta2_text',
            'type' => 'text',
            'wrapper' => array('width' => '25')
        ),
        array(
            'key' => 'field_cta2_sub',
            'label' => 'Description',
            'name' => 'cta2_sub',
            'type' => 'text',
            'rows' => 3,
            'wrapper' => array('width' => '25')
        ),
        array(
            'key' => 'field_cta2_url',
            'label' => 'Button URL',
            'name' => 'cta2_url',
            'type' => 'text',
            'wrapper' => array('width' => '25')
        ),
        array(
            'key' => 'field_cta2_heading',
            'label' => 'CTA Text 2',
            'name' => 'cta_sub_2',
            'type' => 'text',
            'message' => 'Second Call-to-Action Block',
            'wrapper' => array('width' => '25')
        ),

        // CTA Text 3
       
        array(
            'key' => 'field_cta3_text',
            'label' => 'Heading Text',
            'name' => 'cta3_text',
            'type' => 'text',
            'wrapper' => array('width' => '25')
        ),
        array(
            'key' => 'field_cta3_sub',
            'label' => 'Description',
            'name' => 'cta3_sub',
            'type' => 'text',
            'rows' => 3,
            'wrapper' => array('width' => '25')
        ),
        array(
            'key' => 'field_cta3_url',
            'label' => 'Button URL',
            'name' => 'cta3_url',
            'type' => 'text',
            'wrapper' => array('width' => '25')
        ),
        array(
            'key' => 'field_cta3_heading',
            'label' => 'CTA Text 3',
            'type' => 'text',
            'name' => 'cta_sub_3',
            'message' => 'Third Call-to-Action Block',
            'wrapper' => array('width' => '25')
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

<?php

require_once('../init.php');

$page_content = include_template('university-products.php', [
    'products_tab' => $lang->get("UNIVERSITY_PRODUCTS_TAB"),
    'research_tab' => $lang->get("RESEARCH_ACTIVITY_TAB"),
    'cooperation_tab' => $lang->get("INTERNATIONAL_COOPERATION_TAB"),
    'natural' => $lang->get("NATURAL_SCI"),
    'social' => $lang->get("SOCIAL_SCI"),
    'humanitarian' => $lang->get("HUMANITARIAN_SCI"),
    'math' => $lang->get("MATH_SCI"),
    'other' => $lang->get("OTHER_SCI"),
    'common_prod_list' => $lang->get("COMMON_PROD_LIST"),
    'btn_consult' => $lang->get("BTN_CONSULTATION"),
    'brn_cv' => $lang->get("BTN_CV"),
    'btn_contract' => $lang->get("BTN_CONTRACT"),
    'faculties' => $lang->get("FACULTIES"),
    'research' => $lang->get("RESEARCH"),
    'products' => $lang->get("SF_PRODUCTS"),
    'specs' => $lang->get("SPECS"),
    'n_f_item_1' => $lang->get("NATURAL_FAC_ITEM_1"),
    'n_f_item_2' => $lang->get("NATURAL_FAC_ITEM_2"),
    'n_f_item_3' => $lang->get("NATURAL_FAC_ITEM_3"),
    'n_r_item_1' => $lang->get("NATURAL_RES_ITEM_1"),
    'n_r_item_2' => $lang->get("NATURAL_RES_ITEM_2"),
    'n_r_item_3' => $lang->get("NATURAL_RES_ITEM_3"),
    's_prod_list' => $lang->get("SOCIAL_PROD_LIST"),
    's_f_item_1' => $lang->get("SOCIAL_FAC_ITEM_1"),
    's_f_item_2' => $lang->get("SOCIAL_FAC_ITEM_2"),
    's_f_item_3' => $lang->get("SOCIAL_FAC_ITEM_3"),
    's_f_item_4' => $lang->get("SOCIAL_FAC_ITEM_4"),
    's_r_item_1' => $lang->get("SOCIAL_RES_ITEM_1"),
    's_r_item_2' => $lang->get("SOCIAL_RES_ITEM_2"),
    's_r_item_3' => $lang->get("SOCIAL_RES_ITEM_3"),
    's_r_item_4' => $lang->get("SOCIAL_RES_ITEM_4"),
    's_r_item_5' => $lang->get("SOCIAL_RES_ITEM_5"),
    'h_f_item_1' => $lang->get("HUMANITARIAN_FAC_ITEM_1"),
    'h_f_item_2' => $lang->get("HUMANITARIAN_FAC_ITEM_2"),
    'h_f_item_3' => $lang->get("HUMANITARIAN_FAC_ITEM_3"),
    'f_s_item_1' => $lang->get("PHYSICS_SPECS_ITEM_1"),
    'f_s_item_2' => $lang->get("PHYSICS_SPECS_ITEM_2"),
    'f_s_item_3' => $lang->get("PHYSICS_SPECS_ITEM_3"),
    'f_s_item_4' => $lang->get("PHYSICS_SPECS_ITEM_4"),
    'f_s_item_5' => $lang->get("PHYSICS_SPECS_ITEM_5"),
    'f_s_item_6' => $lang->get("PHYSICS_SPECS_ITEM_6"),
    'other_item_1' => $lang->get("OTHER_LIST_ITEM_1"),
    'other_item_2' => $lang->get("OTHER_LIST_ITEM_2"),
    'other_item_3' => $lang->get("OTHER_LIST_ITEM_3"),
    'other_item_4' => $lang->get("OTHER_LIST_ITEM_4")
]);

$layout_content = include_template('layout.php', [
    'fund_name' => $lang->get("FUND_NAME"),
    'tabs' => $activities_tabs,
    'description' => '',
    'title' => $lang->get("MENU_UNIVERSITY"),
    'subtitle' => $lang->get("UNIVERSITY_PRODUCTS_TAB"),
    'header' => $lang->get("UNIVERSITY_HEADER"),
    'content' => $page_content,
    'menu' => $menu,
    'btn_contact' => $lang->get("FOOTER_BTN_CONTACT"),
    'btn_support' => $lang->get("FOOTER_BTN_SUPPORT"),
    'copyright' => $lang->get("FOOTER_COPYRIGHT")
]);

print($layout_content);

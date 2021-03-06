<?php
$modversion['name'] = "zenTrackXoops";
$modversion['version'] = "2.605";
$modversion['description'] = "zenTrackXoops 2.6.0.5 HelpDesk";
$modversion['author'] = "http://zentrack.sourceforge.net/";
$modversion['credits'] = "Sqeezed into XOOPS and enhanced by Duncan Keir based in original 2.3.2 version by Wang Jue (aka wjue) (http://www.guanxiCRM.com, http://www.wjue.org) ";
$modversion['help'] = "";
$modversion['license'] = "GPL";
$modversion['official'] = 1;
$modversion['image'] = "images/zenTrackxoops_logo.jpg";
$modversion['dirname'] = "zentrack";

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = "zentrack_access";
$modversion['tables'][1] = "zentrack_attachments";
$modversion['tables'][2] = "zentrack_bins";
$modversion['tables'][3] = "zentrack_logs";
//$modversion['tables'][4] = "zentrack_logs_archived";
$modversion['tables'][5] = "zentrack_preferences";
$modversion['tables'][6] = "zentrack_priorities";
$modversion['tables'][7] = "zentrack_reports";
$modversion['tables'][8] = "zentrack_reports_index";
$modversion['tables'][9] = "zentrack_reports_temp";
$modversion['tables'][10] = "zentrack_settings";
$modversion['tables'][11] = "zentrack_systems";
$modversion['tables'][12] = "zentrack_tasks";
$modversion['tables'][13] = "zentrack_tickets";
//$modversion['tables'][14] = "zentrack_tickets_archived";
$modversion['tables'][15] = "zentrack_types";
$modversion['tables'][16] = "zentrack_users";
$modversion['tables'][17] = "zentrack_notify_list";

$modversion['tables'][18] = "zentrack_behavior";
$modversion['tables'][19] = "zentrack_behavior_detail";
$modversion['tables'][20] = "zentrack_group";
$modversion['tables'][21] = "zentrack_group_detail";
$modversion['tables'][22] = "zentrack_varfield";
$modversion['tables'][23] = "zentrack_varfield_idx";
$modversion['tables'][24] = "zentrack_varfield_multi";
$modversion['tables'][25] = "zentrack_agreement";
$modversion['tables'][26] = "zentrack_agreement_item";
$modversion['tables'][27] = "zentrack_company";
$modversion['tables'][28] = "zentrack_employee";
$modversion['tables'][29] = "zentrack_related_contacts";
$modversion['tables'][30] = "zentrack_field_map";
$modversion['tables'][31] = "zentrack_view_map";

//$modversion['tables'][32] = "zentrack_translation_strings";
//$modversion['tables'][33] = "zentrack_translation_words";



// Admin things
$modversion['hasAdmin'] = 1;
//$modversion['system_menu'] = 1;
$modversion['adminindex'] = "admin/admin_index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Blocks
$modversion['blocks'][1]['file'] = "my_tickets.php";
$modversion['blocks'][1]['name'] = _MI_ZENTRACKXOOPS_BNAME_MYTICKETS;
$modversion['blocks'][1]['description'] = _MI_ZENTRACKXOOPS_BDESC_MYTICKETS;
$modversion['blocks'][1]['show_func'] = "b_zt_show_mytickets";
$modversion['blocks'][1]['template'] = 'zt_my_tickets.html';
$modversion['blocks'][1]['edit_func'] = 'b_zt_edit_mytickets';
$modversion['blocks'][1]['options'] = '5';

$modversion['blocks'][2]['file'] = "quick_ticket.php";
$modversion['blocks'][2]['name'] = _MI_ZENTRACKXOOPS_BNAME_QKTICKETS;
$modversion['blocks'][2]['description'] = _MI_ZENTRACKXOOPS_BDESC_QKTICKETS;
$modversion['blocks'][2]['show_func'] = "b_zt_show_quickticket";
$modversion['blocks'][2]['template'] = 'zt_quick_ticket.html';
$modversion['blocks'][2]['edit_func'] = 'b_zt_edit_quickticket';
$modversion['blocks'][2]['options'] = '1|2|3|4';

// Menu
$modversion['hasMain'] = 1;

// Templates
$modversion['templates'][1]['file'] = 'zentrack_index.html';
$modversion['templates'][1]['description'] = '';




?>

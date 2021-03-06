<?php
    include(__DIR__ . '/../../../../inc/pre_config.php');
    include(__DIR__ . '/../../../../../config/config.php');
    include(PERCH_CORE . '/inc/loader.php');

    if (!PERCH_RUNWAY) PerchUtil::redirect(PERCH_LOGINPATH.'/core/settings/');

    $Perch  = PerchAdmin::fetch();
    include(PERCH_CORE . '/inc/auth.php');

    if (!$CurrentUser->has_priv('perch.settings')) {
        PerchUtil::redirect(PERCH_LOGINPATH);
    }
    
    $Perch->page_title = PerchLang::get('Restore Backup');
    $Alert = new PerchAlert;

    $app_path = __DIR__.'/../../..';
    

    include(PERCH_CORE .'/runway/settings/inc/backup.php');

    include(PERCH_CORE . '/runway/settings/modes/backup.general.restore.pre.php');  
    include(PERCH_CORE . '/inc/top.php');
    include(PERCH_CORE . '/runway/settings/modes/backup.general.restore.post.php');
    include(PERCH_CORE . '/inc/btm.php');

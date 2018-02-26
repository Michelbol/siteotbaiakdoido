<?PHP
# Account Maker Config
$config['site']['serverPath'] = "C:/Users/Natan/Desktop/3926/";
$config['site']['useServerConfigCache'] = false;
$config['site']['worlds'] = array(0 => 'Gesior ACC');
$towns_list[0] = array(1 => 'Baiak City', 8 => 'New Island', 9 => 'Vip I', 10 => 'Morgum', 11 => 'Donate Town');

$config['site']['outfit_images_url'] = '/outfit.php';
$config['site']['item_images_url'] = 'http://item-images.ots.me/960/';
$config['site']['item_images_extension'] = '.gif';
$config['site']['flag_images_url'] = 'http://flag-images.ots.me/';
$config['site']['flag_images_extension'] = '.png';
$config['site']['players_group_id_block'] = 3;
$config['site']['limitDeath'] = 5;
$config['site']['levelVideo'] = 150;

# PAGE: donate.php
$config['site']['usePagseguro'] = true; //true show / false hide
$config['site']['usePaypal'] = true;	//true show / false hide
$config['site']['useDeposit'] = true;	//true show / false hide
$config['site']['useZaypay'] = true;	//true show / false hide
$config['site']['useContenidopago'] = true;	//true show / false hide
$config['site']['useOnebip'] = true;	//true show / false hide

# Pagseguro config By IVENSPONTES
$config['pagSeguro']['email'] = "john@doe.com"; //Email Pagseguro
$config['pagSeguro']['token'] = "YOURTOKENHERE"; // TOKEN
$config['pagSeguro']['urlRedirect'] = 'http://tibia.com/?subtopic=donate&action=final'; //turn off redirect and notifications in pagseguro.com.br
$config['pagSeguro']['urlNotification'] = 'http://tibia.com/retpagseguro.php'; //your return location

$config['pagSeguro']['productName'] = 'Premium Points';
$config['pagSeguro']['productValue'] = 1.00; 	// 1.50 = R$ 1,50 etc...
$config['pagSeguro']['doublePoints'] = false; 	## Double points - true is on / false is off

$config['pagSeguro']['host'] = 'localhost';		## YOUR HOST
$config['pagSeguro']['database'] = 'gesior860';	## DATABASE
$config['pagSeguro']['databaseUser'] = 'root';	## USER
$config['pagSeguro']['databasePass'] = '';		## PASSWORD

# Create Account Options
$config['site']['one_email'] = false;
$config['site']['create_account_verify_mail'] = false;
$config['site']['verify_code'] = true;
$config['site']['email_days_to_change'] = 3;
$config['site']['newaccount_premdays'] = 999;
$config['site']['send_register_email'] = false;

# Create Character Options
$config['site']['newchar_vocations'][0] = array(1 => 'Sorcerer Sample', 2 => 'Druid Sample', 3 => 'Paladin Sample', 4 => 'Knight Sample');
$config['site']['newchar_towns'][0] = array(1, 2, 3, 4);
$config['site']['max_players_per_account'] = 15;


# Emails Config
$config['site']['send_emails'] = true;
$config['site']['mail_address'] = "xxx@xxxx.com.br";
$config['site']['smtp_enabled'] = true;
$config['site']['smtp_host'] = "smtp.xxxxx.com.br";
$config['site']['smtp_port'] = 587;
$config['site']['smtp_auth'] = true;
$config['site']['smtp_user'] = "xxx@xxx.com.br";
$config['site']['smtp_pass'] = "xxx";

# PAGE: whoisonline.php
$config['site']['private-servlist.com_server_id'] = 1;
/*
Server id on 'private-servlist.com' to show Players Online Chart (whoisonline.php page), set 0 to disable Chart feature.
To use this feature you must register on 'private-servlist.com' and add your server.
Format: number, 0 [disable] or higher
*/

# PAGE: characters.php
$config['site']['quests'] = array('Annihilator' => 5000,'Demon Helmet' => 2645,'Pits of Inferno' => 5550);
$config['site']['show_skills_info'] = true;
$config['site']['show_vip_storage'] = 0;

# PAGE: accountmanagement.php
$config['site']['send_mail_when_change_password'] = true;
$config['site']['send_mail_when_generate_reckey'] = true;
$config['site']['generate_new_reckey'] = true;
$config['site']['generate_new_reckey_price'] = 500;

# PAGE: guilds.php
$config['site']['guild_need_level'] = 8;
$config['site']['guild_need_pacc'] = false;
$config['site']['guild_image_size_kb'] = 50;
$config['site']['guild_description_chars_limit'] = 2000;
$config['site']['guild_description_lines_limit'] = 6;
$config['site']['guild_motd_chars_limit'] = 250;

# PAGE: adminpanel.php
$config['site']['access_admin_panel'] = 3;
$config['site']['access_tickers'] = 3;
$config['site']['access_admin_painel'] = 3;
$config['site']['access_staff_painel'] = 3;
$config['site']['access_news'] = 3;

# PAGE: latestnews.php
$config['site']['news_limit'] = 6;

# PAGE: killstatistics.php
$config['site']['last_deaths_limit'] = 40;

# PAGE: team.php
$config['site']['groups_support'] = array(2, 3, 4, 5, 6, 7);

# PAGE: highscores.php
$config['site']['groups_hidden'] = array(4, 5, 6);
$config['site']['accounts_hidden'] = array(1);

# PAGE: shopsystem.php
$config['site']['shop_system'] = true;
$config['site']['shopguild_system'] = true;

# PAGE: lostaccount.php
$config['site']['email_lai_sec_interval'] = 180;

# Layout Config
$config['site']['layout'] = 'tibiarl';
$config['site']['vdarkborder'] = '#505050';
$config['site']['darkborder'] = '#D4C0A1';
$config['site']['lightborder'] = '#F1E0C6';
$config['site']['download_page'] = false;
$config['site']['serverinfo_page'] = true;

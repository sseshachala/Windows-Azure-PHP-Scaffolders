<?php
class JConfig {
	public $offline = '';
	public $offline_message = '';
	public $sitename = '';
	public $editor = '';
	public $list_limit = '';
	public $access = '';
	public $debug = '';
	public $debug_lang = '';
	public $dbtype = '';
	public $host = '';
	public $user = '';
	public $password = '';
	public $db = '';
	public $dbprefix = '';
	public $live_site = '';
	public $secret = '';
	public $gzip = '';
	public $error_reporting = '';
	public $helpurl = '';
	public $ftp_host = '';
	public $ftp_port = '';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = '';
	public $storage_type = '';
	public $cloud_acc_name = '';
	public $cloud_access_key = '';
	public $offset = '';
	public $offset_user = '';
	public $mailer = '';
	public $mailfrom = '';
	public $fromname = '';
	public $sendmail = '';
	public $smtpauth = '';
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = '';
	public $smtpsecure = '';
	public $smtpport = '';
	public $caching = '';
	public $cache_handler = '';
	public $cachetime = '';
	public $MetaDesc = '';
	public $MetaKeys = '';
	public $MetaTitle = '';
	public $MetaAuthor = '';
	public $sef = '';
	public $sef_rewrite = '';
	public $sef_suffix = '';
	public $unicodeslugs = '';
	public $feed_limit = '';
	public $log_path = '';
	public $tmp_path = '';
	public $lifetime = '';
	public $session_handler = '';
	
	public function __construct()
	{
		$this->dbtype = azure_getconfig('dbtype');
		$this->host = azure_getconfig('host');
		$this->user = azure_getconfig('user');
		$this->password = azure_getconfig('password');
		$this->db = azure_getconfig('db');
		$this->dbprefix = azure_getconfig('dbprefix');
		$this->offset = azure_getconfig('offset');
		$this->offset_user = azure_getconfig('offset_user');
		$this->dbtype = azure_getconfig('dbtype');
		$this->host = azure_getconfig('host');
		$this->user = azure_getconfig('user');
		$this->password = azure_getconfig('password');
		$this->db = azure_getconfig('db');
		$this->dbprefix = azure_getconfig('dbprefix');
		$this->offline = azure_getconfig('offline');
		$this->offline_message =azure_getconfig('offline_message');
		$this->sitename = azure_getconfig('sitename');
		$this->editor = azure_getconfig('editor');
		$this->list_limit = azure_getconfig('list_limit');
		$this->access = azure_getconfig('access');
		$this->debug = azure_getconfig('debug');
		$this->debug_lang = azure_getconfig('debug_lang');
		$this->live_site = azure_getconfig('live_site');
		$this->secret = azure_getconfig('secret');
		$this->gzip = azure_getconfig('gzip');
		$this->error_reporting = azure_getconfig('error_reporting');
		$this->helpurl = azure_getconfig('helpurl');
		$this->ftp_host = azure_getconfig('ftp_host');
		$this->ftp_port = azure_getconfig('ftp_port');
		$this->ftp_user = azure_getconfig('ftp_user');
		$this->ftp_pass = azure_getconfig('ftp_pass');
		$this->ftp_root = azure_getconfig('ftp_root');
		$this->ftp_enable = azure_getconfig('ftp_enable');
		$this->storage_type = azure_getconfig('storage_type');
		$this->cloud_acc_name = azure_getconfig('cloud_acc_name');
		$this->cloud_access_key = azure_getconfig('cloud_access_key');
		$this->mailer = azure_getconfig('mailer');
		$this->mailfrom = azure_getconfig('mailfrom');
		$this->fromname = azure_getconfig('fromname');
		$this->sendmail = azure_getconfig('sendmail');
		$this->smtpauth = azure_getconfig('smtpauth');
		$this->smtpuser = azure_getconfig('smtpuser');
		$this->smtppass = azure_getconfig('smtppass');
		$this->smtphost = azure_getconfig('smtphost');
		$this->smtpsecure = azure_getconfig('smtpsecure');
		$this->smtpport = azure_getconfig('smtpport');
		$this->caching = azure_getconfig('caching');
		$this->cache_handler = azure_getconfig('cache_handler');
		$this->cachetime = azure_getconfig('cachetime');
		$this->MetaDesc = azure_getconfig('MetaDesc');
		$this->MetaKeys = azure_getconfig('MetaKeys');
		$this->MetaTitle = azure_getconfig('MetaTitle');
		$this->MetaAuthor = azure_getconfig('MetaAuthor');
		$this->sef = azure_getconfig('sef');
		$this->sef_rewrite = azure_getconfig('sef_rewrite');
		$this->sef_suffix = azure_getconfig('sef_suffix');
		$this->unicodeslugs = azure_getconfig('unicodeslugs');
		$this->feed_limit = azure_getconfig('feed_limit');
		$this->log_path = azure_getconfig('log_path');
		$this->tmp_path = azure_getconfig('tmp_path');
		$this->lifetime = azure_getconfig('lifetime');
		$this->session_handler = azure_getconfig('session_handler');	
		$this->offset = azure_getconfig('offset');
		$this->offset_user = azure_getconfig('offset_user');

	}
}
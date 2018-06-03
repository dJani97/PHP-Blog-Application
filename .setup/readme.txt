
___ fejlesztői környezet beállításai: ___


1) MySQL konzolban:

	SET PASSWORD FOR root@localhost = PASSWORD('Password111');

	
	
2) config.inc.php szerkesztése (hogy továbbra is el lehessen érni a konzolt):

	$cfg['Servers'][$i]['password'] = 'Password111';
	$cfg['Servers'][$i]['AllowNoPassword'] = false

	
	
3) Windows gépen való tesztelés esetén érdemes megváltoztatni 
   az Apache portját 80-ról valami másra a 'httpd.conf'-ban:

	Listen 8080
	
	
	
4) mellékelt SQL fájlok futtatása a következő sorrendben:
	- 00_sql_create_talbes.sql
	- 01_sql_insert_posts.sql